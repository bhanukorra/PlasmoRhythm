<?php
include("config.inc.php");

$gene = isset($_GET['gene']) ? $_GET['gene'] : null;
$dataPointsModels = [];
$rawPoints = [];
$table1HTML = [];
$message = "";

if ($gene) {
    $p_value_cutoff = 0.05;
    $models = ['ARS','JTK','LS','meta2d'];
    $found_data = false;

    $tables_result = $conn->query("SHOW TABLES");
    while ($tbl = $tables_result->fetch_array()) {
        $strain = $tbl[0];

        // Get timepoint columns
        $cols_result = $conn->query("SHOW COLUMNS FROM `$strain`");
        $time_cols = [];
        while ($col = $cols_result->fetch_assoc()) {
            if (is_numeric($col['Field'])) $time_cols[] = $col['Field'];
        }
        if (empty($time_cols)) continue;

        // Fetch row for gene
        $query_raw = "SELECT * FROM `$strain` WHERE CycID = ?";
        $stmt_raw = $conn->prepare($query_raw);
        $stmt_raw->bind_param("s", $gene);
        $stmt_raw->execute();
        $result_raw = $stmt_raw->get_result();

        if ($row_raw = $result_raw->fetch_assoc()) {
            $found_data = true;

            // --- Collect raw points per strain ---
            $rawPoints[$strain] = [];
            foreach ($time_cols as $time) {
                $rawPoints[$strain][] = ["x" => (int)$time, "y" => (float)$row_raw[$time]];
            }

            // --- Build table header ---
            $table1HTML[$strain] = "
            <div style='display:flex; flex-direction:column; align-items:center; margin-bottom:30px;'>
              <h3 style='margin-top:20px; font-size:25px; font-family:Poppins; text-align:center;'>
                  $gene ($strain)
              </h3>";

            // --- Non-significant messages ---
            $modelMessages = [];
            foreach ($models as $model) {
                $pvalCol = ($model === 'meta2d') ? 'meta2d_pvalue' : "{$model}_pvalue";
                $pvalue = isset($row_raw[$pvalCol]) ? (float)$row_raw[$pvalCol] : null;
                if ($pvalue === null || $pvalue >= $p_value_cutoff) {
                     $modelMessages[] = $model;
                }
            }
            if (!empty($modelMessages)) {
              $modelList = implode(", ", $modelMessages);
    $table1HTML[$strain] .= "<div style='color:red; font-style:italic; margin-bottom:8px; text-align:center;'>
        Not significant for $modelList
    </div>";
            }

            // --- Table start ---
            $table1HTML[$strain] .= "<table class='data-table' border='1'>
                <tr>
                    <th>Model</th><th>Amplitude</th>
                    <th>pvalue</th><th>qvalue</th><th>Period</th><th>Phase</th>
                </tr>";

            // --- Regression baseline ---
            $n = count($rawPoints[$strain]);
            $m = 0; $baseline = 0;
            if ($n > 0) {
                $sumX = $sumY = $sumXY = $sumX2 = 0;
                foreach ($rawPoints[$strain] as $p) {
                    $x = $p['x']; $y = $p['y'];
                    $sumX += $x; $sumY += $y;
                    $sumXY += $x * $y; $sumX2 += $x * $x;
                }
                $meanX = $sumX / $n; $meanY = $sumY / $n;
                $denom = ($n * $sumX2 - $sumX * $sumX);
                $m = $denom != 0 ? ($n * $sumXY - $sumX * $sumY) / $denom : 0;
                $baseline = $meanY - $m * $meanX;
            }

            // --- Model rows and fitted curves ---
            foreach ($models as $model) {
                $amplitudeCol = ($model === 'meta2d') ? 'meta2d_AMP' : "{$model}_amplitude";
                $phaseCol     = ($model === 'meta2d') ? 'meta2d_phase' : "{$model}_adjphase";
                $periodCol    = "{$model}_period";
                $pvalCol      = "{$model}_pvalue";
                $qvalCol      = "{$model}_BH.Q";

                $amplitude = (float)($row_raw[$amplitudeCol] ?? 0);
                $phase     = (float)($row_raw[$phaseCol] ?? 0);
                $period    = (float)($row_raw[$periodCol] ?? 0);
                $pvalue    = isset($row_raw[$pvalCol]) ? (float)$row_raw[$pvalCol] : null;
                $qvalue    = isset($row_raw[$qvalCol]) ? (float)$row_raw[$qvalCol] : null;

                $is_significant = ($pvalue !== null && $pvalue < $p_value_cutoff);
                $row_style = $is_significant ? "" : " style='background-color:#fdd;'";

                $table1HTML[$strain] .= "<tr$row_style>
                    
                   <td>$model</td>
<td>" . ($amplitude !== null ? number_format($amplitude, 3) : '-') . "</td>
<td>" . ($pvalue !== null ? number_format($pvalue, 3) : '-') . "</td>
<td>" . ($qvalue !== null ? number_format($qvalue, 3) : '-') . "</td>
<td>" . ($period !== null ? number_format($period, 3) : '-') . "</td>
<td>" . ($phase !== null ? number_format($phase, 3) : '-') . "</td>
</tr>";


                // --- Fitted line (only ARS for simplicity) ---
                if ($model === 'ARS') {
                    $dataPointsModels[$strain]['ARS'] = [];
                    $omega = ($period > 0) ? (2 * M_PI) / $period : 0;
                    foreach ($time_cols as $time) {
                        $x = (int)$time;
                        $fitted = $baseline + $m * $x;
                        if ($period > 0) {
                            $fitted += $amplitude * cos($omega * ($x - $phase));
                        }
                        $dataPointsModels[$strain]['ARS'][] = ["x" => $x, "y" => $fitted];
                    }
                }
            }
            $table1HTML[$strain] .= "</table></div>";
        }
        $stmt_raw->close();
    }

    if (!$found_data) {
        $message = "Gene not found in any dataset.";
    }
}

echo json_encode([
    "rawPoints" => $rawPoints,
    "dataPointsModels" => $dataPointsModels,
    "rhythmTableHTML" => $table1HTML,
    "message" => $message
]);
$conn->close();
?>
