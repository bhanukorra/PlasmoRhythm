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

table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    /* Style table headers */
    th {
        background-color: #ffa200;
        color: white;
        text-align: center;
        padding: 12px 15px;
    }

    /* Style table data cells */
    td {
        text-align: center;
        padding: 10px 15px;
        border: 1px solid #ddd;
    }

    /* Alternate row colors */
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    /* Style the table container */
    .table-container {
        width: 70%;
        margin: auto;
        overflow-x: auto;
    }

    /* Add a border to the table */
    table, th, td {
        border: 1px solid #ddd;
    }

    /* Add spacing around the table */
    .table-container {
        margin-top: 20px;
    }

    /* Styling for the table header and content */
    h2 {
        text-align: center;
        color: #333;
    }

 body {
 overflow-x: hidden; /* Prevents horizontal scrolling */
  width: 100%; /* Ensures the body width is 100% of the viewport */
}
.canvasjs-chart-credit {
            display: none !important;
        }

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
                <h1 class="sitename">PlasmoRhythm</h1>
      </a>

      <nav id="navmenu" class="navmenu">
      <ul>
          <li><a href="index.html" class="active">Home</a></li>
          <li class="dropdown"><a href="#"><span>Rhythmicity</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="P-falciparum.php">P.falciparum</a></li>           
              <li><a href="P-chaubaudi.php">P.chaubaudi</a></li>
              <li><a href="P-vivax.php">P.vivax</a></li>
              
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Implementation</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                        
              <li><a href="drug.php">Anti Malarial Drug Interaction</a></li>
              <li><a href="virulence.php">Virulence Factor</a></li>
              <!-- <li><a href="immune.html">Rhythmic Immune Factor</a></li> -->
            </ul>
          </li>
          <li><a href="download.html">Download</a></li>
          <li><a href="team.html">Team</a></li>
          <li><a href="contact.html">Contact</a></li>
              <li><a href="help.html">Help</a></li>
            
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
<a href="P-chaubaudi.php" style="text-decoration: none;">
    <button style="background-color: #ffa200; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
        <i>P. chaubaudi</i>
    </button>
</a>  
</div>
<?php
include("config.inc.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Initialize variables
$dataPoints = [];
$table1HTML = "";
$table2HTML = "";
// Allowed strains in the database
$allowed_strains = ['case'];
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get strain and validate it
    $strain = strtolower(trim($_POST['strain'])); // Convert input to lowercase
    if (!in_array($strain, $allowed_strains)) {
        die("Error: Invalid strain selected.");
    }
    // Get other form inputs
    $gene = $_POST['gene'];
    $p_value_cutoff = $_POST['pvalue'];
    // Validate models
    if (!isset($_POST['model']) || empty($_POST['model'])) {
        die("Error: No model selected.");
    }
    $models = $_POST['model']; // Array of selected models
    // Build the query dynamically for multiple models
    $conditions = [];
    foreach ($models as $model) {
        $conditions[] = "{$model}_pvalue < ?";
    }
    $whereClause = implode(" OR ", $conditions);
    $query = "SELECT DISTINCT * FROM `$strain` WHERE CycID = ? AND ($whereClause)";
    $stmt = $conn->prepare($query);
    // Dynamically bind parameters
    $bindParams = array_merge([$gene], array_fill(0, count($models), $p_value_cutoff));
    $types = str_repeat("s", 1) . str_repeat("d", count($models)); // "s" for gene, "d" for p-values
    $stmt->bind_param($types, ...$bindParams);
    $stmt->execute();
    // Fetch results for the first table
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $table1HTML = "<table id='table1' border='1'><tr>
            <th>CycID</th><th>Model</th><th>Amplitude</th>
            <th>pvalue</th><th>qvalue</th><th>Period</th><th>Phase</th>
        </tr>";
        $found = false; // Track if any gene passes the condition
        while ($row = $result->fetch_assoc()) {
            foreach ($models as $model) {
                // Check if the model-specific p-value is below the threshold
                if (isset($row["{$model}_pvalue"]) && $row["{$model}_pvalue"] < $p_value_cutoff) {
                    $found = true; // At least one gene passes
                    // Use model-specific column names
                    $amplitude_col = ($model === 'meta2d') ? 'meta2d_AMP' : "{$model}_amplitude";
                    $adjphase_col = ($model === 'meta2d') ? 'meta2d_phase' : "{$model}_adjphase";
                    // Check if the required columns exist in the row
                    if (isset($row[$amplitude_col]) && isset($row[$adjphase_col])) {
                        $table1HTML .= "<tr>
                            <td>" . htmlspecialchars($row['CycID']) . "</td>
                            <td>" . htmlspecialchars($model) . "</td>
                            <td>" . htmlspecialchars($row[$amplitude_col]) . "</td>
                            <td>" . htmlspecialchars($row["{$model}_pvalue"]) . "</td>
                            <td>" . htmlspecialchars($row["{$model}_BH.Q"]) . "</td>
                            <td>" . htmlspecialchars($row["{$model}_period"]) . "</td>
                            <td>" . htmlspecialchars($row[$adjphase_col]) . "</td>
                        </tr>";
                    }
                }
            }
        }
        $table1HTML .= "</table>";
        if (!$found) {
            $table1HTML = "Error: No gene passed the p-value cutoff.";
        }
    } else {
        $table1HTML = "Error: No gene found for the selected models and conditions.";
    }
    $stmt->close();

    // Prepare and execute the SQL query for the second table
 // Initialize time points and query setup
$time_points = [
    'case' => ['0', '3', '6', '9', '12', '15', '18', '21', '24', '27', '30', '33', '36', '39', '42', '45']
];

