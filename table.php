<?php
include("config.inc.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $strain = strtolower(trim($_POST['strain']));
    $gene = $_POST['gene'];
    $model = $_POST['model'];
    $p_value_cutoff = $_POST['pvalue'];

    // Prepare the SQL query for the second table
    $time_points = [
        // ... (same as before)
    ];
    $selected_time_points = $time_points[$strain];
    $time_columns = implode('`, `', $selected_time_points);

    $query = "SELECT CycID, `$time_columns` FROM `$strain` WHERE CycID = ? AND {$model}_pvalue < ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sd", $gene, $p_value_cutoff);
    $stmt->execute();
    $result = $stmt->get_result();

    // Set headers for download
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="table2.csv"');

    // Open output stream
    $output = fopen('php://output', 'w');

    // Write header row
    fputcsv($output, array_merge(['CycID'], $selected_time_points));

    // Write data rows
    while ($row = $result->fetch_assoc()) {
        $data = [$row['CycID']];
        foreach ($selected_time_points as $time) {
            $data[] = $row[$time];
        }
        fputcsv($output, $data);
    }

    fclose($output);
    exit();
}
?>