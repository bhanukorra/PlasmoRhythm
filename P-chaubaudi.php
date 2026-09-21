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
        border: none;
        /* Remove any border */
        outline: none;
        /* Remove any outline */
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

    .dropdown2-container {
        position: relative;
    }

    .dropdown2-button {
        background-color: #007bff;
        /* Default button color */
        color: white;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    .dropdown2-button.green {
        background-color: #28a745;
        /* Green color for selected button */
    }

    .dropdown2-content {
        position: absolute;
        z-index: 1;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 5px;
        display: none;
    }

    .dropdown2-content div {
        padding: 10px;
        cursor: pointer;
    }

    .dropdown2-content div:hover {
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

    .custom-dropdown2 {
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

    .custom-dropdown2:focus {
        border-color: #ff9800;
        background-color: #fff;
        outline: none;
    }

    .custom-dropdown2 option {
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
    }

    .stats-container label {
        font-size: 16px;
        margin-right: 10px;
    }

    .stats-container {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        /* This ensures that elements wrap on small screens */
        gap: 10px;
        /* Adds space between the elements */
    }

    .custom-dropdown2 {
        max-width: 150px;
        /* Limits the width of the dropdown2s to avoid overflowing */
    }

    @media (max-width: 768px) {
        .stats-container {
            justify-content: space-between;
            width: 100%;
        }

        .custom-dropdown2 {
            width: 100%;
            /* dropdown2s will take full width on small screens */
            max-width: none;
            /* Remove any max-width on smaller screens */
        }
    }

    .species-buttons {
        display: flex;
        flex-wrap: wrap;
        /* Allow buttons to wrap on smaller screens */
        gap: 10px;
        justify-content: center;
    }

    @media (max-width: 768px) {
        .card {
            flex-direction: column;
            padding: 10px;
        }

        .card2,
        .card3 {
            width: 100%;
            height: auto;
            margin: 10px 0;
            margin-left: 0;
            margin-top: 0;
        }

        .card3 {
            margin-top: 10px;
            /* Adjusts spacing between card2 and card3 on mobile */
            margin-left: 0;
        }
    }
</style>

<style>
    /* dropdown2 container */
    .dropdown2 {
        position: relative;
        width: 200px;
    }

    /* Button styling */
    /* .dropdown2-btn {
    width: 90%;
    padding: 10px;
    background-color: #2c1e56;
    color: white;
    border: none;
    border-radius: 5px;
    text-align: center;
    cursor: pointer;
    font-size: 16px;
} */

    /* dropdown2 content (hidden by default) */
    .dropdown2-content {
        display: none;
        position: absolute;
        width: 350px;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        z-index: 1000;

    }

    .dropdown2-content {
        max-height: 300px;
        /* adjust this height to what looks good for your page */
        overflow-y: auto;
        /* add vertical scroll if content overflows */
    }

    /* Style options */
    .dropdown2-content label {
        display: block;
        padding: 8px 10px;
        cursor: pointer;
    }

    .dropdown2-content label:hover {
        background-color: #ddd;
    }

    /* Show dropdown2 when clicked */
    .dropdown2.active .dropdown2-content {
        display: block;
    }

    /* Style for dropdown2 buttons */
    .dropdown2-btn {
        background-color: rgb(125, 127, 129);
        /* Default Blue */
        color: white;
        padding: 10px 15px;
        border: none;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
        border-radius: 5px;
        width: 170px;
        /* set as per your layout */
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
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
                        style="font-size: 0.35em; vertical-align: super; line-height: 0; font-style: italic;">v1.0</sup>
                </h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.html">Home</a></li>
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

            <div class="container position-relative"
                style="display: flex; justify-content: center; align-items: center; height: 100px;">
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
            $strain = $_POST['strain'];  // Selected strain from dropdown2
        
            // Validate strain: Check if the table exists in the database
            $stmt = $conn->prepare("SHOW TABLES LIKE ?");
            $stmt->bind_param("s", $strain);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows == 0) {
                die("Invalid strain selected: " . htmlspecialchars($strain));
            }
            $stmt->close();

            // Dynamically build WHERE clause for multiple models
            $model_conditions = [];
            foreach ($models as $model) {
                $model_conditions[] = "{$model}_pvalue < ?";
            }
            $where_clause = implode(" OR ", $model_conditions);

            // Prepare SQL query
            $query = "SELECT DISTINCT * FROM `$strain` WHERE CycID = ? AND ($where_clause)";
            $params = array_merge([$gene], array_fill(0, count($models), $p_value_cutoff));
            $types = "s" . str_repeat("d", count($models));

            $stmt = $conn->prepare($query);
            if (!$stmt) {
                die("SQL error: " . $conn->error);
            }

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

        <div class="species-buttons"
            style="display: flex; justify-content: center; align-items: center; gap: 20px; padding: 20px">
            <a href="P-falciparum.php" style="text-decoration: none;">
                <button
                    style="background-color: #2c1e56; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
                    <i>P. falciparum</i>
                </button>
            </a>
            <a href="P-chaubaudi.php" style="text-decoration: none;">
                <button
                    style="background-color: #ffa200; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
                    <i>P. chaubaudi</i>
                </button>
            </a>
            <a href="P-vivax.php" style="text-decoration: none;">
                <button
                    style="background-color: #2c1e56; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
                    <i>P. vivax</i>
                </button>
            </a>
            <a href="P-ber.php" style="text-decoration: none;">
                <button
                    style="background-color: #2c1e56; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
                    <i>P. berghei</i>
                </button>
            </a>
        </div>

        <!-- Search Form -->
        <div class="card">
            <form action="P-chaubaudi_result.php" method="POST" id="geneForm">

                <div class="card2">
                    <div class="left-section" style="width:100%;">
                        <h3>Search for Genes</h3>
                        <div class="search" style="width:100%;">
                            <input type="text" name="genes" id="genes" required
                                style="width:100%; padding:10px; border:2px solid lightblue; border-radius:5px; font-size:14px; box-sizing:border-box; outline:none;"
                                placeholder="Enter gene IDs, comma-separated">
                        </div>
                        <div class="op" style="margin-top:10px;">
                            <h6>Example Search:</h6>
                            <input type="button" class="button button1" value="PCHAS_0101500"
                                onClick="appendGene('PCHAS_0101500')">&emsp;
                            <input type="button" class="button button1" value="PCHAS_0102300"
                                onClick="appendGene('PCHAS_0102300')">&emsp;
                            <input type="button" class="button button1" value="PCHAS_0103200"
                                onClick="appendGene('PCHAS_0103200')">&emsp;
                        </div>
                    </div>
                </div>

                <div class="card3">
                    <div class="right-section">

                        <!-- Dataset — checkbox dropdown -->

                        <style>
                            .ds-dropdown-wrapper {
                                position: relative;
                                width: 100%;
                            }

                            .ds-dropdown-btn {
                                width: 100%;
                                padding: 8px 36px 8px 14px;
                                border: 1px solid #ccc;
                                border-radius: 6px;
                                background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23666' stroke-width='1.8' fill='none' stroke-linecap='round'/%3E%3C/svg%3E") no-repeat right 12px center;
                                font-size: 14px;
                                color: #333;
                                cursor: pointer;
                                text-align: left;
                                white-space: nowrap;
                                overflow: hidden;
                                text-overflow: ellipsis;
                                appearance: none;
                                -webkit-appearance: none;
                            }

                            .ds-dropdown-btn:focus {
                                outline: 2px solid #5b3fa3;
                                border-color: #5b3fa3;
                            }

                            .ds-dropdown-panel {
                                display: none;
                                position: absolute;
                                top: calc(100% + 4px);
                                left: 0;
                                right: 0;
                                z-index: 999;
                                background: #fff;
                                border: 1px solid #ccc;
                                border-radius: 8px;
                                box-shadow: 0 6px 20px rgba(0, 0, 0, 0.13);
                                max-height: 280px;
                                overflow-y: auto;
                                padding: 6px 0;
                            }

                            .ds-dropdown-panel.open {
                                display: block;
                            }

                            .ds-dropdown-panel label {
                                display: flex;
                                align-items: center;
                                gap: 10px;
                                padding: 7px 16px;
                                cursor: pointer;
                                font-size: 13.5px;
                                color: #333;
                                transition: background .12s;
                            }

                            .ds-dropdown-panel label:hover {
                                background: #f3f0ff;
                            }

                            .ds-dropdown-panel label.select-all-row {
                                font-weight: 600;
                                border-bottom: 1px solid #eee;
                                margin-bottom: 4px;
                                color: #5b3fa3;
                            }

                            .ds-dropdown-panel input[type="checkbox"] {
                                accent-color: #5b3fa3;
                                width: 15px;
                                height: 15px;
                                flex-shrink: 0;
                            }
                        </style>

                        <div class="model-container" style="display:flex; align-items:center; margin-bottom:18px;">
                            <h3 style="margin-right:20px; white-space:nowrap;">Dataset</h3>
                            <div class="ds-dropdown-wrapper" id="dsWrapper_P_chaubaudi">
                                <button type="button" class="ds-dropdown-btn" id="dsBtn_P_chaubaudi"
                                    onclick="toggleDsDropdown('P_chaubaudi')">— Select Dataset(s) —</button>
                                <div class="ds-dropdown-panel" id="dsPanel_P_chaubaudi">
                                    <label class="select-all-row">
                                        <input type="checkbox" id="chk_ds_all_P_chaubaudi"
                                            onchange="dsSelectAll('P_chaubaudi', this.checked)"> Select All (11)
                                    </label>
                                    <label><input type="checkbox" name="strain[]"
                                            value="dd_cry1cry2_ko_rijoferreira2020"> DD cry1/cry2 KO P. chabaudi
                                        (Rijo-Ferreira et al., 2020)</label>
                                    <label><input type="checkbox" name="strain[]" value="dd_fbxl3_ko_rijoferreira2020">
                                        DD fbxl3 KO P. chabaudi (Rijo-Ferreira et al., 2020)</label>
                                    <label><input type="checkbox" name="strain[]" value="ld_matched_subudhi2020"> LD
                                        Matched (Subudhi et al., 2020)</label>
                                    <label><input type="checkbox" name="strain[]" value="dl_mismatched_subudhi2020"> DD
                                        Mismatched (Subudhi et al., 2020)</label>
                                    <label><input type="checkbox" name="strain[]" value="ld_nightfed_rijoferreira2020">
                                        LD Night-fed (Rijo-Ferreira et al., 2020)</label>
                                    <label><input type="checkbox" name="strain[]" value="ld_pchsr10_ko_subudhi2020"> LD
                                        PcHSR10 KO (Subudhi et al., 2020)</label>
                                    <label><input type="checkbox" name="strain[]" value="ld_pchwt_subudhi2020"> LD PcHWT
                                        (Subudhi et al., 2020)</label>
                                    <label><input type="checkbox" name="strain[]" value="ld_spreadout_rijoferreira2020">
                                        LD Spread-out (Rijo-Ferreira et al., 2020)</label>
                                    <label><input type="checkbox" name="strain[]"
                                            value="wtdd_adlib_ctrl_rijoferreira2020"> DD WT Ad Lib Control
                                        (Rijo-Ferreira et al., 2020)</label>
                                    <label><input type="checkbox" name="strain[]" value="wtdd_adlib_rijoferreira2020">
                                        WT DD Ad Lib (Rijo-Ferreira et al., 2020)</label>
                                    <label><input type="checkbox" name="strain[]" value="wtld_adlib_rijoferreira2020">
                                        WT LD Ad Lib (Rijo-Ferreira et al., 2020)</label>





                                </div>
                            </div>
                        </div>
                        <script>
                            (function () {
                                function toggleDsDropdown(id) {
                                    document.getElementById('dsPanel_' + id).classList.toggle('open');
                                }
                                function dsSelectAll(id, checked) {
                                    document.querySelectorAll('#dsPanel_' + id + ' input[name="strain[]"]')
                                        .forEach(cb => cb.checked = checked);
                                    updateDsBtn(id);
                                }
                                function updateDsBtn(id) {
                                    const all = document.querySelectorAll('#dsPanel_' + id + ' input[name="strain[]"]');
                                    const chkd = [...all].filter(c => c.checked);
                                    const btn = document.getElementById('dsBtn_' + id);
                                    const saChk = document.getElementById('chk_ds_all_' + id);
                                    if (chkd.length === 0) btn.textContent = '— Select Dataset(s) —';
                                    else if (chkd.length === 1) btn.textContent = chkd[0].parentElement.textContent.trim();
                                    else btn.textContent = chkd.length + ' datasets selected';
                                    saChk.checked = chkd.length === all.length;
                                }
                                document.querySelectorAll('#dsPanel_P_chaubaudi input[name="strain[]"]').forEach(cb => {
                                    cb.addEventListener('change', () => updateDsBtn('P_chaubaudi'));
                                });
                                // Close dropdown when clicking outside
                                document.addEventListener('click', function (e) {
                                    const wrap = document.getElementById('dsWrapper_P_chaubaudi');
                                    if (wrap && !wrap.contains(e.target))
                                        document.getElementById('dsPanel_P_chaubaudi').classList.remove('open');
                                });
                                window.toggleDsDropdown = window.toggleDsDropdown || toggleDsDropdown;
                                window.dsSelectAll = window.dsSelectAll || dsSelectAll;
                                // expose for validation
                                window._dsUpdateBtn_P_chaubaudi = () => updateDsBtn('P_chaubaudi');
                            })();
                        </script>


                        <!-- Model — multi-select checkboxes -->
                        <div class="model-container" style="display:flex; align-items:center; margin-bottom:18px;">
                            <h3 style="margin-right:20px;">Model</h3>
                            <div class="models" style="display:flex; flex-wrap:wrap; align-items:center; gap:18px;">
                                <label style="border-right:2px solid #ccc; padding-right:18px;">
                                    <input type="checkbox" id="chk_selectAll"> <strong>Select All</strong>
                                </label>
                                <label><input type="checkbox" name="model[]" value="JTK" id="chk_JTK"> JTK</label>
                                <label><input type="checkbox" name="model[]" value="ARS" checked id="chk_ARS">
                                    ARS</label>
                                <label><input type="checkbox" name="model[]" value="LS" id="chk_LS"> LS</label>
                                <label><input type="checkbox" name="model[]" value="meta2d" id="chk_meta2d">
                                    META2D</label>
                            </div>
                        </div>
                        <script>
                            document.getElementById('chk_selectAll').addEventListener('change', function () {
                                ['chk_ARS', 'chk_JTK', 'chk_LS', 'chk_meta2d'].forEach(id =>
                                    document.getElementById(id).checked = this.checked
                                );
                            });
                        </script>

                        <!-- Stats -->
                        <div class="stats-container" style="display:flex; align-items:center;">
                            <h3 style="margin-right:20px;">Stats</h3>
                            <div style="display:flex; align-items:center; gap:10px; margin-top:10px;">
                                <input type="number" step="0.001" min="0" max="1" name="threshold" value="0.05"
                                    style="width:80px; padding:3px; font-size:1em;">
                                <input type="radio" id="pvalue" name="threshold_type" value="pvalue" checked>
                                <label for="pvalue" style="margin-right:10px;">p-value</label>
                                <input type="radio" id="qvalue" name="threshold_type" value="qvalue">
                                <label for="qvalue">q-value</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="display:flex; justify-content:center; margin-top:20px;">
                    <button type="submit" class="button2">Submit</button>
                </div>
            </form>
        </div>

        <script>
            function appendGene(gene) {
                const f = document.getElementById('genes');
                const cur = f.value.trim();
                if (!cur) { f.value = gene; return; }
                const existing = cur.split(',').map(g => g.trim());
                if (!existing.includes(gene)) f.value = cur + ', ' + gene;
            }
            document.getElementById('chk_selectAll').addEventListener('change', function () {
                ['chk_ARS', 'chk_JTK', 'chk_LS', 'chk_meta2d'].forEach(id =>
                    document.getElementById(id).checked = this.checked);
            });
            document.getElementById('geneForm').addEventListener('submit', function (e) {
                const genes = document.getElementById('genes').value.trim();
                const strain = document.querySelector('select[name="strain"]').value;
                const models = document.querySelectorAll('input[name="model[]"]:checked');
                if (!genes) { alert("Please enter at least one gene."); e.preventDefault(); }
                else if (!strain) { alert("Please select a dataset."); e.preventDefault(); }
                else if (!models.length) { alert("Please select at least one model."); e.preventDefault(); }
            });
            function setGene(gene) { document.getElementById('genes').value = gene; }
        </script>



    </main>

    <footer id="footer" class="footer dark-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">PlasmoRhythm</span>
                    </a>
                    <p style="font-size: 0.85em; font-style: italic; color: #aaa; margin: 4px 0 0 0;">Release version
                        1.0 &mdash; February 2026</p>

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