// Get the selected time points based on strain
$selected_time_points = $time_points[$strain];
$time_columns = implode('`, `', $selected_time_points);

// Prepare the SQL query to fetch time point data for the second table
$query = "SELECT CycID, `$time_columns`
          FROM `$strain`
          WHERE CycID = ? AND {$model}_pvalue < ?";

$stmt = $conn->prepare($query);
if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
}
$stmt->bind_param("sd", $gene, $p_value_cutoff);
if (!$stmt->execute()) {
    die("Error executing statement: " . $stmt->error);
}

// Fetch results for the second table
$result = $stmt->get_result();
if ($result === false) {
    die("Error fetching result: " . $stmt->error);
}

// Start building the HTML table for the second table
$table2HTML = "";
if ($result->num_rows > 0) {
    // Create table header with time points as columns
    $table2HTML = "<table id='table2' border='1'><tr><th>CycID</th>";
    foreach ($selected_time_points as $time) {
        $table2HTML .= "<th>" . htmlspecialchars($time) . "</th>";
    }
    $table2HTML .= "</tr>";

    // Loop through each row and create table rows
    while ($row = $result->fetch_assoc()) {
        $table2HTML .= "<tr><td>" . htmlspecialchars($row['CycID']) . "</td>";
        foreach ($selected_time_points as $time) {
            $table2HTML .= "<td>" . htmlspecialchars($row[$time]) . "</td>";
        }
        $table2HTML .= "</tr>";
    }

    $table2HTML .= "</table>";
} else {
    $table2HTML = "No data found for the second table.";
}

$stmt->close();

// Prepare chart data points for the models (same logic as before)
$dataPointsModels = []; // Initialize chart data array

foreach ($models as $model) {
    // Map the column names based on the model
    $amplitudeCol = ($model === 'meta2d') ? 'meta2d_AMP' : "{$model}_amplitude";
    $phaseCol = ($model === 'meta2d') ? 'meta2d_phase' : "{$model}_adjphase";
    $periodCol = "{$model}_period";

    // Fetch model-specific data
    $query = "SELECT `$amplitudeCol`, `$phaseCol`, `$periodCol` 
              FROM `$strain` 
              WHERE CycID = ? AND {$model}_pvalue < ?";
    $stmt = $conn->prepare($query);
    if (!$stmt) {
        die("Error preparing statement for model: " . $conn->error);
    }
    $stmt->bind_param("sd", $gene, $p_value_cutoff);
    if (!$stmt->execute()) {
        die("Error executing statement for model: " . $stmt->error);
    }

    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $amplitude = $row[$amplitudeCol];
            $phase = $row[$phaseCol];
            $period = $row[$periodCol];
            
            // Generate fitted values for each time point and store in chart data
            foreach ($selected_time_points as $time) {
                $fitted_value = $amplitude * sin((2 * pi() / $period) * ((int)$time - $phase));
                $dataPointsModels[$model][] = ["x" => (int)$time, "y" => $fitted_value];
            }
        }
    }
}
$stmt->close();

}

// Close the connection
$conn->close();
?>

<!-- Include CanvasJS -->
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<!-- Render the chart -->
<div id="chartContainer" style="height: 455px; width: 50%;margin: auto;"></div>
<script>
    // Data for the chart
    const modelData = <?php echo json_encode($dataPointsModels, JSON_NUMERIC_CHECK); ?>;

// Build chart data series for models
const dataSeries = [];
for (const [model, points] of Object.entries(modelData)) {
    dataSeries.push({
        type: "spline",
        name: model,
        showInLegend: true,
        dataPoints: points
    });
}

// Render chart
const chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    exportEnabled: true,
    title: {
        text: "<?php echo htmlspecialchars($gene); ?>"
    },
    axisX: {
        title: "Time",
        interval: 4
    },
    axisY: {
        title: "Expression"
    },
    data: dataSeries
});

chart.render();
</script>

<!-- Render the tables -->
<div class="table-container">
<button class="download-btn" onclick="downloadTableAsCSV('table2')">Download Plot Table</button>
<button class="download-btn" onclick="downloadTableAsCSV('table1')">Download Result Table</button>
    <?php echo $table1HTML; ?>
    
    
    <div style="display: none;">
    <?php echo $table2HTML; ?>
</div>

   
</div>


<script>
    // Function to download the table as CSV
    function downloadTableAsCSV(tableId) {
        var table = document.getElementById(tableId); // Get the table by ID
        var rows = table.rows;
        var csvContent = ""; // Initialize the CSV content variable

        // Loop through each row and create CSV content
        for (var i = 0; i < rows.length; i++) {
            var cells = rows[i].cells;
            var rowContent = [];

            for (var j = 0; j < cells.length; j++) {
                rowContent.push('"' + cells[j].innerText + '"'); // Escape quotes for CSV
            }

            csvContent += rowContent.join(",") + "\n"; // Join each row's cells with commas and add a new line
        }

        // Create a link to trigger the download
        var hiddenElement = document.createElement('a');
        hiddenElement.href = 'data:text/csv;charset=utf-8,' + encodeURI(csvContent); // Encode CSV content
        hiddenElement.target = '_blank';
        hiddenElement.download = tableId + '_data.csv'; // Set the name for the downloaded file
        hiddenElement.click(); // Trigger the click to download the CSV file
    }
</script>
   

  </main>

  <footer id="footer" class="footer dark-background">

<div class="container footer-top">
  <div class="row gy-4">
    <div class="col-lg-4 col-md-6 footer-about">
      <a href="index.html" class="d-flex align-items-center">
        <span class="sitename">PlasmoRhythm</span>
      </a>                <p style="font-size: 0.85em; font-style: italic; color: #aaa; margin: 4px 0 0 0;">Release version 1.0 &mdash; February 2026</p>

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