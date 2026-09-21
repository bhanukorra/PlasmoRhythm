<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PlasmoRhythm</title>
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


..search {
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
    max-width: 1200px;
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
    width: 560px;
    height: 250px;
    
}


.card3 {
    display: flex;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 6px 90px 0 rgba(0, 0, 0, 0.1);
    background-color: white;
    width: 560px;
    height: 250px;
    margin-left: 580px;
    margin-top: -250px;
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

.stats-container select {
    width: 100px;
    height: 40px;

.stats-container label {
    font-size: 16px;
    margin-right: 10px;
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

    <?php
include("config.inc.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values
    $gene = $_POST['gene'];
    $models = $_POST['model'];  // Array of selected models
    $p_value_cutoff = $_POST['pvalue'];
    $strain = $_POST['strain'];

    // Validate strain
    $valid_strains = ['case'];
    if (!in_array($strain, $valid_strains)) {
        die("Invalid strain selected.");
    }

    // Dynamically build WHERE clause for multiple models
    $model_conditions = [];
    foreach ($models as $model) {
        $model_conditions[] = "{$model}_pvalue < ?";
    }
    $where_clause = implode(" OR ", $model_conditions);

    // Prepare SQL query
    $table_name = $strain;
    $query = "SELECT DISTINCT * FROM $table_name WHERE CycID = ? AND ($where_clause)";
    $params = array_merge([$gene], array_fill(0, count($models), $p_value_cutoff));
    $types = "s" . str_repeat("d", count($models));
    $stmt = $conn->prepare($query);
    $stmt->bind_param($types, ...$params);
    $stmt->execute();

    // Fetch and display results
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>CycID</th><th>ARS_pvalue</th><th>ARS_BH.Q</th>...</tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $data) {
                echo "<td>" . htmlspecialchars($data) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No models met the conditions.";
    }

    $stmt->close();
}

$conn->close();
?>

<div class="species-buttons" style="display: flex; justify-content: center; align-items: center; gap: 20px; padding: 20px">
<a href="P-falciparum.php" style="text-decoration: none;">
    <button style="background-color: #2c1e56; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
    <i>P. falciparum</i>
    </button>
</a>
<a href="P-chaubaudi.php" style="text-decoration: none;">
    <button style="background-color: #2c1e56; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
    <i>P. chaubaudi</i>
    </button>
</a>
<a href="P-vivax.php" style="text-decoration: none;">
    <button style="background-color: #ffa200; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
    <i>P. vivax</i>
    </button>
</a>
    
</div>
    
    <!-- Left Section for Gene Search -->
    <div class="card">
    <form action="P-vivs_result.php" method="POST" id="geneForm">
    <div class="card2">
    <div class="left-section">
        <h3>Search for a Gene</h3>
<div class="search">
    <input type="search" name="gene" id="gene" value="" pattern=".*\S.*" required class="searchTerm" placeholder="Search the gene here..">
</div>
<div class="op">
    <div style="padding-top: 10px">
    <h6>Example Search:</h6>
    </div>
    <input type="button" class="button button1" value="PVP01_0205500" onClick="setGene('PVP01_0205500');">&emsp;
    <input type="button" class="button button1" value="PVP01_0920200" onClick="setGene('PVP01_0920200');">&emsp;
    <input type="button" class="button button1" value="PVP01_0530700" onClick="setGene('PVP01_0530700');">

</div>
</div>
</div>

<div class="card3">
<div class="right-section">
<div class="model-container" style="display: flex; align-items: center;">
    <h3 style="margin-right: 20px;">Strain</h3>
    <div class="models" style="display: flex; align-items: center;">
        <label style="margin-right: 15px;margin-top: 10px;">
            <input type="radio" name="strain" value="case" required> case
        </label>
        <!-- <label style="margin-right: 15px;margin-top: 10px;">
            <input type="radio" name="strain" value="DD"> DD
        </label> -->
        <!-- <label style="margin-right: 15px;margin-top: 10px;">
            <input type="radio" name="strain" value="DL"> DL
        </label> -->
    </div>
</div>

<!-- <div class="parameters-container" style="display: flex; align-items: center;">
    <h3 style="margin-right: 20px;">Parameters</h3>
    <div style="display: flex; align-items: center;">
        <label for="min" style="margin-right: 10px;">Min:</label>
        <input type="number" id="min" name="min" style="width: 80px; margin-right: 20px;">
        
        <label for="max" style="margin-right: 10px;">Max:</label>
        <input type="number" id="max" name="max" style="width: 80px;">
    </div>
</div> -->

<div class="model-container" style="display: flex; align-items: center;">
    <h3 style="margin-right: 20px;">Model</h3>
    <div class="models" style="display: flex; flex-wrap: wrap; align-items: center;">
        <label style="margin-right: 15px; margin-top: 10px;">
            <input type="checkbox" name="model[]" value="JTK"> JTK
        </label>
        <label style="margin-right: 15px; margin-top: 10px;">
            <input type="checkbox" name="model[]" value="ARS"> ARS
        </label>
        <label style="margin-right: 15px; margin-top: 10px;">
            <input type="checkbox" name="model[]" value="LS"> LS
        </label>
        <label style="margin-right: 15px; margin-top: 10px;">
            <input type="checkbox" name="model[]" value="meta2d"> META2D
        </label>
    </div>
</div>

<div class="stats-container" style="display: flex; align-items: center;">
    <h3 style="margin-right: 20px;">Stats</h3>

    <!-- p-value Dropdown -->
    <label for="pvalue">p-value:</label>
    <select id="pvalue" name="pvalue" class="custom-dropdown" style="margin-right: 10px;">
        <option value="0.05">0.05</option>
        <option value="0.01">0.01</option>
    </select>

    <!-- q-value Dropdown -->
    <label for="qvalue" style="margin-right: 5px;">q-value:</label>
    <select id="qvalue" name="qvalue" class="custom-dropdown">
        <option value="0.05">0.05</option>
        <option value="0.01">0.01</option>
    </select>
</div>

    </div>
</div>
<div style="display: flex; justify-content: center; margin-top: 20px;">
    <button type="submit" class="button2">Submit</button>
</div>
</form>
</div>
<div style="width: 80%; margin: auto;">
    <canvas id="geneExpressionChart"></canvas>
</div>


<script>
    function setGene(gene) {
        // Set the value of the search input field
        document.getElementById('gene').value = gene;
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
        
        <script>
  // Function to set the gene field from example buttons
  function setGene(value) {
    document.getElementById('gene').value = value;
  }

  // Client-side validation before submission
  document.getElementById('geneForm').addEventListener('submit', function (event) {
    const gene = document.getElementById('gene').value.trim();
    const strainSelected = document.querySelector('input[name="strain"]:checked');

    // Validation logic
    if (!gene) {
      alert("Please enter a gene or select from the examples.");
      event.preventDefault(); // Prevent form submission
    } else if (!strainSelected) {
      alert("Please select a strain.");
      event.preventDefault(); // Prevent form submission
    }
  });
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