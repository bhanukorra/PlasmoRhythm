<?php
$selectedSpecies = $_POST['species'] ?? 'P-falciparum';
?>

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
    max-width: 900px;
    margin: auto;
    border: none; /* Remove any border */
    outline: none; /* Remove any outline */
}

.card2 {
    display: flex;
    flex-direction: column; /* stack content vertically if needed */
    padding: 20px;
    box-shadow: 0 6px 90px 0 rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    background-color: white;
    width: 900px;       /* fixed width */
    height: 250px;
    margin: 0 auto;     /* center horizontally */
    flex-shrink: 0;     /* prevent shrinking */
    box-sizing: border-box; /* include padding in width */
}
.button-container {
    display: grid;
    grid-template-columns: repeat(5, 1fr); /* 5 buttons per row */
    gap: 10px; /* space between buttons */
    padding-top: 10px;
}

.button-container input.button {
    width: 100%; /* make buttons fill the grid cell */
    padding: 10px;
    font-size: 14px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
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
      }
.button {
    background-color: #838383; /* Blue background */
    color: white;              /* White text color */
    padding: 20px 8px;       /* Padding around the button */
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
    padding-bottom: 20px;
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
         <h1 class="sitename">PlasmoRhythm<sup
            style="font-size: 0.35em; vertical-align: super; line-height: 0; font-style: italic;">v1.0</sup></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li class="dropdown">
            <a> <span>Rhythmicity</span> <i class="bi bi-chevron-down toggle-dropdown" ></i></a>
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
<li><a href="virulence.php"class="active"><span>Virulence Factors</span></a></li>

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

<div class="page-title dark-background">
  <div class="container position-relative" 
       style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
       
    <h1 style="margin: 0; color: white;">Rhythmicity of Virulence Factors</h1>
    <p style="margin: 5px 0 0; color: #ddd;">
      Transcript-level oscillation patterns of <i>Plasmodium</i> virulence factors throughout the intraerythrocytic cycle (IDC).
    </p>
    
  </div>
</div>
<!-- End Page Title -->


<?php
include("config.inc.php");

$drug = isset($_POST['factor']) ? $_POST['factor'] : null;
$species = isset($_POST['species']) ? $_POST['species'] : null;
$factor = isset($_POST['factor']) ? $_POST['factor'] : null;
$product = "";
$shortDesc = "";
$tableHTML = "";
$key = ""; // 🔹 This will store the short description (key info)

// Ensure POST request has required inputs
if ($_SERVER["REQUEST_METHOD"] == "POST" && $species && $factor) {

    // 🔸 Select table based on species
    switch ($species) {
        case "P-falciparum":
            $table = "viral_pf";
            break;
        case "P-vivax":
            $table = "viral_pvx";
            break;
        case "P-chaubaudi":
            $table = "viral_pcs";
            break;
        default:
            die("Unknown species selected");
    }
$productQuery = $conn->prepare("SELECT DISTINCT `Product` FROM `$table` WHERE Family = ? LIMIT 1");
$productQuery->bind_param("s", $factor);
$productQuery->execute();
$productResult = $productQuery->get_result();

if ($productResult->num_rows > 0) {
    $row = $productResult->fetch_assoc();
    $product = $row['Product'];
} else {
    $product = "No product information available.";
}
$productQuery->close();
    // 🔹 First: Get the short description (key) for the selected factor
    $descQuery = $conn->prepare("SELECT DISTINCT `Short Description` FROM `$table` WHERE Family = ? LIMIT 1");
    $descQuery->bind_param("s", $factor);
    $descQuery->execute();
    $descResult = $descQuery->get_result();
    if ($descResult->num_rows > 0) {
        $key = $descResult->fetch_assoc()['Short Description'];
    } else {
        $key = "No description available for this factor.";
    }
    $descQuery->close();

    // 🔹 Then: Fetch all matching gene rows
    $query = "SELECT `Gene ID`, `Product`, `Short Description`, `Curated GO Component IDs` FROM `$table` WHERE Family = ?";
    $stmt = $conn->prepare($query);
    if ($stmt === false) {
        die('Error preparing query: ' . $conn->error);
    }

    $stmt->bind_param("s", $factor);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $tableHTML = "<table id='resultTable' class='styled-table'>
            <tr>
                <th>Gene</th>
                
               
                <th>Curated GO Component IDs</th>
            </tr>";

        while ($row = $result->fetch_assoc()) {
            $tableHTML .= "<tr>
                <td><a href='#' onclick=\"loadGenePlot(event, '" . htmlspecialchars($row['Gene ID']) . "')\">" . htmlspecialchars($row['Gene ID']) . "</a></td>
                
               
                <td>" . htmlspecialchars($row['Curated GO Component IDs']) . "</td>
            </tr>";
        }
        $tableHTML .= "</table>";
    } else {
        $tableHTML = "<p>No related genes found for the factor <b>" . htmlspecialchars($factor) . "</b> in <i>" . htmlspecialchars($species) . "</i>.</p>";
    }

    $stmt->close();
}

