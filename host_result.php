<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PlasmoRhythm-MetaCycle</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<style>

body {
    overflow-x: hidden;
    width: 100%;
}

/* ── Results Table ─────────────────────────────────────────────────────────── */
#resultsTable {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    font-size: 14px;
    margin: 0;
}

#resultsTable thead tr {
    background: linear-gradient(135deg, #2c1e56, #4a3880);
}

#resultsTable th {
    color: #fff;
    text-align: center;
    padding: 13px 14px;
    font-weight: 600;
    letter-spacing: 0.4px;
    font-size: 13px;
    border: none;
    white-space: nowrap;
}

#resultsTable th:first-child { border-radius: 10px 0 0 0; }
#resultsTable th:last-child  { border-radius: 0 10px 0 0; }

#resultsTable td {
    text-align: center;
    padding: 10px 14px;
    border-bottom: 1px solid #eef0f5;
    border-right: 1px solid #eef0f5;
    vertical-align: middle;
    transition: background 0.15s;
}

#resultsTable td:last-child { border-right: none; }

/* Gene ID column */
#resultsTable td:nth-child(2) { color: #2c1e56; }

/* Description column — left-aligned, muted */
#resultsTable td:nth-child(4) { text-align: left; color: #555; font-size: 12.5px; }

/* Subtle zebra on gene groups */
#resultsTable tbody tr:nth-child(4n+1),
#resultsTable tbody tr:nth-child(4n+2) { background: #fafbff; }
#resultsTable tbody tr:nth-child(4n+3),
#resultsTable tbody tr:nth-child(4n+4) { background: #f4f6fb; }

#resultsTable tbody tr:hover td { background: #eef2ff !important; }

