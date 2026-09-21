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
    padding: 20px 48px;       /* Padding around the button */
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

@media (max-width: 600px) {
    .container {
        flex-direction: column; /* Stack content vertically */
        align-items: center;
    }

    /* Adjust the card's width */
    .card {
        width: 90%;  /* Make it take up most of the screen on mobile */
    }

    /* Make the buttons full-width */
    .button-container input {
        width: 100%;
        margin-bottom: 10px;
    }

    /* Table styling for small screens */
    .styled-table {
        width: 100%;
        border-collapse: collapse;
    }

    .styled-table th, .styled-table td {
        text-align: left;
        padding: 8px;
    }
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
    height: 50vh; 
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
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">PlasmoRhythm</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li class="dropdown">
            <a> <span>Rhythmicity</span> <i class="bi bi-chevron-down toggle-dropdown" ></i></a>
  <ul>
    <li><a href="host.php">Host</a></li>
    <li><a href="A-steph.php">Vector</a></li>

    <!-- Nested dropdown for Parasite -->
    <li>
  <a href="P-falciparum.php"><span>Parasite</span></a>
</li>

  </ul>
</li>
          <li><a href="drug.php"><span>Drug Interactors</span></a></li>
<li><a href="virulence.php"class="active"><span>Virulence Factors</span></a></li>

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
            <h1>Virulence Factors</h1>
        </div>
    </div><!-- End Page Title -->


<?php
include("config.inc.php");
$drug = isset($_POST['factor']) ? $_POST['factor'] : null; // Adjusted to match 'factor'

// Initialize table HTML to display results
$tableHTML = "";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the virulence factor from the form submission
    $drug = $_POST['factor'];

    // Prepare SQL query to fetch Gene ID and Product for the given factor
    $query = "SELECT `Gene ID`, `Product` FROM viral_pf WHERE Class = ?";

    // Prepare the statement
    $stmt = $conn->prepare($query);
    
    // Check if the query is prepared successfully
    if ($stmt === false) {
        die('Error preparing query: ' . $conn->error);
    }
    
    // Bind the factor parameter ('s' for string)
    $stmt->bind_param("s", $drug);
    
    // Execute the query
    $stmt->execute();

    // Fetch the results
    $result = $stmt->get_result();
    
    // Display results in a table
    if ($result->num_rows > 0) {
        $tableHTML = "<table class='styled-table'><tr><th>Gene</th><th>Product</th></tr>";
        
        while ($row = $result->fetch_assoc()) {
            $tableHTML .= "<tr>
            
            <td><a href='#' onclick=\"loadGenePlot(event, '" . htmlspecialchars($row['Gene ID']) . "')\">" . htmlspecialchars($row['Gene ID']) . "</a></td>
            <td>" . htmlspecialchars($row['Product']) . "</td>
            </tr>";
        }
    
        $tableHTML .= "</table>";
    } else {
        $tableHTML = "No related genes found for the factor " . htmlspecialchars($drug) . ".";
    }

    // Close statement
    $stmt->close();
}

// Close database connection
$conn->close();
?>
    <!-- Left Section for drug Search -->
<div class="card">

<div class="species-buttons" style="display: flex; justify-content: center; align-items: center; gap: 20px; padding: 20px">
<a href="P-falciparum.php" style="text-decoration: none;">
    <button style="background-color: #2c1e56; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
    <i>P. falciparum</i>
    </button>
</a>
<a href="P-chaubaudi.php" style="text-decoration: none;">
    <button style="background-color: #ffa200; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
    <i>P. chaubaudi</i>
    </button>
</a>
<a href="P-vivax.php" style="text-decoration: none;">
    <button style="background-color: #2c1e56; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
    <i>P. vivax</i>
    </button>
</a>
    
</div>
        <form action="" method="POST">
            <div class="card2">
                <div class="left-section">
                    <h3 style="text-align: center;">Virulence Factors</h3>

                    <div class="search">
                        <!-- Dropdown for selecting a virulence factor -->
                        <select name="factor" id="factor" class="custom-dropdown" required>
                            <option value="" disabled selected>Select a virulence factor</option>
                            <option value="PfEMP1">PfEMP1</option>
                            <option value="RIFIN">RIFIN</option>
                            <option value="STEVOR">STEVOR</option>
                            <option value="MSP">MSP</option>
                            <option value="SERA">SERA</option>
                            <option value="RhopH/CLAG">RhopH/CLAG</option>
                            <option value="FIKK">FIKK</option>
                            <option value="ETRAMP">ETRAMP</option>
                            <option value="PFMC-2TM">PFMC-2TM</option>
                            <option value="Invasion Ligands">Invasion Ligands</option>
                            <option value="PTEX">PTEX</option>
                            <option value="Chaperones & Transporters">Chaperones & Transporters</option>
                            <option value="Proteases & Enzymes">Proteases & Enzymes</option>
                            <option value="Surface Antigens">Surface Antigens</option>
                        </select>
                    </div>
                    <div class="op">
                        <div style="padding-top: 10px">
                            <!-- Example buttons for quick selection -->
                            <div class="button-container">
                                <input type="button" class="button button1" value="PfEMP1" onClick="setFactor('PfEMP1');">
                                <input type="button" class="button button1" value="ETRAMP" onClick="setFactor('ETRAMP');">
                                <input type="button" class="button button1" value="PTEX" onClick="setFactor('PTEX');">
                                <input type="button" class="button button1" value="MSP" onClick="setFactor('MSP');">
                                <input type="button" class="button button1" value="SERA" onClick="setFactor('SERA');">
                                <input type="button" class="button button1" value="FIKK" onClick="setFactor('FIKK');">
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
                <h2><?php echo htmlspecialchars($drug); ?></h2>
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
    
    fetch(`plot_data_factor.php?gene=${gene}`)
        .then(response => response.json())
        .then(data => {
            updateChart(data, gene); // Update chart dynamically
        })
        .catch(error => console.error('Error fetching gene plot data:', error));
}

function updateChart(dataPointsModels, gene) {
    // Check if 'message' field exists
    if (dataPointsModels.message) {
        // Display message in chart container or alert
        document.getElementById("chartContainer").innerHTML = `<div style="text-align:center; font-size:18px; color:red; margin-top: 150px;">${dataPointsModels.message}</div>`;
        return;
    }

    // If data is available, render the chart
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
            interval: 10
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
        document.getElementById('factor').value = drug;
    }
</script>

<script>
    // Function to set the value of the dropdown when a button is clicked
    function setFactor(factorName) {
        const dropdown = document.getElementById('factor');
        dropdown.value = factorName;
    }
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