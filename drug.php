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
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

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
    border: none;
    /* Remove any border */
    outline: none;
    /* Remove any outline */
  }

  .card2 {
    display: flex;
    flex-direction: column;
    /* stack content vertically if needed */
    padding: 20px;
    box-shadow: 0 6px 90px 0 rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    background-color: white;
    width: 900px;
    /* fixed width */
    height: 250px;
    margin: 0 auto;
    /* center horizontally */
    flex-shrink: 0;
    /* prevent shrinking */
    box-sizing: border-box;
    /* include padding in width */
  }

  .button-container {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    /* 5 buttons per row */
    gap: 10px;
    /* space between buttons */
    padding-top: 10px;
  }

  .button {
    width: 100%;
    /* Make buttons fill their container */
    padding: 10px;
    text-align: center;
  }

  h3 {
    margin-top: 20px;
    font-size: 25px;
    font-family: 'Poppins';
    /* Space above section headings */
  }

  .searchTerm {
    width: calc(100% - 20px);
    /* Adjust width to fit */
    padding: 10px;
    /* Padding inside the input */
    border-radius: 5px;
    /* Rounded corners */
    border: 1px solid #ccc;
    /* Border for input */
  }

  .canvasjs-chart-credit {
    display: none !important;
  }

  @font-face {
    font-family: 'Times New Roman';

  }

  .button {
    background-color: #838383;
    /* Blue background */
    color: white;
    /* White text color */
    padding: 10px 15px;
    /* Padding around the button */
    border: none;
    /* No border */
    border-radius: 5px;
    /* Rounded corners */
    cursor: pointer;
    /* Pointer cursor on hover */
  }

  .button2 {
    background-color: #2c1e56;
    /* Blue background */
    color: white;
    /* White text color */
    padding: 10px 15px;
    /* Padding around the button */
    border: none;
    /* No border */
    border-radius: 5px;
    /* Rounded corners */
    cursor: pointer;
    /* Pointer cursor on hover */
  }

  .button:hover {
    background-color: #0056b3;
    /* Darker blue on hover */
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
    background-color: #ddd;
    /* Change color on hover */
  }

  .page-title:before {
    content: "";
    background:
      linear-gradient(to bottom, color-mix(in srgb, #2c1e56, transparent 80%), #2c1e56),
      url('assets/p_img/mbg.png');
    /* Replace with the actual path to your image */
    background-size: cover;
    /* Ensures the image covers the entire area */
    background-position: center;
    /* Centers the image */
    position: absolute;
    inset: 0;
  }

  .cutoff input {
    margin-right: 10px;
    /* Space between labels and inputs */
  }


  .link-wrap-left,
  .link-wrap-right {
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

  .searchTerm:focus {
    color: black;
  }

  .searchButton {
    width: 20%;
    padding: 5px;
    height: 40px;
    border: solid lightblue;
    text-align: center;
    background: light blue;
    color: white;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
    font-size: 12px;
  }


  .op {
    flex: column;
  }

  .button1 {
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
  table,
  th,
  td {
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
    gap: 20px;
    /* Space between the card and the table */
    flex-wrap: wrap;
    /* Allow wrapping for smaller screens */
  }

  .card-container {
    flex: 1;
    /* Take up available space */
    max-width: 45%;
    /* You can adjust this value as needed */
  }

  .table-container {
    flex: 1;
    /* Take up available space */
    max-width: 45%;
    /* Adjust the width for the table */
  }

  @media (max-width: 768px) {
    .main-container {
      flex-direction: column;
      gap: 10px;
    }

    .card-container,
    .table-container {
      max-width: 100%;
      /* Stack items on smaller screens */
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
          <li><a href="drug.php" class="active"><span>Drug Interactors</span></a></li>


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

        <h1 style="margin: 0; color: white;">Rhythmicity of Interactors of Antimalarial Drugs</h1>
        <p style="margin: 5px 0 0; color: #ddd;">
          Rhythmicity analysis of antimalarial drug interactors and
          targets in <i>Plasmodium</i> and host species.
        </p>

      </div>
    </div>


    <!-- End Page Title -->

    <?php
    include("config.inc.php");

    $drug = $_POST['drug'] ?? '';
    $species = $_POST['species'] ?? '';
    $tableHTML = '';
    $networkData = '';

    if ($drug && $species) {
      if (strtolower($drug) === "artemisinin" && strtolower($species) !== "homo sapiens") {
        // Special case: Artemisinin uses its own table/file
        $sql = "SELECT drug, gene, symbol, `Product Description` , `drug_description` FROM artemisinin WHERE LOWER(species) = LOWER(?)";
        $stmt = $conn->prepare($sql);
        if ($stmt) {
          $stmt->bind_param("s", $species);
          $stmt->execute();
          $result = $stmt->get_result();
          $filtered = $result->fetch_all(MYSQLI_ASSOC);

          if (!empty($filtered)) {
            $tableHTML = '<table border="1" cellpadding="5"><tr>';
            $tableHTML .= "<th>Gene</th><th>Description</th></tr>";

            foreach ($filtered as $row) {
              $gene = htmlspecialchars($row['gene']);
              $symbol = htmlspecialchars($row['symbol']);
              $drugdes = htmlspecialchars($filtered[0]['drug_description']);

              // Make Gene clickable
              $tableHTML .= "<tr>";
              // $tableHTML .= "<td>" . htmlspecialchars($row['drug']) . "</td>";
              $tableHTML .= "<td><a href='#' onclick=\"loadGenePlot(event, '$gene')\">$gene</a></td>";
              // $tableHTML .= "<td>$symbol</td>";
              $tableHTML .= "<td>" . htmlspecialchars($row['Product Description']) . "</td>";
              $tableHTML .= "</tr>";
            }
            $tableHTML .= "</table>";
          } else {
            $tableHTML = "<p>No Artemisinin results found for <strong>" . htmlspecialchars($species) . "</strong></p>";
          }
          $stmt->close();
        }
        // Don't set $networkData for Artemisinin
        $networkData = '';
      } else {
        $sql = "SELECT 
        node1,
        node2,
        score,
        mapped,
        `description`,
        drug_description,
        neighborhood_on_chromosome,
        gene_fusion,
        phylogenetic_cooccurrence,
        homology,
        coexpression,
        experimentally_determined_interaction,
        database_annotated,
        automated_textmining
        FROM drug_interactions
        WHERE TRIM(LOWER(drug)) = TRIM(LOWER(?))
        AND TRIM(LOWER(species)) = TRIM(LOWER(?))";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
          $stmt->bind_param("ss", $drug, $species);
          $stmt->execute();
          $result = $stmt->get_result();
          $filtered = $result->fetch_all(MYSQLI_ASSOC);

          if (!empty($filtered)) {
            // Table headers
            $tableHTML = '<table id="drugInteractorsTable" border="1" cellpadding="5"><thead><tr>';

            $tableHTML .= "
<th>Gene</th>
<th>Description</th>
<th>Neighborhood on Chromosome</th>
<th>Gene Fusion</th>
<th>Phylogenetic Cooccurrence</th>
<th>Homology</th>
<th>Coexpression</th>
<th>Experimentally Determined Interaction</th>
<th>Database Annotated</th>
<th>Automated Textmining</th>
<th style='cursor: pointer; user-select: none;' onclick='sortInteractorsTable()'>Combined Score <span id='sortBtn' style='color: #fff; margin-left: 5px; font-size: 0.8em;'>▼</span></th>
</tr></thead><tbody>";

            $seen = [];
            // Table rows
            foreach ($filtered as $row) {
              $node1 = htmlspecialchars($row['node1']);
              $node2 = htmlspecialchars($row['node2']);
              $score = htmlspecialchars($row['score']);
              $mapped = htmlspecialchars($row['mapped']);
              $description = htmlspecialchars($row['description']);
              $drugdes = htmlspecialchars($filtered[0]['drug_description']);
              $neighborhood = htmlspecialchars($row['neighborhood_on_chromosome']);
              $geneFusion = htmlspecialchars($row['gene_fusion']);
              $phylo = htmlspecialchars($row['phylogenetic_cooccurrence']);
              $homology = htmlspecialchars($row['homology']);
              $coexpression = htmlspecialchars($row['coexpression']);
              $experimental = htmlspecialchars($row['experimentally_determined_interaction']);
              $database = htmlspecialchars($row['database_annotated']);
              $textMining = htmlspecialchars($row['automated_textmining']);

              // create a unique key
              $key = strtolower($mapped . '|' . $description);

              // skip if this combo was already added
              if (isset($seen[$key])) {
                continue;
              }
              $seen[$key] = true;


              $tableHTML .= "<tr>";
              // Make 'Mapped' clickable
              $tableHTML .= "<td><a href='#' onclick=\"loadGenePlot(event, '$mapped')\">$mapped</a></td>";
              $tableHTML .= "<td>$description</td>";
              $tableHTML .= "<td>$neighborhood</td>";
              $tableHTML .= "<td>$geneFusion</td>";
              $tableHTML .= "<td>$phylo</td>";
              $tableHTML .= "<td>$homology</td>";
              $tableHTML .= "<td>$coexpression</td>";
              $tableHTML .= "<td>$experimental</td>";
              $tableHTML .= "<td>$database</td>";
              $tableHTML .= "<td>$textMining</td>";
              $tableHTML .= "<td>$score</td>";

              $tableHTML .= "</tr>";
            }
            $tableHTML .= "</tbody></table>";

            // Cytoscape network
            $nodes = [];
            $edges = [];
            foreach ($filtered as $row) {
              $nodes[$row['node1']] = ['data' => ['id' => $row['node1']]];
              $nodes[$row['node2']] = ['data' => ['id' => $row['node2']]];
              $edges[] = [
                'data' => [
                  'source' => $row['node1'],
                  'target' => $row['node2']

                ]
              ];
            }
            $networkData = json_encode(array_merge(array_values($nodes), $edges));
          } else {
            $tableHTML = "<p>No results found for <strong>" . htmlspecialchars($drug) . "</strong> in <strong>" . htmlspecialchars($species) . "</strong></p>";
          }
          $stmt->close();
        } else {
          $tableHTML = "<p>Failed to prepare query.</p>";
        }
      }
    }
    ?>



    <!-- Left Section for drug Search -->
    <div class="card">
      <form action="" method="POST">
        <div class="species-buttons" style="display: flex; justify-content: center; gap: 20px; padding: 20px;">
          <button id="pf-btn" class="species-btn" data-species="P.falciparum"
            style="background-color: #ffa200; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
            <i>P. falciparum</i>
          </button>
          <button id="pcs-btn" class="species-btn" data-species="P.chaubaudi"
            style="background-color: #2c1e56; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
            <i>P. chaubaudi</i>
          </button>
          <button id="pvx-btn" class="species-btn" data-species="P.vivax"
            style="background-color: #2c1e56; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
            <i>P. vivax</i>
          </button>
          <button id="pvx-btn" class="species-btn" data-species="Homo sapiens"
            style="background-color: #2c1e56; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
            <i>Homo sapiens</i>
          </button>
        </div>

        <!-- <div class="card2">
                <div class="left-section">
                    <h3>Anti-Malarial Drugs (FDA Approved)</h3>
                    <div class="search">
                        <input type="search" name="drug" id="drug" value="" pattern=".*\S.*" required class="searchTerm" placeholder="Search the drug here...">
                    </div>
                    <div class="op">
                        <div style="padding-top: 10px">
                            <div class="button-container"></div>
                        </div>
                    </div>
                </div>
            </div> -->
        <div class="card2">
          <div class="left-section">
            <h3>Anti-Malarial Drugs (FDA Approved)</h3>
            <div class="op">
              <div style="padding-top: 10px">
                <!-- Buttons are wrapped in a container for grid layout -->
                <div class="button-container"></div>
              </div>
            </div>
            <!-- hidden field to store the selected drug for form submission -->
            <input type="hidden" name="drug" id="drug" value="">
          </div>
        </div>

        <div style="display: flex; justify-content: center; margin-top: 20px;">
          <button type="submit" class="button2">Submit</button>
        </div>
        <input type="hidden" name="species" id="species" value="">

      </form>
    </div>

    <!-- Results Section -->
    <?php if ($drug && $species): ?>
      <div id="results-area">

      <h2>
        <?= htmlspecialchars($drug) ?>
        in <i><?= htmlspecialchars($species) ?></i>
      </h2>
      <p style="font-style:italic; color:#555; margin-bottom:15px; text-align: center;">
        <?= htmlspecialchars($drugdes) ?>
      </p>

      <style>
        .grid-container {
          display: flex;
          flex-direction: column;
          gap: 25px;
          margin: 20px;
        }

        /* --- UPPER SECTION --- */
        .upper-section {
          display: grid;
          grid-template-columns: 1fr;
          gap: 20px;
          width: 100%;
          max-width: 1600px;
          margin: 0 auto;
          /* centers the section */
          align-items: start;
        }
        .upper-section.two-panels {
          grid-template-columns: 1.4fr 0.8fr; /* Utilize space better: wider table, narrower network */
        }




        /* --- LOWER SECTION (shared scroll) --- */
        .lower-section {
          background: white;
          border-radius: 10px;
          padding: 10px;
        }

        .shared-scroll {
          display: flex;
          flex-direction: row;
          align-items: flex-start;
          gap: 20px;
          overflow-y: auto;
          overflow-x: hidden;
          max-height: 520px;
        }

        /* --- PLOT AND TABLE PANELS --- */
        .plot-panel,
        .table-panel {
          flex: 1;
          /* equal width by default */
        }

        .plot-panel {
          flex: 0.9;
          /* smaller plot panel */
          min-width: 550px;
        }

        .table-panel {
          flex: 1.1;
          min-width: 400px;
        }

        .cards {
          background: white;
          border-radius: 10px;
          padding: 15px;
          box-shadow: 0 4px 15px rgba(0,0,0,0.05);
          box-sizing: border-box;
          width: 100%;
          min-width: 0; /* Prevents overflow from stretching the grid column */
        }

        .cards h3 {
          text-align: center;
          margin-bottom: 10px;
        }

        .cardss {
          background: white;
          border-radius: 10px;
          padding: 15px;
          box-shadow: 0 4px 15px rgba(0,0,0,0.05);
          box-sizing: border-box;
          width: 100%;
          min-width: 0; /* Prevents overflow from stretching the grid column */
        }

        .cardss h3 {
          text-align: center;
          margin-bottom: 10px;
        }

        /* When no network — make Drug table centered & wider */
        .single-card {
          margin: 0 auto;
          width: 70%;
          max-width: 900px;
        }

        /* Table styling */
        #rhythmTableContainer table {
          width: 100%;
          border-collapse: collapse;
        }

        #drugInteractorsTable {
          width: 100%;
          min-width: 850px;
          font-size: 11px;
        }

        #drugInteractorsTable th {
          padding: 6px 8px !important;
          font-size: 11px;
          line-height: 1.2;
        }

        #drugInteractorsTable td {
          padding: 5px 6px !important;
          font-size: 11px;
        }


        /* Responsive adjustments */
        @media (max-width: 768px) {
          .upper-section.two-panels {
            grid-template-columns: 1fr;
          }

          .shared-scroll {
            flex-direction: column;
            max-height: unset;
          }
        }
      </style>

      <div class="grid-container">
        <div class="upper-section <?= !empty($networkData) ? 'two-panels' : '' ?>">
          <?php if (empty($networkData)): ?>
            <!-- Only table, centered and wider -->
            <div class="cards single-card">
              <h3>Drug Interactors</h3>
              <div style="max-height: 350px; overflow: auto;">
                <?= $tableHTML ?>
              </div>
            </div>
          <?php else: ?>
            <!-- Normal two-panel layout -->
            <div class="cards">
              <h3>Drug Interactors</h3>
              <div style="max-height: 350px; overflow: auto;">
                <?= $tableHTML ?>
              </div>
            </div>

            <div class="cardss">
              <h3>Drug-Target Interaction Network</h3>
              <div id="cy" style="width: 100%; height: 400px;"></div>
            </div>
          <?php endif; ?>
        </div>

        <!-- 🔹 LOWER ROW (Shared Scroll) -->
        <div class="lower-section" id="rhythmic-profile-section">


          <h3 style="text-align:center;">Rhythmic Expression Profile</h3>
          <div class="shared-scroll">
            <!-- LEFT: Rhythmic Plot -->
            <div class="plot-panel">
              <div id="rhythmPlotContainer" style="height: 450px; width: 100%;"></div>
            </div>

            <!-- RIGHT: Rhythmic Table -->
            <div class="table-panel" id="rhythmTableContainer"></div>
          </div>
        </div>
      </div>



      </div> <!-- results-area -->

      <script>
        // Smooth scroll to the results area, accounting for fixed header height
        window.addEventListener("DOMContentLoaded", () => {
          const element = document.getElementById('results-area');
          if (element) {
            setTimeout(() => {
              const yOffset = -90; // Adjust for fixed header
              const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;
              window.scrollTo({top: y, behavior: 'smooth'});
            }, 300);
          }
        });

        // Client-side sorting for Combined Score column
        let sortDirection = 'desc';
        function sortInteractorsTable() {
          const table = document.getElementById('drugInteractorsTable');
          if (!table) return;
          const tbody = table.querySelector('tbody');
          if (!tbody) return;
          const rows = Array.from(tbody.querySelectorAll('tr'));
          
          sortDirection = sortDirection === 'desc' ? 'asc' : 'desc';
          
          const sortBtn = document.getElementById('sortBtn');
          if (sortBtn) {
            sortBtn.innerHTML = sortDirection === 'desc' ? '▼' : '▲';
          }
          
          rows.sort((rowA, rowB) => {
            // Combined Score is in column index 10
            const cellA = rowA.cells[10];
            const cellB = rowB.cells[10];
            if (!cellA || !cellB) return 0;
            
            const valA = parseFloat(cellA.textContent.trim()) || 0;
            const valB = parseFloat(cellB.textContent.trim()) || 0;
            
            return sortDirection === 'desc' ? valB - valA : valA - valB;
          });
          
          rows.forEach(row => tbody.appendChild(row));
        }
      </script>
    <?php endif; ?>


    <script src="https://unpkg.com/cytoscape@3.21.1/dist/cytoscape.min.js"></script>
    <?php if (!empty($networkData)): ?>
      <script>
        function setdrug(drug) {
          document.getElementById('drug').value = drug;

          if (!selectedSpecies) {
            alert("Please select a species first!");
            return;
          }

          // Reset all buttons to default
          document.querySelectorAll('.button-container input').forEach(btn => {
            btn.style.backgroundColor = '';
            btn.style.color = '';
          });

          // Case-insensitive match
          const selectedBtn = [...document.querySelectorAll('.button-container input')]
            .find(btn => btn.value.toLowerCase() === drug.toLowerCase());

          if (selectedBtn) {
            selectedBtn.style.backgroundColor = '#ffa200';
            selectedBtn.style.color = 'black';
          }
        }
        const networkData = <?= $networkData ?>;
        const drugName = "<?= htmlspecialchars(strtolower($drug)) ?>";
        // Get current drug name from PHP

        const cy = cytoscape({
          container: document.getElementById('cy'),
          elements: networkData,
          style: [
            {
              selector: 'node',
              style: {
                'label': 'data(id)',
                'background-color': 'orange',  // default node color (blue)
                'color': '#000',
                'text-valign': 'center',
                'text-halign': 'center',
                'font-size': '12px'
              }
            },
            {
              selector: 'node[id = "' + drugName + '"]', // 🎯 highlight the drug node
              style: {
                'background-color': '#800000',   // 🔴 red color for drug
                'color': '#fff',
                'font-weight': 'bold',
                // 'border-width': 2,
                'border-color': '#800000',
                // 'text-outline-color': '#e60000',
                'text-outline-width': 2
              }
            },
            {
              selector: 'edge',
              style: {
                'width': 2,
                'line-color': '#999',
                // 'target-arrow-color': '#999',
                // 'target-arrow-shape': 'triangle',
                // 'curve-style': 'bezier'
              }
            }
          ],
          layout: { name: 'cose' }
        });
      </script>
    <?php endif; ?>

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>
      const speciesParam = "<?php echo addslashes($species); ?>";

      function loadGenePlot(event, gene) {
        event.preventDefault();

        fetch(`plot_data.php?gene=${encodeURIComponent(gene)}&species=${speciesParam}`)
          .then(res => res.json())
          .then(data => {

            console.log(data);

            const rhythmPlotContainer = document.getElementById("rhythmPlotContainer");
            const rhythmTableContainer = document.getElementById("rhythmTableContainer");

            rhythmPlotContainer.innerHTML = "";  // clear old plots
            rhythmTableContainer.innerHTML = ""; // clear old tables

            if (!data.rhythmTableHTML || Object.keys(data.rhythmTableHTML).length === 0) {
              rhythmTableContainer.innerHTML = "<p>No rhythm data available for this gene.</p>";
              rhythmPlotContainer.innerHTML = "";
              return;
            }

            Object.keys(data.rhythmTableHTML).forEach((strain, index) => {
              // === Create chart div ===
              const chartDiv = document.createElement("div");
              chartDiv.id = `chart-${index}`;
              chartDiv.style.width = "100%";
              chartDiv.style.height = "400px";
              chartDiv.style.marginBottom = "30px";
              rhythmPlotContainer.appendChild(chartDiv);

              // === Create table div ===
              const tableDiv = document.createElement("div");
              tableDiv.innerHTML = data.rhythmTableHTML[strain];
              tableDiv.style.marginBottom = "80px";
              rhythmTableContainer.appendChild(tableDiv);

              // === Create plot ===
              const series = [];

              if (data.rawPoints[strain] && data.rawPoints[strain].length > 0) {
                series.push({
                  type: "line",
                  name: "Raw Data",
                  markerType: "circle",
                  lineDashType: "dot",
                  lineThickness: 2,
                  showInLegend: true,
                  markerSize: 8,
                  dataPoints: data.rawPoints[strain]
                });
              }

              if (data.dataPointsModels[strain]) {
                Object.entries(data.dataPointsModels[strain]).forEach(([model, points]) => {
                  series.push({
                    type: "spline",
                    name: model,
                    markerType: "none",
                    showInLegend: true,
                    dataPoints: points
                  });
                });
              }

              new CanvasJS.Chart(chartDiv.id, {
                animationEnabled: true,
                title: { text: `${gene} - ${strain}`, fontSize: 18 },
                axisX: { title: "Time", interval: 10 },
                axisY: { title: "Expression" },
                data: series
              }).render();
            });

            // === Optional message above first chart ===
            if (data.message) {
              const firstChart = document.getElementById("chart-0");
              if (firstChart) {
                const msgDiv = document.createElement("div");
                msgDiv.className = "plotMessage";
                msgDiv.style.color = "red";
                msgDiv.style.textAlign = "center";
                msgDiv.style.marginBottom = "10px";
                msgDiv.innerText = data.message;
                firstChart.parentNode.insertBefore(msgDiv, firstChart);
              }
            }

            // Scroll to the rhythmic profile section smoothly, accounting for fixed header height
            const profileSection = document.getElementById('rhythmic-profile-section');
            if (profileSection) {
              setTimeout(() => {
                const yOffset = -90; // Adjust for fixed header
                const y = profileSection.getBoundingClientRect().top + window.pageYOffset + yOffset;
                window.scrollTo({top: y, behavior: 'smooth'});
              }, 100);
            }
          })

          .catch(err => console.error(err));
      }


    </script>


    <script>
      // Drug lists per species
      const speciesDrugs = {
        "P.falciparum": [
          "Amodiaquine", "Artemether", "Atovaquone",
          "Halofantrine", "Hydroxychloroquine", "Lumefantrine",
          "Methylene blue", "Piperaquine", "Primaquine",
          "Pyrimethamine", "Quinidine", "Quinine", "Artemisinin",

        ],
        "P.chaubaudi": [
          "Amodiaquine", "Artemether", "Atovaquone",
          "Chloroquine", "Halofantrine", "Hydroxychloroquine",
          "Lumefantrine", "Mefloquine", "Primaquine",
          "Piperaquine", "Proguanil", "Quinidine", "Quinine", "Artemisinin"

        ],
        "P.vivax": [
          "Amodiaquine", "Artemether", "Atovaquone",
          "Chloroquine", "Hydroxychloroquine", "Lumefantrine",
          "Mefloquine", "Methylene blue", "Primaquine",
          "Proguanil", "Quinidine", "Quinine", "Piperaquine", "Artemisinin"

        ],
        "Homo sapiens": [
          "Amodiaquine", "Atovaquone",
          "Chloroquine", "Hydroxychloroquine", "Lumefantrine",
          "Mefloquine", "Methylene blue", "Primaquine", "Halofantrine",
          "Proguanil", "Quinidine", "Quinine", "Artemisinin", "Pyrimethamine"

        ]
      };

      let selectedSpecies = "P.falciparum"; // Default selection

      // Update drug buttons dynamically
      function loadDrugs(species) {
        const container = document.querySelector(".button-container");
        container.innerHTML = ""; // Clear old buttons

        speciesDrugs[species].forEach(drug => {
          const btn = document.createElement("input");
          btn.type = "button";
          btn.className = "button button1";
          btn.value = drug;
          btn.onclick = () => setdrug(drug);
          container.appendChild(btn);
        });

        // Update hidden field
        document.getElementById('species').value = species;
      }

      // Handle species selection
      document.querySelectorAll('.species-btn').forEach(button => {
        button.addEventListener('click', function (e) {
          e.preventDefault();
          selectedSpecies = this.getAttribute('data-species');

          // Reset all species buttons to purple
          document.querySelectorAll('.species-btn').forEach(btn => {
            btn.style.backgroundColor = '#2c1e56'; // purple
            btn.style.color = 'white';
          });

          // Highlight the selected species in yellow
          this.style.backgroundColor = '#ffa200'; // yellow
          this.style.color = 'white';

          // Load drugs for this species
          loadDrugs(selectedSpecies);
        });
      });
      // Preserve selected species after form submission
      window.addEventListener("DOMContentLoaded", () => {
        const selectedSpeciesFromPHP = "<?= htmlspecialchars($species ?? '') ?>";

        if (selectedSpeciesFromPHP) {
          selectedSpecies = selectedSpeciesFromPHP;

          // Reset all buttons to purple first
          document.querySelectorAll('.species-btn').forEach(btn => {
            btn.style.backgroundColor = '#2c1e56';
            btn.style.color = 'white';
          });

          // Highlight the selected one in yellow
          const selectedBtn = [...document.querySelectorAll('.species-btn')]
            .find(btn => btn.getAttribute('data-species') === selectedSpecies);

          if (selectedBtn) {
            selectedBtn.style.backgroundColor = '#ffa200';
            selectedBtn.style.color = 'white';
          }

          // Reload drug list for this species
          if (typeof loadDrugs === 'function') {
            loadDrugs(selectedSpecies);
          }
        }
      });

      // Handle drug selection
      function setdrug(drug) {
        // Update hidden input for form submission
        document.getElementById('drug').value = drug;

        // Make sure a species is selected
        if (!selectedSpecies) {
          alert("Please select a species first!");
          return;
        }

        // Reset all drug buttons to default
        document.querySelectorAll('.button-container input').forEach(btn => {
          btn.style.backgroundColor = '';
          btn.style.color = '';
        });

        // Highlight the selected button in yellow
        const selectedBtn = [...document.querySelectorAll('.button-container input')]
          .find(btn => btn.value === drug);

        if (selectedBtn) {
          selectedBtn.style.backgroundColor = '#ffa200';
          selectedBtn.style.color = 'white';
        }
      }


      // Auto-load P.falciparum on page load
      window.addEventListener("DOMContentLoaded", () => {
        // Highlight the correct species button
        document.querySelectorAll('.species-btn').forEach(btn => {
          if (btn.getAttribute('data-species') === selectedSpecies) {
            btn.style.opacity = 1;
          } else {
            btn.style.opacity = 1;
          }
        });

        // Load drugs for the selected species
        loadDrugs(selectedSpecies);

        // If a drug was submitted, highlight it
        const submittedDrug = '<?php echo $_POST["drug"] ?? ""; ?>';
        if (submittedDrug) {
          setdrug(submittedDrug);
        }
      });
    </script>

    <p>
      A curated network of putative and experimentally supported interactors of FDA-approved antimalarial drugs,
      integrating STITCH-derived
      <a href="http://stitch.embl.de/" target="_blank" rel="noopener noreferrer">STITCH targets</a>
      and literature-validated interactions across
      <i>Homo sapiens</i> and <i>Plasmodium</i> species. Commonly used FDA-approved antimalarial drugs were retrieved
      from DrugBank
      (<a href="https://go.drugbank.com/" target="_blank" rel="noopener noreferrer">DrugBank 5.1.13</a>).
      This module displays the rhythmic expression patterns of these drug interactors across all available
      time-series datasets. Further details for the antimalarial drug interactors in
      <i>Plasmodium</i> species and the host are available in the <strong>Download</strong> tab.
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
      <a href="https://iith.ac.in/" target="_blank"
        style="position: absolute; right: 20px; bottom: 20px;margin-right: 70px;">
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
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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