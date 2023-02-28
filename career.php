<?php
include('./config.php');

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

  <!-- Favicons -->
  <link href="assets/img/logopng.png" rel="icon" />
  <link href="assets/img/logopng.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <title>Document</title>
</head>

<body>

  <!-- navbar section -->
  <section>

    <header id="header" class="fixed-top bg-gradient-to-r from-fuchsia-50 to-sky-50">
      <div class="container d-flex align-items-center justify-content-between">
        <img src="./assets/img/logopng.png" alt="" class="logo" href="./index.html">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="./index.html#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="./index.html#about">About</a></li>

            <li class="dropdown">
              <a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="./possoftware.html">POS System Softwares</a></li>

                <li><a href="./webdev.html">Web Development</a></li>
                <li><a href="./appdev.html">App Developement</a></li>
                <li><a href="">SalesForce</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#"><span>Products</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="./product1.html">Account and Billing Software(Shopcare)</a></li>

                <li><a href="./prduct2.html">Agro mall and Herbs Software(Shetkari)</a></li>
                <li><a href="./prduct3.html">Billing,Inventory and Account Software(Kirana Bazar)</a></li>
                <li><a href="./prduct4.html">Pharmacy Billing Software (Pharma Chemist Vision)</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li><a class="nav-link scrollto" href="./career.php">Career</a></li>
            <li><a class="nav-link scrollto" href="https://www.youtube.com/@soulsoftinfotech2503">Tutorials</a></li>
            <li><a class="nav-link scrollto" href="./download.html">Downloads</a></li>
            <a href="./adminSign.html"><button type="button" class="btn btn-outline-primary btn-rounded btn-sm" data-mdb-ripple-color="dark">Sign In</button></a>


          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

      </div>
    </header>
  </section>



  <!-- hero section  -->
  <!-- <div class="row justify-content-center">
    <div class="col-xl-10">
      <div class="">
        

      </div>

    </div>
  </div> -->

  <div class="container">
    <div class="text-center mb-5">
      <h3 class="text-4xl">Jobs openning</h3>
    </div>


    <?php



    $selectjob = "SELECT * FROM `job_portal` WHERE `status`='0'";



    // perform query against database in php
    $result = mysqli_query($con, $selectjob);
    // echo $result;



    // mysqli count rows in data base
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="card mb-3">

          <div class="card-body">
            <div class="d-flex flex-column flex-lg-row text-center">
              <span class="avatar avatar-text rounded-3 me-4 mb-2">Job ID <br class="font-semibold"><?php echo $row['jobID']; ?></span>

              <div class="row flex-fill">
                <div class="col-5 text-center">
                  <h4 class="h5 font-semibold"><?php echo $row['jobRole']; ?></h4>
                  <span>Date before apply <br><?php echo $row['date']; ?></span>
                </div>
                <div class="col-4 py-2">
                  <p><?php echo $row['jobDesc']; ?></p>
                </div>
                <div class="col-3 text-lg-end">
                  <a href="./jo.php" class="btn btn-primary stretched-link">Apply</a>
                </div>
              </div>
            </div>
          </div>
        </div>

    <?php

      }
    }

    ?>






















    <!-- javascript file  -->


    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>