$conn->close();
?>

    <!-- Left Section for drug Search -->
<div class="card">

<div class="species-buttons" style="display: flex; justify-content: center; gap: 20px; padding: 20px;">
    <button id="pf-btn" class="species-btn" data-species="P-falciparum"
        style="background-color: #ffa200; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
        <i>P. falciparum</i>
    </button>
    <!-- <button id="pcs-btn" class="species-btn" data-species="P-chaubaudi"
        style="background-color: #ffa200; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
        <i>P. chaubaudi</i>
    </button> -->
    <button id="pvx-btn" class="species-btn" data-species="P-vivax"
        style="background-color: #2c1e56; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
        <i>P. vivax</i>
    </button>
</div>

<!-- hidden header and hidden factor card initially -->
<h3 id="selectedSpeciesHeader" style="text-align:center; display:none;"></h3>

<form action="" method="POST">
    <input type="hidden" name="species" id="speciesInput" value="<?php echo htmlspecialchars($selectedSpecies); ?>">

 <!-- hidden input for selected species -->
    <div class="card2" id="factorCard" style="display:block;">
       <div class="left-section">
  <h3 style="text-align: center;">Analysis of putative virulence factors</h3>
  <!-- <div class="search">
    <select name="factor" id="factor" class="custom-dropdown" required>
      <option value="" disabled selected>Select a virulence factor</option>
    </select>
  </div> -->
  <div class="op" style="padding-top: 10px">
    <div class="button-container" id="factorButtons">
      <!-- dynamically inserted buttons go here -->
    </div>
  </div>
</div>
<input type="hidden" name="factor" id="factorInput">
        <div style="display: flex; justify-content: center; margin-top: 20px;">
            <button type="submit" class="button2">Submit</button>
        </div>
    </div>
</form>
    </div>


<?php if ($drug): ?>
  <div class="drug-header" style="text-align:center; margin-top:80px; ">
    <h2 style="font-weight:600; font-size:26px; color:#2c1e56; margin-bottom:10px;">
      <?php echo htmlspecialchars($drug); ?>
    </h2>

    <?php if (!empty($key)): ?>
      <p style="max-width:900px; margin:auto; font-size:16px; color:#555;">
        <?php echo htmlspecialchars($key); ?>
      </p>
    <?php endif; ?>
  </div>
<?php endif; ?>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['factor'])): ?>    
<div class="container2" style="display: flex; justify-content: center; ">
  <div style="width:100%; max-width: 1800px;">
   <div class="content-wrapper" 
         style="display: flex; flex-direction: row; align-items: flex-start; 
                gap: 50px; width: 100%; padding-bottom: 40px; padding-top: 20px; padding-left: 40px; padding-right: 20px;">
      
      <!-- Table Section (left) -->
      <div class="table-container" 
           style="flex: 1.2; overflow-x: auto; min-width: 450px;">
        <?php if ($drug): ?>
         <h3 style="margin-bottom: 5px;">
      <?php 
        echo htmlspecialchars($drug);
        if (!empty($product) && strtolower($product) !== 'n/a') {
            echo " – " . htmlspecialchars($product);
        }
      ?>
    </h3>
        <?php endif; ?>
        <?php echo $tableHTML; ?>
      </div>

      <!-- Plot + Rhythm Table Section (right) -->
      <div style="flex: 2; display: flex; flex-direction: column; gap: 20px; max-height: 500px;">
        <!-- Plot Section -->
        <!-- <div id="chartContainer" style="height: 450px; width: 100%; padding-top; 20px;"></div> -->

        <!-- Rhythm Table Section -->
