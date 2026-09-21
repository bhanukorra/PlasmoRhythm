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

    body {
        overflow-x: hidden;
        /* Prevents horizontal scrolling */
        width: 100%;
        /* Ensures the body width is 100% of the viewport */
    }

    .canvasjs-chart-credit {
        display: none !important;
    }

    @font-face {
        font-family: 'Times New Roman';

    }

    h3 {
        margin-top: 20px;
        font-size: 28px;
        /* Space above section headings */
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

    . .link-wrap-left,
    .link-wrap-right {
        width: 100%;
    }


    /* Styling for download buttons */
    .download-btn {
        background-color: #291d54;
        /* Green background */
        border: none;
        color: white;
        /* White text */
        padding: 10px 20px;
        /* Some padding */
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 10px 5px;
        cursor: pointer;
        border-radius: 5px;
        /* Rounded corners */
        transition: background-color 0.3s ease;
        /* Smooth hover effect */
    }

    .download-btn:hover {
        background-color: #ffa200;
        /* yellow on hover */
    }

    .download-btn:active {
        background-color: #ff7300;
        /* orange when clicked */
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
        <!-- <div class="species-buttons" style="display: flex; justify-content: center; align-items: center; gap: 20px; padding: 20px">
<a href="A-steph.php" style="text-decoration: none;">
    <button style="background-color: #ffa200; color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 150px;">
        <i>A. stephensi</i>
    </button>
</a>  
</div> -->


        <p style="text-align: center;">
            Search gene, protein, or metabolite.</p>

        <style>
            .search-bar-container {
                display: flex;
                justify-content: center;
                margin: 20px auto;
                /* decreased margins */
            }

            p {
                margin-top: 1rem;
                margin-bottom: 0;
            }

            .search-bar {
                /* border-radius: 50px !important; */
                /* cylindrical look */
                background: rgba(255, 255, 255, 0.8);
                /* slight transparency */
                backdrop-filter: blur(5px);
                /* subtle frosted glass effect */
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                /* soft shadow */
            }

            .input-group-text {
                border-radius: 50px 0 0 50px !important;
                background: rgba(255, 255, 255, 0.8);
                border-right: none;
            }

            .btn-primary {
                border-radius: 0 50px 50px 0 !important;

            }

            .search-bar-container form {
                margin-bottom: 0;
                /* removes form bottom margin */
            }

            .input-group {
                margin-bottom: 0;
                /* removes spacing added by Bootstrap */
            }
        </style>

        <div class="container search-bar-container">
            <form method="GET" action="gene.php" class="w-100" style="max-width: 600px;">
                <div class="input-group input-group-lg">
                    <span class="input-group-text">
                        <i class="bi bi-search text-blue"></i>
                    </span>
                    <input type="text" name="gene" class="form-control search-bar" placeholder="Search" required>
                    <button class="btn" type="submit" style="background-color:#291d54; border:none; border-radius:0 50px 50px 0;
         padding:0 25px; color:white; margin-bottom:0; vertical-align:middle;">
                        Search
                    </button>

                </div>
            </form>
        </div>
        <?php
        include("config.inc.php");
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        $gene = $_GET['gene'] ?? null;
        if (!$gene) {
            die("<p style='color:red; text-align:center;'>Please provide a gene/protein/metabolite name.</p>");

        }

        $original_gene = $gene; // store user input safely
        $threshold = 0.05; // significance cutoff for ARS
        $description = null;

        // 1. Get all tables in DB
        $all_tables = [];
        $res = $conn->query("SHOW TABLES");
        while ($row = $res->fetch_array())
            $all_tables[] = $row[0];


        // 2️⃣ Detect if user entered a Gene Symbol instead of CycID
// ✅ Flexible gene-symbol or alias detection (handles Gene.Name, alias, KEGG, HMDB, etc.)
// ----------------------
// Safer mapping: map user-entered symbol -> CycID ONLY if the table looks like a gene/rhythmicity dataset
// (avoids mapping metabolite names that appear in tables with Gene.Name.or.Symbol)
        $gene_symbol = null;
        $mapped_gene = null;

        // Candidate rhythmicity columns (table must have at least one of these to be considered a gene/rhythm table)
        $rhythm_cols = [
            'ARS_pvalue',
            'ARS_amplitude',
            'ARS_adjphase',
            'ARS_period',
            'JTK_pvalue',
            'JTK_amplitude',
            'JTK_adjphase',
            'JTK_period',
            'LS_pvalue',
            'LS_amplitude',
            'LS_adjphase',
            'LS_period',
            'meta2d_pvalue',
            'meta2d_AMP',
            'meta2d_phase',
            'meta2d_period'
        ];

        $possible_cols = ['Gene.Name.or.Symbol', 'Gene.Name', 'GeneName', 'alias', 'Alias', 'mapped', 'Gene ID', 'GeneID', 'CycID'];

        // Loop through tables but accept mapping only when the table looks like rhythmic gene data
        foreach ($all_tables as $tbl) {
            // Get all column names in this table
            $cols_res = $conn->query("SHOW COLUMNS FROM `$tbl`");
            if (!$cols_res)
                continue;
            $cols = [];
            while ($r = $cols_res->fetch_assoc())
                $cols[] = $r['Field'];

            // Skip tables that look like metabolomics (they have HMDB or KEGG columns)
            $lowerCols = array_map('strtolower', $cols);
            if (in_array('hmdb', $lowerCols) || in_array('kegg', $lowerCols)) {
                // this table likely contains metabolite mappings — skip for CycID mapping
                continue;
            }

            // Ensure table has at least one rhythmicity/model column
            $has_rhythm_col = false;
            foreach ($rhythm_cols as $rc) {
                if (in_array($rc, $cols) || in_array(strtolower($rc), $lowerCols)) {
                    $has_rhythm_col = true;
                    break;
                }
            }
            if (!$has_rhythm_col) {
                // Not a rhythmic/gene result table — skip
                continue;
            }

            // Find identifier-like columns present in this table
            $found_cols = array_intersect($possible_cols, $cols);
            if (empty($found_cols))
                continue;

            // Build WHERE clause using strict equality only to avoid accidental matches
            $conditions = [];
            $params = [];
            foreach ($found_cols as $c) {
                $conditions[] = "`$c` = ?";
                $params[] = $gene;
            }
            $where_clause = implode(' OR ', $conditions);

            // Prefer returning CycID if present
            if (in_array('CycID', $cols)) {
                $sql = "SELECT `CycID` FROM `$tbl` WHERE $where_clause LIMIT 1";
            } else {
                $first_col = reset($found_cols);
                $sql = "SELECT `$first_col` AS `CycID` FROM `$tbl` WHERE $where_clause LIMIT 1";
            }

            $stmt = $conn->prepare($sql);
            if (!$stmt)
                continue;

            // dynamic binding
            $types = str_repeat('s', count($params));
            $bind_names = [$types];
            foreach ($params as $i => $val)
                $bind_names[] = &$params[$i];
            call_user_func_array([$stmt, 'bind_param'], $bind_names);

            $stmt->execute();
            $res = $stmt->get_result();

            if ($res && $res->num_rows > 0) {
                $row = $res->fetch_assoc();
                if (!empty($row['CycID'])) {
                    // found a mapping in a table that looks like a gene/rhythmicity dataset
                    $gene_symbol = $gene;
                    $mapped_gene = $row['CycID'];
                    $stmt->close();
                    break;
                }
            }
            $stmt->close();
        }

        // Use mapped gene only when it's found in an appropriate table.
// We will NOT overwrite $gene immediately; we'll use $mapped_gene later when querying CycID fields.
        if ($mapped_gene) {
            // You can optionally set a flag so downstream code uses $mapped_gene for CycID queries
            // e.g. $use_mapped_gene = true;
        } else {
            // no safe mapping found; keep original $gene as-is
        }


        // Optional: if no mapping found, keep original gene
        if ($gene_symbol && !$gene) {
            die("<p style='color:red; text-align:center;'>Gene symbol <strong>" . htmlspecialchars($gene_symbol) . "</strong> not found in any dataset.</p>");
        }


        $rawDataPoints = [];
        $fittedDataPoints = [];
        $resultsSummary = [];
        $table1HTML = [];
        $table2HTML = [];
        $gene_found = false;

        // 2. Loop through all tables (strains)
        foreach ($all_tables as $strain) {

            // Before querying a table, check if it has 'CycID'
            $colCheck = $conn->query("SHOW COLUMNS FROM `$strain` LIKE 'CycID'");
            if ($colCheck->num_rows === 0) {
                // Skip tables without CycID
                continue;
            }

            $hasGeneName = false;
            $colCheck = $conn->query("SHOW COLUMNS FROM `$strain` LIKE 'Gene.Name.or.Symbol'");
            if ($colCheck && $colCheck->num_rows > 0) {
                $hasGeneName = true;
            }

            // ✅ Dynamically detect any possible identifier columns
// ✅ Safely handle missing Gene.Name.or.Symbol, alias, KEGG, HMDB, etc.
            $possible_cols = ['CycID', 'Gene.Name.or.Symbol', 'Gene.Name', 'GeneName', 'alias', 'Alias', 'KEGG', 'HMDB', 'mapped', 'Gene ID', 'GeneID'];
            $cols_res = $conn->query("SHOW COLUMNS FROM `$strain`");
            $cols = [];
            while ($r = $cols_res->fetch_assoc())
                $cols[] = $r['Field'];
            $found_cols = array_intersect($possible_cols, $cols);

            // if this table has none of those columns, skip it safely
            if (empty($found_cols))
                continue;

            // Build dynamic WHERE clause only for columns that exist in this table
// Build WHERE clause that checks both CycID and Gene Symbol in every relevant column
            $conditions = [];
            $params = [];

            foreach ($found_cols as $c) {
                if (!empty($gene_symbol) && strtolower($gene_symbol) !== strtolower($gene)) {
                    // Search for both mapped CycID and user-typed symbol
                    $conditions[] = "(`$c` = ? OR FIND_IN_SET(?, `$c`) OR `$c` = ? OR FIND_IN_SET(?, `$c`))";
                    array_push($params, $gene, $gene, $gene_symbol, $gene_symbol);
                } else {
                    // Only one identifier
                    $conditions[] = "(`$c` = ? OR FIND_IN_SET(?, `$c`))";
                    array_push($params, $gene, $gene);
                }
            }

            $where_clause = implode(' OR ', $conditions);

            // Final SQL
            $sql = "SELECT * FROM `$strain` WHERE $where_clause";
            $stmt = $conn->prepare($sql);
            if (!$stmt) {
                echo "<p style='color:red;text-align:center;'>Error preparing query for $strain: " . htmlspecialchars($conn->error) . "</p>";
                continue;
            }

            // Dynamic binding
            $types = str_repeat('s', count($params));
            $bind_names = [$types];
            foreach ($params as $i => $val) {
                $bind_names[] = &$params[$i];
            }
            call_user_func_array([$stmt, 'bind_param'], $bind_names);


            // Dynamic binding
            $bind_names = [$types];
            foreach ($params as $i => $val) {
                $bind_names[] = &$params[$i];
            }
            call_user_func_array([$stmt, 'bind_param'], $bind_names);

            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows === 0) {
                $stmt->close();
                continue;
            }
            $gene_found = true;



            // Try fetching Product.Description if exists
            if (!$description) {
                $colCheck = $conn->query("SHOW COLUMNS FROM `$strain` LIKE 'Product.Description'");
                if ($colCheck->num_rows > 0) {

                    // Check if Gene.Name column exists
                    $hasGeneName = false;
                    $colCheck2 = $conn->query("SHOW COLUMNS FROM `$strain` LIKE 'Gene.Name.or.Symbol'");
                    if ($colCheck2 && $colCheck2->num_rows > 0) {
                        $hasGeneName = true;
                    }

                    // --- Use flexible query to handle both CycID and Gene.Name ---
                    if ($hasGeneName && $gene_symbol) {
                        $descQuery = $conn->prepare("SELECT `Product.Description` FROM `$strain` 
                                         WHERE CycID = ? OR CycID = ? OR `Gene.Name.or.Symbol` = ? LIMIT 1");
                        $descQuery->bind_param("sss", $gene, $gene_symbol, $gene_symbol);
                    } elseif ($gene_symbol) {
                        $descQuery = $conn->prepare("SELECT `Product.Description` FROM `$strain` 
                                         WHERE CycID = ? OR CycID = ? LIMIT 1");
                        $descQuery->bind_param("ss", $gene, $gene_symbol);
                    } else {
                        $descQuery = $conn->prepare("SELECT `Product.Description` FROM `$strain` 
                                         WHERE CycID = ? LIMIT 1");
                        $descQuery->bind_param("s", $gene);
                    }

                    $descQuery->execute();
                    $descRes = $descQuery->get_result();
                    if ($descRes->num_rows > 0) {
                        $descRow = $descRes->fetch_assoc();
                        $description = $descRow['Product.Description'];
                    }
                    $descQuery->close();
                }
            }


            // Check ARS significance
// --- Check significance across all models ---
// --- Check significance across all models dynamically ---
            $models = ['ARS', 'JTK', 'LS', 'meta2d'];
            $is_significant = false;

            // ✅ Identify which identifier columns are present in this table
            $possible_cols = ['CycID', 'Gene.Name.or.Symbol', 'alias', 'KEGG', 'HMDB'];
            $cols_res = $conn->query("SHOW COLUMNS FROM `$strain`");
            $cols = [];
            while ($r = $cols_res->fetch_assoc())
                $cols[] = $r['Field'];
            $found_cols = array_intersect($possible_cols, $cols);
            if (empty($found_cols))
                $found_cols = ['CycID']; // fallback default
        
            // --- Build dynamic WHERE clause for this strain ---
            $conditions = [];
            foreach ($found_cols as $c) {
                // 🧠 Add filters to skip rows where the field is empty, NA, or null
                $conditions[] = "(
        (`$c` = ? OR FIND_IN_SET(?, `$c`))
        AND `$c` IS NOT NULL
        AND `$c` != ''
        AND `$c` NOT IN ('NA', 'N/A', 'NaN', 'na', 'nan')
    )";
            }
            $where_clause = implode(' OR ', $conditions);
            $paramCount = count($found_cols) * 2;
            $types = str_repeat('s', $paramCount);
            $params = array_fill(0, $paramCount, $gene);

            // --- Check significance dynamically (without assuming CycID exists) ---
            foreach ($models as $model) {
                $p_col = "{$model}_pvalue";
                // Skip model if this column doesn't exist in this table
                if (!in_array($p_col, $cols))
                    continue;

                $sql = "SELECT `$p_col` FROM `$strain` WHERE $where_clause LIMIT 1";
                $checkStmt = $conn->prepare($sql);
                if (!$checkStmt)
                    continue;

                $bind_names = [$types];
                foreach ($params as $i => $val)
                    $bind_names[] = &$params[$i];
                call_user_func_array([$checkStmt, 'bind_param'], $bind_names);

                $checkStmt->execute();
                $checkRes = $checkStmt->get_result();
                if ($checkRes->num_rows > 0) {
                    $r = $checkRes->fetch_assoc();
                    if (!empty($r[$p_col]) && (float) $r[$p_col] < $threshold) {
                        $is_significant = true;
                        $checkStmt->close();
                        break;
                    }
                }
                $checkStmt->close();
            }

            // --- Fetch description + metadata per dataset safely ---
            $description_for_strain = 'N/A';
            $organism = $omics_type = $reference = 'N/A';

            // --- Determine the actual CycID used in this dataset ---
            $actual_gene_id = $gene;
            if (isset($result) && $result->num_rows > 0) {
                $first_row = $result->fetch_assoc();
                if (!empty($first_row['CycID'])) {
                    $actual_gene_id = $first_row['CycID'];
                }
                $result->data_seek(0);
            }

            // --- Fetch Product.Description (flexibly, skipping NA/empty) ---
            if (in_array('Product.Description', $cols)) {
                $conditions = [];
                foreach ($found_cols as $c) {
                    $conditions[] = "(
            (`$c` = ? OR FIND_IN_SET(?, `$c`))
            AND `$c` IS NOT NULL
            AND `$c` != ''
            AND `$c` NOT IN ('NA', 'N/A', 'NaN', 'na', 'nan')
        )";
                }
                $where_clause = implode(' OR ', $conditions);
                $paramCount = count($found_cols) * 2;
                $types = str_repeat('s', $paramCount);
                $params = array_fill(0, $paramCount, $actual_gene_id);

                $sql = "SELECT `Product.Description` FROM `$strain` WHERE $where_clause LIMIT 1";
                $descStmt = $conn->prepare($sql);
                if ($descStmt) {
                    $bind_names = [$types];
                    foreach ($params as $i => $val)
                        $bind_names[] = &$params[$i];
                    call_user_func_array([$descStmt, 'bind_param'], $bind_names);
                    $descStmt->execute();
                    $descRes = $descStmt->get_result();
                    if ($descRes->num_rows > 0) {
                        $descRow = $descRes->fetch_assoc();
                        if (!empty($descRow['Product.Description']) && !in_array(strtoupper(trim($descRow['Product.Description'])), ['NA', 'N/A', 'NAN', ''])) {
                            $description_for_strain = $descRow['Product.Description'];
                        }
                    }
                    $descStmt->close();
                }
            }

            // --- Fetch all metadata from search table for relevant genes ---
// --- Fetch all metadata from search table for relevant genes ---
            $searchMeta = [];
            if ($conn->query("SHOW TABLES LIKE 'search'")->num_rows > 0) {

                // 🟢 Fetch only relevant metadata for this gene (and aliases)
                $metaStmt = $conn->prepare("
        SELECT 
            TRIM(LOWER(`Gene name`)) AS gene_name,
            TRIM(LOWER(REPLACE(REPLACE(`Experiment condition`, '_', ''), ' ', ''))) AS exp_norm,
            Organism, `Omics type`, `Experiment condition`, Datasets
        FROM search
        WHERE `Gene name` IN (?, ?, ?)
    ");
                $metaStmt->bind_param("sss", $actual_gene_id, $gene, $original_gene);
                $metaStmt->execute();
                $metaRes = $metaStmt->get_result();

                while ($row = $metaRes->fetch_assoc()) {
                    $gene_key = $row['gene_name'];
                    $exp_key = $row['exp_norm'];
                    $searchMeta[$gene_key][$exp_key] = [
                        'organism' => $row['Organism'] ?: 'N/A',
                        'omics_type' => $row['Omics type'] ?: 'N/A',
                        'reference' => $row['Datasets'] ?: 'N/A',
                        'condition' => $row['Experiment condition'] ?: 'N/A'
                    ];
                }
                $metaStmt->close();
            }

            // --- Normalize current strain name for matching ---
            $strain_key = strtolower(str_replace(['_', ' '], '', $strain));
            $gene_key = strtolower(trim($actual_gene_id ?: $gene ?: $original_gene));

            // --- Try to match metadata ---
            $organism = $omics_type = $reference = 'N/A';
            if (isset($searchMeta[$gene_key])) {
                if (isset($searchMeta[$gene_key][$strain_key])) {
                    $meta = $searchMeta[$gene_key][$strain_key];
                    $organism = $meta['organism'];
                    $omics_type = $meta['omics_type'];
                    $reference = $meta['reference'];
                } else {
                    // fallback: pick first available metadata for the gene
                    $first_meta = reset($searchMeta[$gene_key]);
                    $organism = $first_meta['organism'];
                    $omics_type = $first_meta['omics_type'];
                    $reference = $first_meta['reference'];
                }
            }

            $resultsSummary[] = [
                "gene" => $actual_gene_id ?: 'N/A',
                "description" => $description_for_strain ?: 'N/A',
                "strain" => $strain ?: 'N/A',
                "organism" => $organism,
                "omics_type" => $omics_type,
                "reference" => $reference,
                "significant" => $is_significant
            ];

            // Dynamic time points
            $time_cols = [];
            $colResult = $conn->query("SHOW COLUMNS FROM `$strain`");
            while ($col = $colResult->fetch_assoc()) {
                if (is_numeric($col['Field']))
                    $time_cols[] = $col['Field'];
            }
            sort($time_cols, SORT_NUMERIC);

            // Raw data table
            $cols_str = "`" . implode("`,`", $time_cols) . "`";
            $stmt2 = $conn->prepare("SELECT CycID, $cols_str 
                         FROM `$strain` 
                         WHERE CycID = ? OR FIND_IN_SET(?, CycID)");
            $stmt2->bind_param("ss", $actual_gene_id, $actual_gene_id);

            $stmt2->execute();
            $res2 = $stmt2->get_result();

            if ($res2->num_rows > 0) {
                $row = $res2->fetch_assoc();
                $table2HTML[$strain] = "<h4>Time Points for $strain</h4><table class='data-table' id='table2-$strain'><tr><th>CycID</th>";
                foreach ($time_cols as $t) {
                    $table2HTML[$strain] .= "<th>$t</th>";
                    $rawDataPoints[$strain][] = ["x" => (float) $t, "y" => (float) $row[$t]];
                }
                $table2HTML[$strain] .= "</tr><tr><td>{$row['CycID']}</td>";
                foreach ($time_cols as $t)
                    $table2HTML[$strain] .= "<td>{$row[$t]}</td>";
                $table2HTML[$strain] .= "</tr></table>";
            }

            // Results table
            $models = ['ARS', 'JTK', 'LS', 'meta2d'];

            $table1HTML[$strain] = "
<div class='button-container' style='margin-bottom:10px; text-align:center;'>
    <button onclick=\"downloadTableCSV('table1-$strain')\">Download CSV</button>
    <button onclick=\"downloadTableCSV('table2-$strain')\">Download Time Point Table</button>
</div>
";
            $table1HTML[$strain] .= "<table class='data-table' id='table1-$strain'><tr>
    <th>CycID</th><th>Model</th><th>Amplitude</th><th>pvalue</th><th>qvalue</th><th>Period</th><th>Phase</th></tr>";

            $result->data_seek(0);
            while ($row = $result->fetch_assoc()) {
                $lower = array_change_key_case($row, CASE_LOWER);

                foreach ($models as $model) {
                    $amp_col = ($model === 'meta2d') ? 'meta2d_AMP' : "{$model}_amplitude";
                    $phase_col = ($model === 'meta2d') ? 'meta2d_phase' : "{$model}_adjphase";
                    $period_col = "{$model}_period";
                    $p_col = "{$model}_pvalue";
                    $q_col = "{$model}_BH.Q";

                    // ✅ Check if all columns exist
                    if (
                        isset($lower[strtolower($amp_col)]) &&
                        isset($lower[strtolower($p_col)]) &&
                        isset($lower[strtolower($q_col)]) &&
                        isset($lower[strtolower($period_col)]) &&
                        isset($lower[strtolower($phase_col)])


                    ) {
                        $amplitude = is_numeric($row[$amp_col]) ? number_format((float) $row[$amp_col], 3) : $row[$amp_col];
                        $pvalue = is_numeric($row[$p_col]) ? number_format((float) $row[$p_col], 3) : $row[$p_col];
                        $qvalue = is_numeric($row[$q_col]) ? number_format((float) $row[$q_col], 3) : $row[$q_col];
                        $period = is_numeric($row[$period_col]) ? number_format((float) $row[$period_col], 3) : $row[$period_col];
                        $phase = is_numeric($row[$phase_col]) ? number_format((float) $row[$phase_col], 3) : $row[$phase_col];

                        $table1HTML[$strain] .= "
                <tr>
                    <td>{$row['CycID']}</td>
                    <td><a href='#' class='model-link' data-strain='{$strain}' data-model='{$model}'>{$model}</a></td>
                    <td data-raw='{$row[$amp_col]}'>{$amplitude}</td>
                    <td data-raw='{$row[$p_col]}'>{$pvalue}</td>
                    <td data-raw='{$row[$q_col]}'>{$qvalue}</td>
                    <td data-raw='{$row[$period_col]}'>{$period}</td>
                    <td data-raw='{$row[$phase_col]}'>{$phase}</td>
                </tr>
            ";
                    }
                }
            }
            $table1HTML[$strain] .= "</table>";

            // Fitted curves
            $rawPoints = $rawDataPoints[$strain] ?? [];
            $n = count($rawPoints);
            if ($n > 0) {
                $sumX = $sumY = $sumXY = $sumX2 = 0;
                foreach ($rawPoints as $p) {
                    $x = $p['x'];
                    $y = $p['y'];
                    $sumX += $x;
                    $sumY += $y;
                    $sumXY += $x * $y;
                    $sumX2 += $x * $x;
                }
                $m = ($n * $sumXY - $sumX * $sumY) / ($n * $sumX2 - $sumX * $sumX);
                $baseline = ($sumY - $m * $sumX) / $n;

                foreach ($models as $model) {
                    $amp_col = ($model === 'meta2d') ? 'meta2d_AMP' : "{$model}_amplitude";
                    $phase_col = ($model === 'meta2d') ? 'meta2d_phase' : "{$model}_adjphase";
                    $period_col = "{$model}_period";

                    // ✅ Check if columns exist in table
                    $colsExist = $conn->query("SHOW COLUMNS FROM `$strain` LIKE '$amp_col'")->num_rows > 0 &&
                        $conn->query("SHOW COLUMNS FROM `$strain` LIKE '$phase_col'")->num_rows > 0 &&
                        $conn->query("SHOW COLUMNS FROM `$strain` LIKE '$period_col'")->num_rows > 0;

                    if (!$colsExist)
                        continue; // Skip missing models safely
        
                    $stmt3 = $conn->prepare("SELECT $amp_col, $phase_col, $period_col
                         FROM `$strain`
                         WHERE CycID = ? OR FIND_IN_SET(?, CycID)");
                    $stmt3->bind_param("ss", $actual_gene_id, $actual_gene_id);

                    $stmt3->execute();
                    $res3 = $stmt3->get_result();

                    if ($res3 && $res3->num_rows > 0) {
                        $r = $res3->fetch_assoc();

                        // ✅ Only if all three values exist and are numeric
                        if (
                            isset($r[$amp_col], $r[$phase_col], $r[$period_col]) &&
                            is_numeric($r[$amp_col]) &&
                            is_numeric($r[$phase_col]) &&
                            is_numeric($r[$period_col])
                        ) {
                            $A = (float) $r[$amp_col];
                            $P = (float) $r[$phase_col];
                            $T = (float) $r[$period_col];

                            if ($T > 0) {
                                $omega = 2 * M_PI / $T;
                                $fittedDataPoints[$strain][$model] = [];

                                foreach ($time_cols as $t) {
                                    $x = (float) $t;
                                    $y = $baseline + $m * $x + $A * cos($omega * ($x - $P));
                                    $fittedDataPoints[$strain][$model][] = ["x" => $x, "y" => $y];
                                }
                            }
                        }
                    }
                    if (isset($stmt3))
                        $stmt3->close();
                }
            }
        }

        // --- STEP: Fetch drug and virulence factor data for the given gene ---
        $drugData = [];
        $viralData = [];

        // 1️⃣ Fetch Gene IDs and Drugs from drug_interactions
        if ($conn->query("SHOW TABLES LIKE 'drug_interactions'")->num_rows > 0) {
            $drugStmt = $conn->prepare("SELECT DISTINCT mapped, drug FROM drug_interactions WHERE mapped = ?");
            $drugStmt->bind_param("s", $gene);
            $drugStmt->execute();
            $drugRes = $drugStmt->get_result();
            while ($r = $drugRes->fetch_assoc()) {
                $gid = $r['mapped'] ?: $gene;
                if (!isset($drugData[$gid]))
                    $drugData[$gid] = [];
                if (!empty($r['drug'])) {
                    $drugs = array_map('trim', explode(',', $r['drug']));
                    $drugData[$gid] = array_merge($drugData[$gid], $drugs);
                }
            }
            $drugStmt->close();
        }
        // 2️⃣ Also fetch from 'artemisinin' table if it exists
        if ($conn->query("SHOW TABLES LIKE 'artemisinin'")->num_rows > 0) {
            $artStmt = $conn->prepare("SELECT DISTINCT gene, drug FROM artemisinin WHERE gene = ?");
            $artStmt->bind_param("s", $gene);
            $artStmt->execute();
            $artRes = $artStmt->get_result();

            while ($r = $artRes->fetch_assoc()) {
                $gid = $r['gene'] ?: $gene;
                if (!isset($drugData[$gid]))
                    $drugData[$gid] = [];
                if (!empty($r['drug'])) {
                    $drugs = array_map('trim', explode(',', $r['drug']));
                    $drugData[$gid] = array_merge($drugData[$gid], $drugs);
                }
            }
            $artStmt->close();
        }

        // 2️⃣ Fetch virulence factors from viral, viral_pf, viral_pvx (if they exist)
        $viralTables = ['viral_pf', 'viral_pvx'];
        foreach ($viralTables as $vt) {
            if ($conn->query("SHOW TABLES LIKE '$vt'")->num_rows === 0)
                continue;

            $vfStmt = $conn->prepare("SELECT `Gene ID`, `Family` FROM `$vt` WHERE `Gene ID` = ?");
            $vfStmt->bind_param("s", $gene);
            $vfStmt->execute();
            $vfRes = $vfStmt->get_result();
            while ($r = $vfRes->fetch_assoc()) {
                $gid = $r['Gene ID'] ?: $gene;
                if (!isset($viralData[$gid]))
                    $viralData[$gid] = [];
                if (!empty($r['Family'])) {
                    $factors = array_map('trim', explode(',', $r['Family']));
                    $viralData[$gid] = array_merge($viralData[$gid], $factors);
                }
            }
            $vfStmt->close();
        }

        // 3️⃣ Merge Gene IDs across both sources
        $allGeneIDs = array_unique(array_merge(array_keys($drugData), array_keys($viralData)));


        $conn->close();
        if (!$gene_found)
            die("<p style='color:red;text-align:center;'>Query <strong>" . htmlspecialchars($gene) . "</strong> not found.</p>");
        ?>

        <style>
            body {
                font-family: Arial, sans-serif;
            }

            .data-table {
                border-collapse: collapse;
                width: 60%;
                margin: 15px auto;
            }

            .data-table th,
            .data-table td {
                border: 1px solid #ccc;
                padding: 6px;
                text-align: center;
            }

            .data-table th {
                background: #ffa200;
                color: white;
            }

            button {
                background: #291d54;
                color: white;
                padding: 6px 12px;
                border: none;
                border-radius: 4px;
                margin-bottom: 6px;
                cursor: pointer;
            }

            button:hover {
                background: #4a357a;
            }

            .strain-section {
                display: none;
                margin-top: 20px;
            }

            h2 {
                text-align: center;
                color: #291d54;
            }

            .desc {
                text-align: center;
                font-style: italic;
                color: #444;
                margin-bottom: 20px;
            }

            .sig-link {
                color: #008cba;
                text-decoration: underline;
                cursor: pointer;
            }

            .sig-text {
                color: #999;
            }


            /* --- Responsive Adjustments --- */
            @media (max-width: 1200px) {
                .data-table {
                    width: 70%;
                }

                .chart-box {
                    width: 60%;
                }
            }

            @media (max-width: 900px) {
                .data-table {
                    width: 80%;
                    font-size: 13px;
                }

                .chart-box {
                    width: 70%;
                    height: 350px;
                }
            }

            @media (max-width: 600px) {
                .data-table {
                    width: 95%;
                    font-size: 12px;
                }

                .chart-box {
                    width: 90%;
                    height: 300px;
                }

                button {
                    width: 90%;
                    margin: 6px auto;
                    display: block;
                }
            }
        </style>

        <h2 style="text-align:center;">
            Searched query: <?= htmlspecialchars($original_gene) ?>
        </h2>


        <!-- <p class="desc"><?php echo $description ? htmlspecialchars($description) : "No description available."; ?></p> -->

        <!-- Summary Table -->
        <!-- <h3 style="text-align:center;">Summary</h3> -->
        <table class="data-table" style="width:80%;">
            <tr>
                <th>S.No</th>
                <th>CycID</th>
                <th>Description</th>
                <th>Dataset</th>
                <th>Organism</th>
                <th>Omics Type</th>
                <th>Reference</th>
                <th>Rhythmicity</th>
            </tr>
            <?php
            $serial = 1;
            foreach ($resultsSummary as $r) {
                echo "<tr>";
                echo "<td>" . $serial++ . "</td>";
                // Show CycID (GeneSymbol) if available and different
                $cycid_display = htmlspecialchars($r['gene']);
                if (!empty($gene_symbol) && strtolower($gene_symbol) !== 'n/a' && strtolower($gene_symbol) !== strtolower($r['gene'])) {
                    $cycid_display .= " (" . htmlspecialchars($gene_symbol) . ")";
                }
                echo "<td>$cycid_display</td>";

                echo "<td>" . htmlspecialchars($r['description']) . "</td>";
                echo "<td>" . htmlspecialchars($r['strain']) . "</td>";
                echo "<td>" . htmlspecialchars($r['organism']) . "</td>";
                echo "<td>" . htmlspecialchars($r['omics_type']) . "</td>";

                $reference = $r['reference'];

                $reference = html_entity_decode($reference, ENT_QUOTES, 'UTF-8');

                // Detect PMID pattern and make clickable (handles spaces, &nbsp;, etc.)
                $reference = preg_replace_callback(
                    '/PMID[^0-9]*([0-9]{5,})/i',
                    function ($m) {
                        $pmid = $m[1];
                        return 'PMID: <a href="https://pubmed.ncbi.nlm.nih.gov/' . $pmid . '/" target="_blank" style="color:#0077cc; text-decoration:underline;">' . $pmid . '</a>';
                    },
                    $reference
                );

                // Output without escaping, so <a> tag renders
                echo "<td>$reference</td>";


                if ($r['significant']) {
                    echo "<td><span class='sig-link' data-strain='" . htmlspecialchars($r['strain']) . "'>Significant</span></td>";
                } else {
                    echo "<td><span class='sig-text'>Not significant</span></td>";
                }
                echo "</tr>";
            }
            ?>
        </table>



        <!-- Hidden sections for each dataset -->
        <!-- Hidden sections for each dataset (styled like strain-container) -->
        <?php
        foreach ($table1HTML as $strain => $tbl) {
            echo "<div id='section-$strain' class='strain-section strain-container' style='text-align:center; margin-bottom:40px;'>";

            // Chart placeholder - centered, larger and cleaner
            echo "<div id='chartContainer-$strain' style='height:500px;width:50%;margin: 0 auto 20px auto;'></div>";

            // Table 1 (model results)
            echo $table1HTML[$strain];

            // Download button for time point table
            // echo "<button onclick=\"downloadTableCSV('table2-$strain')\">Download Time Point Table</button>";
        
            // Keep raw data table hidden (for download only)
            if (isset($table2HTML[$strain])) {
                echo "<div style='display:none;'>" . $table2HTML[$strain] . "</div>";
            }

            echo "</div>";
        }
        ?>

        <?php
        // ✅ Show the table only if data exists
        if (!empty($allGeneIDs)) {
            echo "<h3 style='text-align:center; margin-top:40px;'>Associated Drugs and Virulence Factors</h3>";
            echo "<table class='data-table' style='width:70%;'>
            <tr>
                <th>Gene ID</th>
                <th>Drugs</th>
                <th>Virulence Factors</th>
            </tr>";

            foreach ($allGeneIDs as $gid) {
                $drugs = isset($drugData[$gid]) ? implode(', ', array_unique($drugData[$gid])) : '-';
                $factors = isset($viralData[$gid]) ? implode(', ', array_unique($viralData[$gid])) : '-';

                // Only display if either drugs or factors exist
                if ($drugs !== '-' || $factors !== '-') {
                    echo "<tr>
                    <td>" . htmlspecialchars($gid) . "</td>
                    <td>" . htmlspecialchars($drugs) . "</td>
                    <td>" . htmlspecialchars($factors) . "</td>
                </tr>";
                }
            }

            echo "</table>";
        }
        ?>



        <div id="charts-container" style="width: 60%; margin: auto; margin-bottom: 50px;"></div>

        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script>
            const rawData = <?php echo json_encode($rawDataPoints, JSON_NUMERIC_CHECK); ?>;
            const fittedData = <?php echo json_encode($fittedDataPoints, JSON_NUMERIC_CHECK); ?>;
            const charts = {};

            document.addEventListener("DOMContentLoaded", function () {

                // Create chart objects but DO NOT render yet
                for (const strain in rawData) {
                    const container = document.getElementById(`chartContainer-${strain}`);
                    container.style.width = "700px";    // or "600px", "40%", etc.
                    container.style.height = "500px";
                    container.style.margin = "0 auto 20px auto";
                    const series = [{
                        type: "line",
                        name: "Raw Data",
                        showInLegend: true,
                        legendText: "Raw Data",
                        lineDashType: "dot",
                        markerType: "circle",
                        markerSize: 6,
                        toolTipContent: "Time: {x}, Expr: {y}",
                        dataPoints: rawData[strain]
                    }];

                    if (fittedData[strain] && fittedData[strain]['ARS']) {
                        series.push({
                            type: "spline",
                            name: "ARS Fitted",
                            showInLegend: true,
                            legendText: "ARS Fitted Curve",
                            lineThickness: 2,
                            markerType: "none",
                            toolTipContent: "Time: {x}, Fitted: {y}",
                            dataPoints: fittedData[strain]['ARS']
                        });
                    }

                    charts[strain] = new CanvasJS.Chart(`chartContainer-${strain}`, {
                        animationEnabled: true,
                        title: { text: `${strain}` },
                        axisX: { title: "Time" },
                        axisY: { title: "Expression" },
                        legend: {
                            cursor: "pointer",
                            verticalAlign: "bottom",
                            horizontalAlign: "center",
                            fontSize: 14
                        },
                        data: series
                    });
                }

                // Render chart only when user clicks a significant dataset
                document.querySelectorAll(".sig-link").forEach(el => {
                    el.addEventListener("click", () => {
                        const s = el.dataset.strain;

                        // Hide all sections first
                        document.querySelectorAll(".strain-section").forEach(sec => sec.style.display = "none");

                        // Show selected section
                        const section = document.getElementById("section-" + s);
                        section.style.display = "block";

                        // Render chart fresh when visible
                        if (charts[s]) charts[s].render();

                        // Smooth scroll
                        window.scrollTo({
                            top: section.offsetTop - 20,
                            behavior: "smooth"
                        });
                    });
                });

                // Toggle models on table click
                document.querySelectorAll(".model-link").forEach(link => {
                    link.addEventListener("click", function (e) {
                        e.preventDefault();
                        const strain = this.getAttribute("data-strain");
                        const model = this.getAttribute("data-model");
                        const chart = charts[strain];

                        // Always keep raw data
                        chart.options.data = [{
                            type: "scatter",
                            name: "Raw Data",
                            showInLegend: true,
                            legendText: "Raw Data",
                            markerType: "circle",
                            markerSize: 6,
                            dataPoints: rawData[strain]
                        }];

                        // Add selected model’s fitted curve
                        if (fittedData[strain][model]) {
                            chart.options.data.push({
                                type: "spline",
                                name: `${model} Fitted`,
                                showInLegend: true,
                                legendText: `${model} Fitted Curve`,
                                lineThickness: 2,
                                markerType: "none",
                                dataPoints: fittedData[strain][model]
                            });
                        }

                        chart.render();
                    });
                });
            });
            // Click handler for showing strain sections
            document.querySelectorAll(".sig-link").forEach(el => {
                el.addEventListener("click", () => {
                    const s = el.dataset.strain;
                    document.querySelectorAll(".strain-section").forEach(sec => sec.style.display = "none");
                    document.getElementById("section-" + s).style.display = "block";
                    window.scrollTo({ top: document.getElementById("section-" + s).offsetTop - 20, behavior: "smooth" });
                });
            });


            // Download CSV
            function downloadTableCSV(tableId) {
                const table = document.getElementById(tableId);
                if (!table) { alert("Table not found"); return; }
                let csv = "";
                for (let r of table.rows) {
                    const row = [];
                    for (let c of r.cells) {
                        const raw = c.getAttribute("data-raw");
                        row.push('"' + (raw !== null ? raw : c.innerText) + '"');
                    }
                    csv += row.join(",") + "\n";
                }
                const a = document.createElement('a');
                a.href = 'data:text/csv;charset=utf-8,' + encodeURI(csv);
                a.download = tableId + "_data.csv";
                a.click();
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
                    <p style="font-size: 0.85em; font-style: italic; color: #aaa; margin: 4px 0 0 0;">Release version
                        1.0 &mdash; May 2026</p>

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