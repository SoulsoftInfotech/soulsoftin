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




    <!-- form section  -->

    <div class="container">
        <h1 class="text-center text-6xl">Job/Hiring Form</h1>
    </div>
    <a href="./jobDelete.php"><button class="btn btn-primary my-4">
            Delete Job
        </button></a>
    <form class="border border-light p-5" action="./jobdata.php" method="POST">
        <div class="d-flex flex-col justify-center align-items-center">
            <div class="container mt-10 mb-4">
                <h1 class="text-center text-3xl">Job Details</h1>
            </div>
            <div class="col-7">
                <!-- First name -->
                <label>Job ID</label>
                <input type="text" id="fi" class="form-control mb-4" name="jobid" placeholder="Job ID" required />
            </div>
            <div class="col-7">
                <!-- First name -->
                <label>Job Role</label>
                <input type="text" id="fi" class="form-control mb-4" name="jobrole" placeholder="Job Role" required />
            </div>
            <div class="col-7">
                <!-- First name -->
                <label>Date</label>
                <input type="date" id="fi" class="form-control mb-4" name="date" placeholder="Job Role" required />
            </div>
            <div class="col-7">
                <!-- Last name -->
                <label>Job description</label>
                <textarea type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="" name="jobdesc" required>
                </textarea>
            </div>

            <!-- Sign up button -->
            <div class="align-items-center">
                <button class="btn btn-outline-primary my-4" type="submit">
                    Done
                </button>
            </div>
        </div>




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