<div id="rhythmTableContainer" 
     class="table-container" 
     style="overflow-x: auto; width: 100%; max-width: 1000px;">
</div>          <!-- Rhythmicity table will load here -->
        </div>
      </div>

    </div>
  </div>
    </div>
<?php endif; ?>




<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
// species button click handler is already here

// const factorDropdown = document.getElementById("factor");
const factorButtonsContainer = document.getElementById("factorButtons");

const factors = {
  "P-falciparum": [
    "PfEMP1","RIFIN","STEVOR","MSP","SERA","RhopH/CLAG","FIKK","ETRAMP",
    "PFMC-2TM","Invasion Ligands","PTEX","Chaperones & Transporters",
    "Proteases & Enzymes","Surface Antigens"
  ],
  "P-vivax": [
    "PIR/VIR","Pv-fam-a","PHIST","RBPs","RhopH1/clag","DBPs",
    "SERA","MSPs"  ]
};

document.getElementById("selectedSpeciesHeader").style.display = "block";
// document.getElementById("selectedSpeciesHeader").textContent = "Virulence factors of P falciparum";
function setFactor(factor) {
    // set hidden input
    document.getElementById("factorInput").value = factor;

    // reset all buttons to default style
    document.querySelectorAll("#factorButtons input").forEach(btn => {
        btn.style.backgroundColor = "#838383"; // default purple
        btn.style.color = "white";
    });

    // highlight clicked button
    const selectedBtn = [...document.querySelectorAll("#factorButtons input")]
        .find(btn => btn.value === factor);

    if (selectedBtn) {
        selectedBtn.style.backgroundColor = "#ffa200"; // yellow
        selectedBtn.style.color = "black";           // contrast
    }
}


document.addEventListener("DOMContentLoaded", function() {
  const defaultSpecies = "<?php echo $selectedSpecies; ?>";

  document.querySelectorAll(".species-btn").forEach(btn => {
    if (btn.dataset.species === defaultSpecies) {
        btn.style.backgroundColor = "#ffa200";
        btn.style.color = "white";
    } else {
        btn.style.backgroundColor = "#2c1e56";
        btn.style.color = "white";
    }
  });


//   const factorDropdown = document.getElementById("factor");
  const factorButtonsContainer = document.getElementById("factorButtons");

  // clear and populate dropdown
//   factorDropdown.innerHTML = `<option value="" disabled selected>Select a virulence factor</option>`;
//   factors[defaultSpecies].forEach(f => {
//     const opt = document.createElement("option");
//     opt.value = f;
//     opt.textContent = f;
//     factorDropdown.appendChild(opt);
//   });

  // quick buttons
  factorButtonsContainer.innerHTML = "";
  factors[defaultSpecies].forEach(f => {
  const btn = document.createElement("input");
  btn.type = "button";
  btn.className = "button button1";
  btn.value = f;
  btn.onclick = () => setFactor(f);
  factorButtonsContainer.appendChild(btn);
});
});