/* Not-significant row tint */
tr.row-not-sig td { background: #fff5f5 !important; }
tr.row-not-sig:hover td { background: #ffe8e8 !important; }

/* Not-found gene row */
tr.row-not-found td { background: #fffbea; color: #856404; font-style: italic; }

.table-container { margin-top: 20px; }

.canvasjs-chart-credit { display: none !important; }

		@font-face {
        font-family: 'Times New Roman';
        src: url('path/to/times-new-roman.ttf');
      }
h3 {
    margin-top: 20px;
    font-size: 28px ; /* Space above section headings */
}

.page-title:before {
    content: "";
    background: 
        linear-gradient(to bottom, color-mix(in srgb, #2c1e56, transparent 80%), #2c1e56),
        url('assets/p_img/mbg.png'); /* Replace with the actual path to your image */
    background-size: cover; /* Ensures the image covers the entire area */
    background-position: center; /* Centers the image */
    position: absolute;
    inset: 0;
}
.


 .link-wrap-left, .link-wrap-right{
	  width: 100%;
 }  
   
 
/* Styling for download buttons */
    .download-btn {
        background-color: #291d54; /* Green background */
        border: none;
        color: white; /* White text */
        padding: 10px 20px; /* Some padding */
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 10px 5px;
        cursor: pointer;
        border-radius: 5px; /* Rounded corners */
        transition: background-color 0.3s ease; /* Smooth hover effect */
    }

    .download-btn:hover {
        background-color: #ffa200; /* yellow on hover */
    }

    .download-btn:active {
        background-color: #ff7300; /* orange when clicked */
    }

    .download-btn:focus {
        outline: none;
    }


</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
         <h1 class="sitename">PlasmoRhythm<sup
            style="font-size: 0.35em; vertical-align: super; line-height: 0; font-style: italic;">v1.0</sup></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html" >Home</a></li>
          <li class="dropdown active">
            <a> <span>Rhythmicity</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
<ul>
    <li class="dropdown">
      <a><span>Transcriptomics</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
      <ul>
        <li><a href="host.php">Host</a></li>
        <li><a href="A-steph.php">Vector</a></li>    
        <li><a href="P-falciparum.php"><span>Parasite</span></a></li>
      </ul>
    </li>
    <li><a href="metabolomics.php">Metabolomics</a></li>    
    <li><a href="proteomics.php"><span>Proteomics</span></a></li>
  </ul>
</li>
<li><a href="virulence.php"><span>Virulence Factors</span></a></li>
          <li><a href="drug.php"><span>Drug Interactors</span></a></li>


          <li><a href="download.html">Download</a></li>
          <li><a href="team.html">Team</a></li>
          <li><a href="contact.html">Contact</a></li>
              <li><a href="help.php">Help</a></li>
            
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">

    <div class="container position-relative" style="display: flex; justify-content: center; align-items: center; height: 100px;">
    <h1>Molecular Rhythmicity</h1>
</div>

    </div><!-- End Page Title -->
    <div class="species-buttons" style="display: flex; justify-content: center; align-items: center; gap: 20px; padding: 20px">
<a href="host.php" style="text-decoration: none;">
    <button style="background-color: #ffa200; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 250px;">
        <i>Homo sapiens: P. vivax</i>
    </button>
</a>  
</div>
<?php
include("config.inc.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$allowed_strains = [
    'ex_vivo_pvivax_motta2023_host_02','ex_vivo_pvivax_motta2023_host_08',
    'ex_vivo_pvivax_motta2023_host_09','ex_vivo_pvivax_motta2023_host_10',
    'ex_vivo_pvivax_motta2023_host_11','ex_vivo_pvivax_motta2023_host_13',
    'ex_vivo_pvivax_motta2023_host_16','ex_vivo_pvivax_motta2023_host_17',
    'ex_vivo_pvivax_motta2023_host_18','ex_vivo_pvivax_motta2023_host_19',
    'ex_vivo_pvivax_motta2023_host_avg',
];
$allowed_models = ['ARS','JTK','LS','meta2d'];

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: host.php");
    exit;
}

// ── Input validation ──────────────────────────────────────────────────────────
$strain_list_raw = array_map('trim', (array)($_POST['strain'] ?? []));
$threshold      = isset($_POST['threshold']) ? (float)$_POST['threshold'] : 0.05;
$threshold_type = in_array($_POST['threshold_type'] ?? '', ['pvalue','qvalue'])
                    ? $_POST['threshold_type'] : 'pvalue';

// Accept model[] array from checkboxes
$selected_models = array_values(array_filter(array_map('trim', (array)($_POST['model'] ?? []))));
$selected_models = array_values(array_intersect($selected_models, $allowed_models));
if (empty($selected_models)) $selected_models = ['ARS'];
$model = implode(', ', array_map('strtoupper', array_map(fn($m) => $m === 'meta2d' ? 'META2D' : $m, $selected_models)));
$show_all_models = count($selected_models) > 1;

$strain_list = array_values(array_intersect($strain_list_raw, $allowed_strains));
if (empty($strain_list)) die("No valid dataset selected.");
$show_multi_strains = count($strain_list) > 1;
$strain = $strain_list[0]; // default for single-strain compat

$genes_raw  = trim($_POST['genes'] ?? '');
$gene_list  = array_values(array_filter(array_map('trim', explode(',', $genes_raw))));
if (empty($gene_list)) die("No genes provided.");

$dataset_labels = [
    'ex_vivo_pvivax_motta2023_host_02'  => 'Host Patient 02 (Motta et al., 2023)',
    'ex_vivo_pvivax_motta2023_host_08'  => 'Host Patient 08 (Motta et al., 2023)',
    'ex_vivo_pvivax_motta2023_host_09'  => 'Host Patient 09 (Motta et al., 2023)',
    'ex_vivo_pvivax_motta2023_host_10'  => 'Host Patient 10 (Motta et al., 2023)',
    'ex_vivo_pvivax_motta2023_host_11'  => 'Host Patient 11 (Motta et al., 2023)',
    'ex_vivo_pvivax_motta2023_host_13'  => 'Host Patient 13 (Motta et al., 2023)',
    'ex_vivo_pvivax_motta2023_host_16'  => 'Host Patient 16 (Motta et al., 2023)',
    'ex_vivo_pvivax_motta2023_host_17'  => 'Host Patient 17 (Motta et al., 2023)',
    'ex_vivo_pvivax_motta2023_host_18'  => 'Host Patient 18 (Motta et al., 2023)',
    'ex_vivo_pvivax_motta2023_host_19'  => 'Host Patient 19 (Motta et al., 2023)',
    'ex_vivo_pvivax_motta2023_host_avg' => 'Average — All Patients (Motta et al., 2023)',
];
// Build display label for all selected strains
$dataset_label_parts = array_map(fn($s) => $dataset_labels[$s] ?? $s, $strain_list);
$dataset_label = implode(', ', $dataset_label_parts);

$results = [];
$chart_data = [];

if (!function_exists('model_cols')) {
// Helper: get column names for a model
function model_cols($m) {
    return [
        'amp'   => ($m === 'meta2d') ? 'meta2d_AMP'  : "{$m}_amplitude",
        'phase' => ($m === 'meta2d') ? 'meta2d_phase' : "{$m}_adjphase",
        'per'   => "{$m}_period",
        'pval'  => "{$m}_pvalue",
        'qval'  => "{$m}_BH.Q",
    ];
}

}
if (!function_exists('fitted_curve')) {
// Helper: compute fitted sinusoid points
function fitted_curve($stats, $cols, $raw_pts, $time_points) {
    if (!$stats || empty($raw_pts) || (float)($stats[$cols['per']] ?? 0) <= 0) return [];
    $n=$sx=$sy=$sxy=$sx2=0;
    $n = count($raw_pts);
    foreach ($raw_pts as $pt){ $sx+=$pt['x'];$sy+=$pt['y'];$sxy+=$pt['x']*$pt['y'];$sx2+=$pt['x']*$pt['x']; }
    $denom = ($n*$sx2 - $sx*$sx);
    if ($denom == 0) return [];
    $m_sl  = ($n*$sxy - $sx*$sy) / $denom;
    $base  = ($sy/$n) - $m_sl*($sx/$n);
    $amp   = (float)$stats[$cols['amp']];
    $phase = (float)$stats[$cols['phase']];
    $per   = (float)$stats[$cols['per']];
    $omega = (2*M_PI) / $per;
    $pts = [];
    foreach ($time_points as $tp) {
        $x = (int)$tp;
        $pts[] = ['x' => $x, 'y' => $base + $m_sl*$x + $amp*cos($omega*($x-$phase))];
    }
    return $pts;
}

}
if (!function_exists('fmt_stat')) {
function fmt_stat($v) {
    if ($v === null || $v === '') return 'N/A';
    $v = (float)$v;
    if ($v == 0) return '0.0';
    if (abs($v) < 0.001) {
        return sprintf('%.1e', $v);
    }
    $s = sprintf('%.2g', $v);
    if (strpos($s, '.') === false && strpos($s, 'e') === false) $s .= '.0';
    return $s;
}
}
foreach ($strain_list as $strain) {

$time_points  = ['0','3','6','9','12','15','18','21','24','27','30','33','36','39','42','45'];
$time_col_sql = '`' . implode('`, `', $time_points) . '`';

// Models to process
$models_to_run = $selected_models;

// ── Detect optional columns ────────────────────────────────────────────────────
$existing_cols = [];
$col_res = $conn->query("SHOW COLUMNS FROM `$strain`");
while ($cr = $col_res->fetch_assoc()) $existing_cols[] = $cr['Field'];
$has_symbol = in_array('symbol', $existing_cols);

// ── Process each gene ─────────────────────────────────────────────────────────


foreach ($gene_list as $input_gene) {
    // Resolve CycID
    $row_meta = null;
    $lookup_queries = [
        "SELECT * FROM `$strain` WHERE CycID = ? LIMIT 1",
        "SELECT * FROM `$strain` WHERE FIND_IN_SET(?, REPLACE(`alias`,' ','')) > 0 LIMIT 1",
    ];
    if ($has_symbol)
        array_splice($lookup_queries, 1, 0, ["SELECT * FROM `$strain` WHERE `symbol` = ? LIMIT 1"]);

    foreach ($lookup_queries as $qry) {
        $s = $conn->prepare($qry);
        if ($s) {
            $s->bind_param("s", $input_gene); $s->execute();
            $r = $s->get_result();
            if ($r->num_rows > 0) { $row_meta = $r->fetch_assoc(); $s->close(); break; }
            $s->close();
        }
    }

    if (!$row_meta) {
        $results[] = ['input' => $input_gene, 'found' => false,
            'strain' => $strain, 'strain_label' => ($dataset_labels[$strain] ?? $strain)];
        continue;
    }

    $cycid   = $row_meta['CycID'];
    $safe_id = preg_replace('/[^a-zA-Z0-9_]/', '_', $cycid);
    $chart_key = $strain . '__' . $safe_id;
    $symbol  = $has_symbol ? ($row_meta['symbol'] ?? '') : ($row_meta['alias'] ?? '');
    $desc    = $row_meta['Product.Description'] ?? '';

    // Fetch raw time-point data once per gene
    $s2 = $conn->prepare("SELECT $time_col_sql FROM `$strain` WHERE CycID = ? LIMIT 1");
    $s2->bind_param("s", $cycid); $s2->execute();
    $tp_row = $s2->get_result()->fetch_assoc(); $s2->close();

    $raw_pts = [];
    if ($tp_row)
        foreach ($time_points as $tp)
            $raw_pts[] = ['x' => (int)$tp, 'y' => (float)$tp_row[$tp]];

    // Build chart_data entry: raw points + one fitted curve per model
    $chart_data[$chart_key] = ['raw' => $raw_pts, 'fitted' => [], 'label' => $cycid];

    // Process each model
    foreach ($models_to_run as $m) {
        $cols = model_cols($m);
        $s = $conn->prepare(
            "SELECT `{$cols['amp']}`,`{$cols['phase']}`,`{$cols['per']}`,`{$cols['pval']}`,`{$cols['qval']}`
             FROM `$strain` WHERE CycID = ? LIMIT 1"
        );
        $s->bind_param("s", $cycid); $s->execute();
        $stats = $s->get_result()->fetch_assoc(); $s->close();

        $pval   = $stats ? (float)($stats[$cols['pval']] ?? 1.0) : 1.0;
        $qval   = $stats ? (float)($stats[$cols['qval']] ?? 1.0) : 1.0;
        $is_sig = ($threshold_type === 'pvalue') ? ($pval < $threshold) : ($qval < $threshold);

        $chart_data[$chart_key]['fitted'][$m] = fitted_curve($stats, $cols, $raw_pts, $time_points);

        $results[] = [
            'input'       => $input_gene,
            'found'       => true,
            'cycid'       => $cycid,
            'safe_id'     => $safe_id,
            'chart_key'   => $chart_key,
            'symbol'      => $symbol,
            'description' => $desc,
            'model'       => strtoupper($m === 'meta2d' ? 'META2D' : $m),
            'amplitude'   => $stats ? number_format((float)$stats[$cols['amp']], 4) : 'N/A',
            'pvalue'      => $stats ? fmt_stat($pval) : 'N/A',
            'qvalue'      => $stats ? fmt_stat($qval) : 'N/A',
            'period'      => $stats ? number_format((float)$stats[$cols['per']], 3) : 'N/A',
            'phase'       => $stats ? number_format((float)$stats[$cols['phase']], 3) : 'N/A',
            'significant' => $is_sig,
            'has_plot'    => !empty($raw_pts),
            'first_model' => ($m === $models_to_run[0]),
            'model_count' => count($models_to_run),
            'strain'      => $strain,
            'strain_label'=> ($dataset_labels[$strain] ?? $strain),
        ];
    }  // end foreach models
}  // end foreach genes
} // end foreach strains

$conn->close();

// ── Readable dataset label ────────────────────────────────────────────────────

?>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

<!-- Search summary bar -->
<div style="background:#f4f4f8; border-radius:8px; padding:12px 24px; margin:10px auto 20px; max-width:960px; font-size:14px; color:#444;">
    <strong>Dataset:</strong> <?= htmlspecialchars($dataset_label) ?> &nbsp;|&nbsp;
    <strong>Model:</strong> <?= $show_all_models ? 'All (ARS, JTK, LS, META2D)' : htmlspecialchars(strtoupper($model)) ?> &nbsp;|&nbsp;
    <strong>Threshold:</strong> <?= htmlspecialchars($threshold_type) ?> &lt; <?= $threshold ?>
    &nbsp;|&nbsp; <strong>Genes queried:</strong> <?= count($gene_list) ?>
    &nbsp;&nbsp;
    <a href="host.php" style="color:#2c1e56; font-weight:bold;">← New Search</a>
</div>

<!-- Results table -->
<div class="table-container" style="width:95%; max-width:1160px; margin:auto; overflow-x:auto;">

<div style="margin-bottom:10px;">
    <button class="download-btn" onclick="downloadTableCSV()">⬇ Download Table (CSV)</button>
</div>

<table id="resultsTable">
    <thead>
        <tr>
            <th>#</th>
            <th>Gene ID</th>
            <th>Gene Symbol</th>
            <th>Description</th>
            <?php if ($show_all_models): ?><th>Model</th><?php endif; ?>
            <th>Amplitude</th>
            <th>p-value</th>
            <th>q-value</th>
            <th>Period (h)</th>
            <th>Phase (h)</th>
            <th>Rhythmicity Plot</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $row_num = 0;
    $prev_cycid  = null;
    $prev_strain = null;
    $total_cols  = ($show_all_models ? 10 : 9) + ($show_multi_strains ? 1 : 0);
    foreach ($results as $row):
        // ── Dataset separator row ──────────────────────────────────────────────
        $cur_strain = $row['strain'] ?? '';
        if ($show_multi_strains && $cur_strain !== $prev_strain):
            $prev_strain = $cur_strain;
            $ds_label    = $row['strain_label'] ?? $cur_strain;
            $row_num     = 0; // reset numbering per dataset
            $prev_cycid  = null;
    ?>
        <tr style="background:linear-gradient(90deg,#2c1e56 0%,#5b3fa3 100%);color:#fff;">
            <td colspan="<?= $total_cols ?>" style="
                padding:10px 18px; font-weight:700; font-size:13.5px;
                letter-spacing:0.5px; border:none;">
                <?= htmlspecialchars($ds_label) ?>
            </td>
        </tr>
    <?php
        endif;
        if (!$row['found']):
    ?>
        <tr class="row-not-found">
            <td><?= ++$row_num ?></td>
            <td colspan="<?= $total_cols ?>">
                <em><?= htmlspecialchars($row['input']) ?></em> — Gene not found in this dataset
            </td>
        </tr>
    <?php
        else:
            $is_new_gene = ($row['cycid'] !== $prev_cycid);
            if ($is_new_gene) { ++$row_num; $prev_cycid = $row['cycid']; }
            $row_class = $row['significant'] ? '' : 'row-not-sig';
    ?>
        <tr class="<?= $row_class ?>">
            <?php if ($show_all_models && $is_new_gene): ?>
            <td rowspan="<?= $row['model_count'] ?>"><?= $row_num ?></td>
            <td rowspan="<?= $row['model_count'] ?>">
                <?= htmlspecialchars($row['cycid']) ?>
                <?php if ($row['input'] !== $row['cycid']): ?>
                    <br><small style="color:#888;">(searched: <?= htmlspecialchars($row['input']) ?>)</small>
                <?php endif; ?>
            </td>
            <td rowspan="<?= $row['model_count'] ?>"><?= htmlspecialchars($row['symbol'] ?: '—') ?></td>
            <td rowspan="<?= $row['model_count'] ?>" style="text-align:left; max-width:200px; font-size:12px;">
                <?= htmlspecialchars($row['description'] ?: '—') ?>
            </td>
            <?php elseif (!$show_all_models): ?>
            <td><?= $row_num ?></td>
            <td><?= htmlspecialchars($row['cycid']) ?>
                <?php if ($row['input'] !== $row['cycid']): ?>
                    <br><small style="color:#888;">(searched: <?= htmlspecialchars($row['input']) ?>)</small>
                <?php endif; ?>
            </td>
            <td><?= htmlspecialchars($row['symbol'] ?: '—') ?></td>
            <td style="text-align:left; max-width:200px; font-size:12px;">
                <?= htmlspecialchars($row['description'] ?: '—') ?>
            </td>
            <?php endif; ?>

            <?php if ($show_all_models): ?>
            <td><?= htmlspecialchars($row['model']) ?></td>
            <?php endif; ?>

            <td><?= htmlspecialchars($row['amplitude']) ?></td>
            <td style="<?= $row['significant'] ? 'color:#1a7a1a; font-weight:700;' : 'color:#c0392b; font-weight:600;' ?>">
                <?= htmlspecialchars($row['pvalue']) ?>
            </td>
            <td><?= htmlspecialchars($row['qvalue']) ?></td>
            <td><?= htmlspecialchars($row['period']) ?></td>
            <td><?= htmlspecialchars($row['phase']) ?></td>

            <?php if (!$show_all_models || $is_new_gene): ?>
            <td <?= ($show_all_models && $is_new_gene) ? "rowspan=\"{$row['model_count']}\"" : '' ?>>
                <?php if ($row['has_plot']): ?>
                <button class="btn-plot"
                    onclick="openPlotModal('<?= $row['chart_key'] ?>', '<?= htmlspecialchars(addslashes($row['cycid'])) ?>', '<?= htmlspecialchars(addslashes($row['symbol'])) ?>')">
                    PLOT
                </button>
                <?php else: ?><span style="color:#aaa;font-size:12px;">No data</span><?php endif; ?>
            </td>
            <?php endif; ?>
        </tr>
    <?php
        endif;
    endforeach;
    ?>
    </tbody>
</table>
<p style="font-size:12px; color:#888; margin-top:8px;">
    <span style="background:#fdd; padding:2px 8px; border-radius:3px;">Red rows</span> = not significant at threshold.
</p>
</div>

<!-- ── Rhythmicity Plot Modal ──────────────────────────────────────────────── -->
<div id="plotModal" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.55); z-index:9999; align-items:center; justify-content:center;">
    <div style="background:#fff; border-radius:12px; padding:28px 28px 20px; width:720px; max-width:96vw; position:relative; box-shadow:0 10px 50px rgba(0,0,0,0.3);">

        <!-- Close -->
        <button onclick="closePlotModal()"
            style="position:absolute; top:14px; right:18px; background:none; border:none; font-size:22px; cursor:pointer; color:#888; line-height:1;">✕</button>

        <!-- Title -->
        <h4 id="modalTitle" style="margin:0 0 18px; font-size:16px; color:#2c1e56; text-align:center; font-weight:700;"></h4>

        <!-- Chart -->
        <canvas id="modalChart" style="max-height:380px;"></canvas>

        <!-- Legend -->
        <p style="text-align:center; font-size:12px; color:#888; margin:10px 0 14px;">
            <span style="color:#ffa200;">●</span> Raw expression &nbsp;|&nbsp;
            <?php if ($show_all_models): ?>
            <?php foreach ($selected_models as $sm):
                $colors = ['ARS'=>'#2c1e56','JTK'=>'#e63946','LS'=>'#2a9d8f','meta2d'=>'#e76f51'];
                $lbl = strtoupper($sm === 'meta2d' ? 'META2D' : $sm);
                $col = $colors[$sm] ?? '#888'; ?>
            <span style="color:<?= $col ?>;">—</span> <?= $lbl ?> &nbsp;
            <?php endforeach; ?>
            fitted sinusoids
            <?php else: ?>
            <span style="color:#2c1e56; font-weight:bold;">—</span>
            <?= strtoupper($selected_models[0] === 'meta2d' ? 'META2D' : $selected_models[0]) ?> fitted sinusoid
            <?php endif; ?>
        </p>

        <!-- Download buttons -->
        <div style="display:flex; justify-content:center; gap:12px; flex-wrap:wrap;">
            <button onclick="downloadRawCSV()"
                style="background:#ffa200; color:#fff; border:none; padding:8px 22px; border-radius:20px;
                       font-size:12px; font-weight:700; letter-spacing:1px; cursor:pointer;
                       box-shadow:0 3px 8px rgba(255,162,0,0.3); transition:background 0.2s;">
                ⬇ Raw Expression CSV
            </button>
            <button onclick="downloadPlotImage()"
                style="background:#2c1e56; color:#fff; border:none; padding:8px 22px; border-radius:20px;
                       font-size:12px; font-weight:700; letter-spacing:1px; cursor:pointer;
                       box-shadow:0 3px 8px rgba(44,30,86,0.25); transition:background 0.2s;">
                ⬇ Plot as PNG
            </button>
        </div>

    </div>
</div>

<style>
.btn-plot {
    background: #2c1e56;
    color: #fff;
    border: none;
    padding: 8px 18px;
    border-radius: 20px;
    cursor: pointer;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1.5px;
    box-shadow: 0 3px 8px rgba(44,30,86,0.25);
    transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
}
.btn-plot:hover {
    background: #ffa200;
    box-shadow: 0 4px 12px rgba(255,162,0,0.35);
    transform: translateY(-1px);
}
</style>

<script>
const chartData = <?php echo json_encode($chart_data, JSON_NUMERIC_CHECK); ?>;
let activeChart  = null;
let activeGeneId = null;

function openPlotModal(safeId, cycid, symbol) {
    const d = chartData[safeId];
    if (!d) return;

    activeGeneId = { safeId, cycid, symbol };

    document.getElementById('modalTitle').textContent =
        cycid + (symbol ? ' (' + symbol + ')' : '') + ' — Rhythmicity Plot';
    document.getElementById('plotModal').style.display = 'flex';

    if (activeChart) { activeChart.destroy(); activeChart = null; }

    const ctx = document.getElementById('modalChart').getContext('2d');

    // Raw data: scatter dots (no connecting line)
    const datasets = [{
        type: 'scatter',
        label: 'Raw Expression',
        data: d.raw.map(p => ({x: p.x, y: p.y})),
        borderColor: '#ffa200',
        backgroundColor: '#ffa200',
        pointRadius: 6,
        pointHoverRadius: 9,
        pointStyle: 'circle',
        order: 5,
    }];

    // Fitted curves — one per model
    const modelColors = { ARS:'#2c1e56', JTK:'#e63946', LS:'#2a9d8f', META2D:'#e76f51' };
    const fittedMap = d.fitted; // object: { ARS:[...], JTK:[...], ... } or array for single model

    if (Array.isArray(fittedMap) && fittedMap.length > 0) {
        // Single model mode
        const modelLabel = '<?= strtoupper($model === 'all' ? '' : $model) ?> Fitted Curve';
        datasets.push({
            type: 'line', label: modelLabel,
            data: fittedMap.map(p => ({x: p.x, y: p.y})),
            borderColor: '#2c1e56', backgroundColor: 'transparent',
            pointRadius: 0, pointHoverRadius: 0,
            tension: 0.4, fill: false, borderWidth: 2.5, order: 1,
        });
    } else if (fittedMap && typeof fittedMap === 'object') {
        // All-models mode
        let ord = 1;
        for (const [mname, pts] of Object.entries(fittedMap)) {
            if (!pts || pts.length === 0) continue;
            const color = modelColors[mname.toUpperCase()] || '#888';
            datasets.push({
                type: 'line', label: mname.toUpperCase() + ' Fitted Curve',
                data: pts.map(p => ({x: p.x, y: p.y})),
                borderColor: color, backgroundColor: 'transparent',
                pointRadius: 0, pointHoverRadius: 0,
                tension: 0.4, fill: false, borderWidth: 2, order: ord++,
            });
        }
    }

    activeChart = new Chart(ctx, {
        type: 'scatter',   // base type; each dataset overrides its own type
        data: { datasets },
        options: {
            responsive: true,
            animation: { duration: 400 },
            interaction: { mode: 'nearest', intersect: false },
            scales: {
                x: {
                    type: 'linear',
                    title: { display: true, text: 'Time (hours)', font: { size: 13 } },
                    ticks: { stepSize: 6 },
                    grid: { color: 'rgba(0,0,0,0.06)' },
                },
                y: {
                    title: { display: true, text: 'Expression', font: { size: 13 } },
                    grid: { color: 'rgba(0,0,0,0.06)' },
                }
            },
            plugins: {
                legend: { position: 'top', labels: { usePointStyle: true, padding: 16 } },
                tooltip: {
                    callbacks: {
                        label: ctx => ctx.dataset.label + ': ' + ctx.parsed.y.toFixed(4)
                    }
                }
            }
        }
    });
}

// ── Download raw expression as CSV ───────────────────────────────────────────
function downloadRawCSV() {
    if (!activeGeneId) return;
    const d = chartData[activeGeneId.safeId];
    if (!d || !d.raw) return;

    const cycid  = activeGeneId.cycid;
    const symbol = activeGeneId.symbol;

    // Header row: time points
    const timeHeaders = d.raw.map(p => p.x);
    let csv = 'GeneID,' + (symbol ? 'Symbol,' : '') + timeHeaders.join(',') + '\n';

    // Data row: expression values
    const vals = d.raw.map(p => p.y.toFixed(6));
    csv += cycid + ',' + (symbol ? symbol + ',' : '') + vals.join(',') + '\n';

    // If multiple fitted models, append them
    if (d.fitted && typeof d.fitted === 'object' && !Array.isArray(d.fitted)) {
        for (const [mname, pts] of Object.entries(d.fitted)) {
            if (!pts || pts.length === 0) continue;
            const fvals = pts.map(p => p.y.toFixed(6));
            csv += cycid + '_' + mname + '_fitted,' + (symbol ? ',' : '') + fvals.join(',') + '\n';
        }
    } else if (Array.isArray(d.fitted) && d.fitted.length > 0) {
        const fvals = d.fitted.map(p => p.y.toFixed(6));
        csv += cycid + '_fitted,' + (symbol ? ',' : '') + fvals.join(',') + '\n';
    }

    const a = document.createElement('a');
    a.href = 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv);
    a.download = cycid + '_expression.csv';
    a.click();
}


function closePlotModal() {
    document.getElementById('plotModal').style.display = 'none';
    if (activeChart) { activeChart.destroy(); activeChart = null; }
}

function downloadPlotImage() {
    if (!activeChart) return;
    const a = document.createElement('a');
    a.href = activeChart.toBase64Image('image/png', 1.0);
    a.download = (activeGeneId ? activeGeneId.cycid : 'plot') + '_rhythmicity.png';
    a.click();
}

function downloadTableCSV() {
    const table = document.getElementById('resultsTable');
    if (!table) return;
    let csv = '';
    for (const row of table.rows) {
        if (row.cells.length === 1 && row.cells[0].colSpan > 3) continue;
        const cells = Array.from(row.cells).slice(0, -1);
        csv += cells.map(c => '"'  + c.innerText.replace(/"/g, '\\"') + '"').join(',') + '\n';
    }
    const a = document.createElement('a');
    a.href = 'data:text/csv;charset=utf-8,' + encodeURIComponent(csv);
    a.download = 'host_rhythmicity_results.csv';
    a.click();
}

// Close on backdrop click
document.getElementById('plotModal').addEventListener('click', function(e) {
    if (e.target === this) closePlotModal();
});

// Download table as CSV
</script>


  </main>

  <footer id="footer" class="footer dark-background">

<div class="container footer-top">
  <div class="row gy-4">
    <div class="col-lg-4 col-md-6 footer-about">
      <a href="index.html" class="d-flex align-items-center">
        <span class="sitename">PlasmoRhythm</span>
      </a>
                     <p style="font-size: 0.85em; font-style: italic; color: #aaa; margin: 4px 0 0 0;">Release version 1.0 &mdash; February 2026</p>

      <div class="footer-contact pt-3">
        <p>Department of Biotechnology</p>
        <p>IIT Hyderabad, 502285</p>
        <p><strong>Email:</strong> <span>filipaferreira@berkeley.edu</span></p>
              <p><strong>Email:</strong> <span>rahulk@bt.iith.ac.in</span></p>
              <p><strong>Email:</strong> <span>sandipan.ray@bt.iith.ac.in</span></p>
      </div>
    </div>
  </div>
</div>

<div style="position: relative;">
  <a href="https://iith.ac.in/" target="_blank" style="position: absolute; right: 20px; bottom: 20px;margin-right: 70px;">
    <img src="assets/img/removeiith.png" alt="" style="width: 300px; height: 100px;">
  </a>
</div>

<div class="container copyright text-center mt-4">
  <p>© <span>Copyright</span> 
    <strong class="px-1 sitename">
      <a href="https://www.circadianlab-iith.com/" target="_blank">CRDB Lab</a> and 
      <a href="https://people.iith.ac.in/rahulk/index.html" target="_blank">CG&T Lab</a>
    </strong> 
    <span>All Rights Reserved</span>
  </p>
        <div class="credits">
    Template by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>

</footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>