<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PlasmoRhythm-Help</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">


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

  <!-- =======================================================
  * Template Name: Moderna
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
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

  .contact-card {
    width: 80% important !;
    /* or 70%, 60%, etc. depending on how narrow you want it */
    margin: 0 auto;
    /* center the card */
  }



  .contact-card {
    border-radius: 20px;
    /* Rounded corners */
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    /* Subtle shadow */
    overflow: hidden;
    background-color: #ffffff;
    /* White background */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .contact-card:hover {
    transform: translateY(-5px);
    /* Slight hover effect */
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    /* Enhanced shadow on hover */
  }

  .contact-card-header {
    background-color: #291d54;
    /* Dark Blue */
    color: #ffffff;
    /* White text */
    padding: 15px;
    text-align: center;
    font-size: 1.3rem;
    font-weight: 600;

  }

  .contact-card-body {
    padding: 20px;
    background-color: rgb(235, 235, 248);
    /* Light Lavender */
    color: #291d54;
    /* Dark text */
    font-size: 1.1rem;
    text-align: center;
  }

  .contact-card-body a {
    color: #003049;
    /* Link color */
    text-decoration: none;
    font-weight: 500;
  }

  .contact-card-body a:hover {
    text-decoration: underline;
  }

  .btn-primary {
    background-color: #4A7FA7;
    /* Consistent button color */
    border: none;
    padding: 10px 20px;
    font-size: 1rem;
    border-radius: 6px;
    transition: background 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #003049;
    /* Darker shade on hover */
  }

  /* Target only the form card body */
  .contact-card-body form {
    text-align: left;
  }
</style>

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
          <li><a href="drug.php"><span>Drug Interactors</span></a></li>


          <li><a href="download.html">Download</a></li>
          <li><a href="team.html">Team</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="help.php" class="active">Help</a></li>

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">


    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container position-relative">
        <h1>Help</h1>
        <!-- <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Team</li>
          </ol>
        </nav> -->
      </div>
    </div><!-- End Page Title -->


    <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    require 'PHPMailer/Exception.php';

    // Configuration
    $admin_email = "rankawatsourbh@gmail.com";
    $upload_dir = "upload/";

    // Create upload directory if it doesn't exist
    if (!is_dir($upload_dir)) {
      mkdir($upload_dir, 0777, true);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = htmlspecialchars($_POST["name"]);
      $email = htmlspecialchars($_POST["email"]);
      $pubmed = htmlspecialchars($_POST["pubmed"]);
      $institute = htmlspecialchars($_POST["institute"]);

      if (isset($_FILES["userfile"]) && $_FILES["userfile"]["error"] == 0) {
        $file_tmp = $_FILES["userfile"]["tmp_name"];
        $file_name = basename($_FILES["userfile"]["name"]);
        $file_path = $upload_dir . $file_name;

        if (move_uploaded_file($file_tmp, $file_path)) {
          $mail = new PHPMailer(true);

          try {
            // SMTP Settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'subashani0104@gmail.com';          // 🔁 use real Gmail
            $mail->Password = 'cckl iupg oblz hynl';       // 🔁 app password only
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Sender and Receiver
            $mail->setFrom('subashani0104@gmail.com', 'Database');  // use same as Username
            $mail->addAddress($admin_email);

            // Email Content
            $mail->isHTML(true);
            $mail->Subject = "New File Submission from $name";
            $mail->Body = "
                    <strong>Name:</strong> $name<br>
                    <strong>Email:</strong> $email<br>
                    <strong>Pubmed Link:</strong> $pubmed<br>
                    <strong>Institute:</strong> $institute<br>
                    <strong>File:</strong> $file_name
                ";

            $mail->send();
            echo "<p style='color:green; text-align: center;'>File uploaded successfully and admin has been notified.</p>";
          } catch (Exception $e) {
            echo "<p style='color:red;'>Email failed: {$mail->ErrorInfo}</p>";
          }
        } else {
          echo "<p style='color:red;'>File upload failed.</p>";
        }
      } else {
        echo "<p style='color:red;'>No file uploaded or an error occurred.</p>";
      }
    }
    ?>





    <!-- Contact Section -->
    <section class="contact-section py-5 bg-light text-dark">
      <div class="container">
        <div class="row justify-content-center align-items-start">


          <div class="col-md-6 mb-4">
            <div class="contact-card mx-auto">
              <div class="contact-card-header">
                <h4 class="mb-0" style="color: white;">Submit Your File</h4>
              </div>
              <div class="contact-card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" name="name" class="form-control" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Pubmed Link:</label>
                    <input type="text" name="pubmed" class="form-control" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Institute:</label>
                    <input type="text" name="institute" class="form-control" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Upload File:</label>
                    <input type="file" name="userfile" class="form-control" required>
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>



    <!-- Team Section -->
    <section id="team" class="team section" style="background-color: #f9f9f9; padding: 40px 20px;">
      <div class="container">
        <div class="row">
          <!-- Glossary Column -->
          <div class="col-md-6" style="padding: 20px;">
            <div
              style="background: #ffffff; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
              <h2 style="font-size: 24px; color: #333; margin-bottom: 15px; text-align: center;">Glossary</h2>
              <ul style="list-style: none; padding: 0; font-size: 16px; color: #555;">
                <li style="margin-bottom: 10px;">
                  <strong>Amplitude:</strong> The estimated height of an oscillation, defined as half the peak-to-trough
                  distance of a fitted rhythmic waveform, reflects the strength or robustness of the rhythmic signal.
                </li>
                <li style="margin-bottom: 10px;">
                  <strong>ARSER:</strong> A periodicity-detection algorithm combining autoregressive spectral estimation
                  with harmonic regression, well-suited for identifying both sinusoidal and non-sinusoidal rhythmic
                  profiles.
                </li>
                <li style="margin-bottom: 10px;">
                  <strong>False Discovery Rate (FDR):</strong> A statistical method to correct for multiple testing in
                  large datasets. It controls the proportion of false positives among significant features. In this
                  analysis, FDR values (adjusted via Benjamini-Hochberg) were calculated for all MetaCycle outputs to
                  rigorously filter for significant rhythmicity in host, parasite, and vector datasets.
                </li>
                <li style="margin-bottom: 10px;">
                  <strong>Intraerythrocytic Developmental Cycle (IDC):</strong> The asexual replication cycle of
                  Plasmodium parasites within host erythrocytes progresses through the Ring, Trophozoite, and Schizont
                  stages. The duration and synchrony of the IDC are species-dependent, typically approximating multiples
                  of 24 hours.
                </li>
                <li style="margin-bottom: 10px;">
                  <strong>JTK_CYCLE:</strong> A non-parametric, rank-based algorithm that identifies rhythmicity by
                  matching ordered data to idealized cosine reference curves, providing robustness to noise and outliers
                  in high-dimensional datasets.
                </li>
                <li style="margin-bottom: 10px;">
                  <strong>Lomb–Scargle (LS):</strong> A spectral method designed to detect periodicity in unevenly or
                  irregularly sampled time-series data by estimating power across a frequency spectrum.
                </li>
                <li style="margin-bottom: 10px;">
                  <strong>Meta2d:</strong> A MetaCycle function that integrates rhythmicity statistics from JTK_CYCLE,
                  Lomb–Scargle, and ARSER to generate unified estimates of period, phase, amplitude, and significance.
                </li>
                <li style="margin-bottom: 10px;">
                  <strong>MetaCycle:</strong> An R package for systematic periodicity analysis that incorporates ARSER,
                  JTK_CYCLE, and Lomb–Scargle methods to provide robust detection of rhythmic patterns across large
                  time-series datasets.
                </li>
                <li style="margin-bottom: 10px;">
                  <strong>Rhythmic Antimalarial Drug Interactions: </strong> Drug targets or interacting proteins in
                  <i>Plasmodium</i> that display rhythmic expression at the transcript level, influencing the timing and
                  efficacy of antimalarial therapies.
                </li>

                <li style="margin-bottom: 10px;">
                  <strong>Rhythmic Virulence Factors:</strong> Recurring, time-dependent changes in gene,
                  protein, or metabolite levels that follow circadian,
                  infradian, or ultradian patterns in <i>Plasmodium</i>, host, or vector systems.
                </li>
                <li style="margin-bottom: 10px;">
                  <strong>Molecular Rhythmicity:</strong> Recurring, time-dependent changes in gene, protein,
                  or metabolite levels that follow circadian, infradian, or
                  ultradian patterns in <i>Plasmodium</i>, host, or vector systems.
                </li>

                <li style="margin-bottom: 10px;">
                  <strong>Period:</strong> The time required for a rhythmic variable to complete one full oscillatory
                  cycle.
                </li>
                <li style="margin-bottom: 10px;">
                  <strong>Phase (Acrophase):</strong> The timing of the peak of a rhythmic signal within its cycle is
                  used to define the relative position of oscillatory events.
                </li>


              </ul>
            </div>
          </div>

          <!-- User Manual Column -->
          <div class="col-md-6" style="padding: 20px;">
            <div
              style="background: #ffffff; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); text-align: center;">
              <h2 style="font-size: 24px; color: #333; margin-bottom: 15px;">User Manual</h2>
              <p style="font-size: 16px; color: #555; margin-bottom: 20px;">
                Click the button below to download the User Manual:
              </p>
              <a href="Archive/User_Manual.pdf" target="_blank" class="btn btn-primary"
                style="display: inline-block; padding: 10px 20px; font-size: 16px; color: #fff; background-color: #2c1e56; border: none; border-radius: 5px; text-decoration: none; transition: background-color 0.3s ease;">
                Download User Manual
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
      // When the link is clicked, store the new favicon in localStorage
      document.querySelector('a').addEventListener('click', function (event) {
        // Store the new favicon URL in localStorage
        localStorage.setItem('favicon', 'assets/img/favicon.png');  // Set new favicon path
      });

      // Check localStorage and update favicon when the page loads
      window.onload = function () {
        var favicon = localStorage.getItem('favicon');
        if (favicon) {
          // Update the favicon if it's stored
          var link = document.getElementById('favicon');
          link.setAttribute('href', favicon);
        }
      };
    </script>
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