document.querySelectorAll(".species-btn").forEach(btn => {
    btn.addEventListener("click", function() {
        const species = this.dataset.species;

        // unified style logic
     document.querySelectorAll(".species-btn").forEach(b => {
    if (b.dataset.species === species) {
        b.style.backgroundColor = "#ffa200";
        b.style.color = "black";
    } else {
        b.style.backgroundColor = "#2c1e56";
        b.style.color = "white";
    }
});

        document.getElementById("speciesInput").value = species;

        // update factor card
        document.getElementById("factorCard").style.display = "block";

        // update header
        document.getElementById("selectedSpeciesHeader").style.display = "block";
        // document.getElementById("selectedSpeciesHeader").textContent = `Virulence factors of ${species.replace("-", " ")}`;

        // update dropdown
        // factorDropdown.innerHTML = `<option value="" disabled selected>Select a virulence factor</option>`;
        // factors[species].forEach(f => {
        //     const opt = document.createElement("option");
        //     opt.value = f;
        //     opt.textContent = f;
        //     factorDropdown.appendChild(opt);
        // });

        // quick buttons
        factorButtonsContainer.innerHTML = "";
      factors[species].forEach(f => {
  const btn = document.createElement("input");
  btn.type = "button";
  btn.className = "button button1";
  btn.value = f;
  btn.onclick = () => setFactor(f);
  factorButtonsContainer.appendChild(btn);
});

    });
});
function loadGenePlot(event, gene) {
    event.preventDefault();

    const speciesInput = document.getElementById("speciesInput").value;
    let speciesParam = (speciesInput === "P-falciparum") ? "pf" :
                       (speciesInput === "P-vivax") ? "pvx" : "";

    fetch(`plot_data_factor.php?gene=${encodeURIComponent(gene)}&species=${speciesParam}`)
        .then(response => response.json())
        .then(data => {
    const rhythmContainer = document.getElementById("rhythmTableContainer");
    rhythmContainer.innerHTML = ""; // clear old content

    if (data.message) {
        rhythmContainer.innerHTML = `<div style="text-align:center; color:red;">${data.message}</div>`;
        return;
    }

    // Loop through each strain
    Object.keys(data.rawPoints).forEach(strain => {
        // Create container for each strain
        const strainDiv = document.createElement("div");
        strainDiv.style.marginBottom = "60px";
        strainDiv.innerHTML = `
            <h3 style="text-align:center; font-family:Poppins; margin-top:20px;">
                Expression Plot for ${strain}
            </h3>
            <div id="chart-${strain}" style="height:400px; width:100%;"></div>
            ${data.rhythmTableHTML[strain] || ""}
        `;
        rhythmContainer.appendChild(strainDiv);

        // Prepare data for chart
        const series = [];

        // Raw points
        if (data.rawPoints[strain]) {
            series.push({
                type: "line",
                name: "Raw Data",
                markerType: "circle",
                lineDashType: "dot",
                showInLegend: true,
                dataPoints: data.rawPoints[strain]
            });
        }

        // Model fits (ARS etc.)
        if (data.dataPointsModels[strain]) {
            Object.entries(data.dataPointsModels[strain]).forEach(([model, points]) => {
                series.push({
                    type: "spline",
                    name: model,
                    showInLegend: true,
                    markerType: "none",
                    dataPoints: points
                });
            });
        }

        // Render chart
        if (series.length > 0) {
            const chart = new CanvasJS.Chart(`chart-${strain}`, {
                animationEnabled: true,
                axisX: { title: "Time", interval: 5 },
                axisY: { title: "Expression" },
                legend: { verticalAlign: "bottom" },
                data: series
            });
            chart.render();
        }
    });
})

        .catch(err => console.error(err));
}

</script>



<script>
    // Function to set the value of the dropdown when a button is clicked
    
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


<p style="padding-top:60px;">
    A literature-derived set of putative virulence-associated genes from 
    <i>P. falciparum</i> and <i>P. vivax</i>, compiled from peer-reviewed studies and annotated 
    with functional categories and GO terms from the PlasmoDB database 
    (<a href="https://plasmodb.org/plasmo/app" target="_blank" rel="noopener noreferrer">PlasmoDB</a>).
    This module presents high-resolution transcriptomic rhythmicity profiles of these factors across
    the intraerythrocytic cycle. A comprehensive list of curated virulence factors, annotations, GO terms,
    and references is provided in the <strong>Download</strong> tab.
</p>


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