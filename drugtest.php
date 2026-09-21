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


.search {
            display: flex;
            justify-content: center;
        }

        .search input[type="search"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.1);
        }
hr.new1 {
 border-top: 1px solid black;
}

.card {
    display: flex;
    padding: 20px;
    background-color: white;
    max-width: 560px;
    margin: auto;
    border: none; /* Remove any border */
    outline: none; /* Remove any outline */
}
.card2 {
    display: flex;
   
    padding: 20px;
    box-shadow: 0 6px 90px 0 rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    background-color: white;
    width: 500px;
    height: 300px;
    
}
.button-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 buttons per row */
    gap: 10px; /* space between buttons */
    padding-top: 10px;
}

.button {
    width: 100%; /* Make buttons fill their container */
    padding: 10px;
    text-align: center;
}

h3 {
    margin-top: 20px;
    font-size: 25px ;
    font-family: 'Poppins'; /* Space above section headings */
}

.searchTerm {
    width: calc(100% - 20px); /* Adjust width to fit */
    padding: 10px;             /* Padding inside the input */
    border-radius: 5px;       /* Rounded corners */
    border: 1px solid #ccc;   /* Border for input */
}
.canvasjs-chart-credit {
            display: none !important;
        }

		@font-face {
        font-family: 'Times New Roman';
        src: url('path/to/times-new-roman.ttf');
      }
.button {
    background-color: #838383; /* Blue background */
    color: white;              /* White text color */
    padding: 10px 15px;       /* Padding around the button */
    border: none;              /* No border */
    border-radius: 5px;       /* Rounded corners */
    cursor: pointer;           /* Pointer cursor on hover */
}
.button2 {
    background-color: #2c1e56; /* Blue background */
    color: white;              /* White text color */
    padding: 10px 15px;       /* Padding around the button */
    border: none;              /* No border */
    border-radius: 5px;       /* Rounded corners */
    cursor: pointer;           /* Pointer cursor on hover */
}
.button:hover {
    background-color: #0056b3; /* Darker blue on hover */
}

.dropdown-container {
    position: relative;
}

.dropdown-button {
    background-color: #007bff; /* Default button color */
    color: white;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
}

.dropdown-button.green {
    background-color: #28a745; /* Green color for selected button */
}

.dropdown-content {
    position: absolute;
    z-index: 1;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    display: none;
}

.dropdown-content div {
    padding: 10px;
    cursor: pointer;
}

