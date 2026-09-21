<?php 
include("config.php"); 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gene Search</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file here -->
</head>
<body>

<div class="left">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="card" style="text-align:left; padding: 10px; margin-bottom:50px;">
            <h3>Search for a Gene</h3>
            <div class="search">
                <input type="search" name="gene" id="gene" required class="searchTerm" placeholder="Search the gene here..">
            </div>
            <h3>p-value Cutoff</h3>
            <input type="text" name="pvalue" required>
            <h3>Model</h3>
            <label><input type="checkbox" name="model[]" value="JTK"> JTK</label>
            <label><input type="checkbox" name="model[]" value="ARS"> ARS</label>
            <label><input type="checkbox" name="model[]" value="LS"> LS</label>
            <label><input type="checkbox" name="model[]" value="METACYCLE"> METACYCLE</label>
            <input type="submit" value="Search">
        </div>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Form submitted!<br>"; // Debugging line
    $gene = $conn->real_escape_string($_POST['gene']); 
    $pvalue_cutoff = (float)$_POST['pvalue']; 
    $models = isset($_POST['model']) ? $_POST['model'] : [];

    if (empty($models)) {
        echo "No model selected!<br>";
    } else {
        $pvalue_columns = array(
            "JTK" => "JTK_pvalue",
            "ARS" => "ARS_pvalue",
            "LS"  => "LS_pvalue",
            "METACYCLE" => "meta2d_pvalue"
        );

        $model_conditions = [];
        foreach ($models as $model) {
            if (array_key_exists($model, $pvalue_columns)) {
                $model_conditions[] = $pvalue_columns[$model] . " < $pvalue_cutoff";
            }
        }

        if (!empty($model_conditions)) {
            $query = "SELECT * FROM meta2d_ld_mean_metainput WHERE CycID='$gene' AND (" . implode(" OR ", $model_conditions) . ")";
            echo "Executing query: $query<br>"; // Debugging line
            
            $result = $conn->query($query);
            if ($result && $result->num_rows > 0) {
                echo "<table border='1'><tr>";
                while ($field = $result->fetch_field()) {
                    echo "<th>{$field->name}</th>";
                }
                echo "</tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    foreach ($row as $value) {
                        echo "<td>{$value}</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No results found for the given criteria.<br>";
            }
        } else {
            echo "Please select at least one model.<br>";
        }
    }
}
?>

</body>
</html>
