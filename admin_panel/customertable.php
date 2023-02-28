<?php
include('../config.php');

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <title></title>
</head>

<body>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Customer Data</h1>




                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Product Data
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <!-- <table> -->
                            <thead>
                                <tr>
                                    <th>cust_id</th>
                                    <th>Full Name</th>
                                    <th>Mob</th>
                                    <th>Email</th>
                                    <th>Product</th>
                                    <th>Date of Purchase</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $selectnewusers = "SELECT * FROM `customer_data` WHERE 1";



                                // perform query against database in php
                                $result = mysqli_query($con, $selectnewusers);



                                // mysqli count rows in data base
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <th><?php echo $row['customer_id']; ?></th>
                                            <th><?php echo $row['fullName']; ?></th>
                                            <th><?php echo $row['mobNum']; ?></th>
                                            <th><?php echo $row['email']; ?></th>
                                            <th><?php echo $row['productName']; ?></th>
                                            <th><?php echo $row['date']; ?></th>


                                        </tr>


                                <?php
                                    }
                                } else {
                                }
                                // while($){}



                                ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

    </div>
</body>

</html>