.dropdown-content div:hover {
    background-color: #ddd; /* Change color on hover */
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
.cutoff input {
    margin-right: 10px; /* Space between labels and inputs */
}


 .link-wrap-left, .link-wrap-right{
	  width: 100%;
 }
 .button5 {
 font-size: 12px;
 padding: 10px;
}

.searchTerm {
 width: 80%;
 border: 3px solid lightblue;
 border-right: none;
 padding: 15px;
 height: 40px;
 border-radius: 5px 0 0 5px;
 outline: none;
 color: black;
  }
  .searchTerm:focus{
 color:black ;
  }
.searchButton {
 width: 20%;
 padding: 5px;
 height: 40px;
 border: solid lightblue ;
 text-align: center;
 background: light blue  ;
 color:white;
 border-radius: 0 5px 5px 0;
 cursor: pointer;
 font-size: 12px;
}


.op{
flex:column;
}
.button1{
font-size: 14px;
}
.custom-dropdown {
    padding: 10px 15px;
    font-size: 16px;
    border-radius: 8px;
    border: 1px solid #ccc;
    background-color: #f9f9f9;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    transition: border-color 0.3s, background-color 0.3s;
}

.custom-dropdown:focus {
    border-color: #ff9800;
    background-color: #fff;
    outline: none;
}

.custom-dropdown option {
    font-size: 16px;
    padding: 10px;
}

.stats-container {
    display: flex;
    align-items: center;
    gap: 20px;
}



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
    .main-container {
    display: flex;
    justify-content: space-between;
    gap: 20px; /* Space between the card and the table */
    flex-wrap: wrap; /* Allow wrapping for smaller screens */
}

.card-container {
    flex: 1; /* Take up available space */
    max-width: 45%; /* You can adjust this value as needed */
}

.table-container {
    flex: 1; /* Take up available space */
    max-width: 45%; /* Adjust the width for the table */
}

@media (max-width: 768px) {
    .main-container {
        flex-direction: column;
        gap: 10px;
    }

    .card-container, .table-container {
        max-width: 100%; /* Stack items on smaller screens */
    }
}
#chartContainer {
        width: 45%;
    }
    .container2 {
        display: flex;
        flex-direction: column;
        align-items: center;
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
          <li class="dropdown">
  <a href="javascript:void(0);"><span>Rhythmicity</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
  <ul>
    <li><a href="P-vivax.php">Host</a></li>
    <li><a href="A-steph.php">Vector</a></li>

    <!-- Nested dropdown for Parasite -->
    <li class="dropdown">
      <a><span>Parasite</span> <i class="bi bi-chevron-right toggle-dropdown"></i></a>
      <ul>
      <li><a href="P-falciparum.php"><em>P. falciparum</em></a></li>
        <li><a href="P-chaubaudi.php"><em>P. chaubaudi</em></a></li>
        <li><a href="P-vivax.php"><em>P. vivax</em></a></li>
        <li><a href="P-ber.php"><em>P. berghei</em></a></li>
      </ul>
    </li>

  </ul>
</li>
          <li class="dropdown"><a href="javascript:void(0);"><span>Implementation</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
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

  <div class="page-title dark-background">
        <div class="container position-relative" style="display: flex; justify-content: center; align-items: center; height: 100px;">
            <h1>Anti Malarial Drug Interaction</h1>
        </div>
    </div><!-- End Page Title -->


    <?php
include("config.inc.php");
$drug = isset($_POST['drug']) ? $_POST['drug'] : null;
$gene = isset($_GET['gene']) ? $_GET['gene'] : null;
$dataPointsModels = [];
$tableHTML = "";

// Fetch gene-specific data for the chart
if ($gene) {
    $strain = "3d7"; // Example strain, replace with actual logic
    $p_value_cutoff = 0.05; // Example cutoff, replace with actual logic
    $models = ['JTK', 'ARS', 'LS', 'meta2d'];
    $time_points = [
        '3d7' => ['0', '3', '6', '9', '12', '15', '18', '21', '24', '27', '30', '33', '36', '39', '42', '45', '48', '51', '54', '57', '60'],
    ];
    $selected_time_points = $time_points[$strain];

    foreach ($models as $model) {
        $amplitudeCol = ($model === 'meta2d') ? 'meta2d_AMP' : "{$model}_amplitude";
        $phaseCol = ($model === 'meta2d') ? 'meta2d_phase' : "{$model}_adjphase";
        $periodCol = "{$model}_period";

        $query = "SELECT `$amplitudeCol`, `$phaseCol`, `$periodCol` FROM `$strain` WHERE CycID = ? AND {$model}_pvalue < ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sd", $gene, $p_value_cutoff);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $amplitude = $row[$amplitudeCol];
            $phase = $row[$phaseCol];
            $period = $row[$periodCol];

            foreach ($selected_time_points as $time) {
                $fitted_value = $amplitude * sin((2 * pi() / $period) * ((int)$time - $phase));
                $dataPointsModels[$model][] = ["x" => (int)$time, "y" => $fitted_value];
            }
        }
    }
    $stmt->close();
}

// Process drug search and generate gene table
if ($_SERVER["REQUEST_METHOD"] == "POST" && $drug) {
    $query = "SELECT Target, Score FROM drug WHERE Drug = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $drug);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $tableHTML = "<table class='styled-table'><tr><th>Gene</th><th>Score</th></tr>";

        while ($row = $result->fetch_assoc()) {
            $tableHTML .= "<tr>
                <td><a href='#' onclick=\"loadGenePlot(event, '" . htmlspecialchars($row['Target']) . "')\">" . htmlspecialchars($row['Target']) . "</a></td>
                <td>" . htmlspecialchars($row['Score']) . "</td>
            </tr>";
        }

        $tableHTML .= "</table>";
    } else {
        $tableHTML = "No related genes found for the drug " . htmlspecialchars($drug) . ".";
    }
    $stmt->close();
}


$conn->close();
?>
    <!-- Left Section for drug Search -->
    <div class="card">
        <form action="" method="POST">
            <div class="card2">
                <div class="left-section">
                    <h3>Anti-Malarial Drugs (FDA Approved)</h3>
                    <div class="search">
                        <input type="search" name="drug" id="drug" value="" pattern=".*\S.*" required class="searchTerm" placeholder="Search the drug here...">
                    </div>
                    <div class="op">
                        <div style="padding-top: 10px">
                            <!-- Buttons are wrapped in a container for grid layout -->
                            <div class="button-container">
                                <input type="button" class="button button1" value="Mefloquine" onClick="setdrug('Mefloquine');">
                                <input type="button" class="button button1" value="Artemisinin" onClick="setdrug('Artemisinin');">
                                <input type="button" class="button button1" value="Dihydroartemisinin" onClick="setdrug('Dihydroartemisinin');">
                                <input type="button" class="button button1" value="Primaquine" onClick="setdrug('Primaquine');">
                                <input type="button" class="button button1" value="Chloroquine" onClick="setdrug('Chloroquine');">
                                <input type="button" class="button button1" value="Pyrimethamine" onClick="setdrug('Pyrimethamine');">
                                <input type="button" class="button button1" value="Amodiaquine" onClick="setdrug('Amodiaquine');">
                                <input type="button" class="button button1" value="Sulphadoxine" onClick="setdrug('Sulphadoxine');">
                                <input type="button" class="button button1" value="Lumefantrine" onClick="setdrug('Lumefantrine');">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="display: flex; justify-content: center; margin-top: 20px;">
                <button type="submit" class="button2">Submit</button>
            </div>
        </form>
    </div>
    <div class="container2" style="display: flex; justify-content: center; margin-top: 20px;">
    <div class="content-wrapper" style="display: flex; flex-direction: row; gap: 20px; width: 100%; max-width: 1200px;">
        <!-- Table Section -->
        <div class="table-container" style="flex: 1; overflow-x: auto;">
            <?php if ($drug): ?>
                <h2>Drug: <?php echo htmlspecialchars($drug); ?></h2>
            <?php endif; ?>
            <?php echo $tableHTML; ?>
        </div>

        <!-- Plot Section -->
        <div id="chartContainer" style="flex: 2; min-width: 300px; height: 450px; width: 100%;"></div>
    </div>
</div>

   

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
    function loadGenePlot(event, gene) {
    event.preventDefault(); // Stop the page from jumping up
    
    fetch(`plot_data.php?gene=${gene}`)
        .then(response => response.json())
        .then(data => {
            updateChart(data, gene); // Update chart dynamically
        })
        .catch(error => console.error('Error fetching gene plot data:', error));
}

function updateChart(dataPointsModels, gene) {
    const dataSeries = Object.entries(dataPointsModels).map(([model, points]) => ({
        type: "spline",
        name: model,
        showInLegend: true,
        dataPoints: points
    }));

    const chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title: {
            text: `Expression Plot for Gene: ${gene}`,
            fontSize: 20 
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
}

</script>


<script>
    function setdrug(drug) {
        // Set the value of the search input field
        document.getElementById('drug').value = drug;
    }
</script>

            <script>
            function toggleDropdown(dropdownId, buttonId) {
                // Close all dropdowns except the currently clicked one
                var dropdowns = document.querySelectorAll('.dropdown-content');
                var buttons = document.querySelectorAll('.dropdown-button');

                dropdowns.forEach(function (dropdown) {
                    if (dropdown.id !== dropdownId) {
                        dropdown.style.display = 'none'; // Close other dropdowns
                    }
                });

                buttons.forEach(function (button) {
                    if (button.id !== buttonId) {
                        button.classList.remove('green'); // Reset other buttons to default (blue)
                        button.classList.add('blue');
                    }
                });

                // Toggle the clicked dropdown
                var dropdown = document.getElementById(dropdownId);
                dropdown.style.display = (dropdown.style.display === "none" || dropdown.style.display === "") ? "block" : "none";
            }

            function selectSpecies(buttonId, selection) {
                // Deselect other species
                var buttons = document.querySelectorAll('.dropdown-button');
                buttons.forEach(function (button) {
                    if (button.id !== buttonId) {
                        button.classList.remove('green'); // Reset other buttons
                        button.classList.add('blue');
                        button.textContent = button.getAttribute('data-original-text'); // Reset button text to original
                    }
                });

                // Select the current species
                var button = document.getElementById(buttonId);
                button.textContent = selection; // Change button text to selected strain/condition
                button.classList.remove('blue'); // Remove blue class
                button.classList.add('green'); // Add green class to indicate selection

                // Close the dropdown after selection
                var dropdown = button.nextElementSibling;
                dropdown.style.display = "none";
            }

            function highlightSpecies(radio) {
                if (radio.checked) {
                    var labels = document.querySelectorAll('label');
                    labels.forEach(function (label) {
                        label.style.backgroundColor = '';
                        label.style.color = 'black';
                    });

                    var label = document.querySelector('label[for=' + radio.id + ']');
                    label.style.backgroundColor = '#28a745'; // Green for selected
                    label.style.color = 'white';

                    // Deselect other species
                    var buttons = document.querySelectorAll('.dropdown-button');
                    buttons.forEach(function (button) {
                        button.classList.remove('green'); // Reset other buttons
                        button.classList.add('blue');
                        button.textContent = button.getAttribute('data-original-text'); // Reset button text to original
                    });

                    // Close all dropdowns
                    var dropdowns = document.querySelectorAll('.dropdown-content');
                    dropdowns.forEach(function (dropdown) {
                        dropdown.style.display = 'none'; // Close all dropdowns
                    });
                }
            }
        </script>
        

        

   

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">PlasmoRhythm</span>
          </a>
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