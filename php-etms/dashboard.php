<?php

require 'authentication.php'; // admin authentication check 

// auth check
$user_id = $_SESSION['admin_id'];
$user_name = $_SESSION['name'];
$security_key = $_SESSION['security_key'];
if ($user_id == NULL || $security_key == NULL) {
    header('Location: index.php');
}

// check admin
$user_role = $_SESSION['user_role'];


if (isset($_GET['delete_task'])) {
    $action_id = $_GET['task_id'];

    $sql = "DELETE FROM task_info WHERE task_id = :id";
    $sent_po = "task-info.php";
    $obj_admin->delete_data_by_this_method($sql, $action_id, $sent_po);
}

if (isset($_POST['add_task_post'])) {
    $obj_admin->add_new_task($_POST);
}

// if (isset($POST['products'])) {
//   $obj_product->add_new_product($_POST);
//   echo $obj_product;
// }


$page_name = "Task_Info";
include("include/sidebar.php");
// include('ems_header.php');


?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="./chart.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://rawgit.com/gionkunz/chartist-js/master/dist/chartist.min.css">
<script src="https://rawgit.com/gionkunz/chartist-js/master/dist/chartist.min.js"></script>
<script>
    $(document).ready(function() {
        data = {
            'labels': [01, 02, 03, 04],

            'series': [
                [0, 2, 5, 6]
            ]
        };
        new Chartist.Line('.ct-chart', data, {
            showPoint: true,
        });
    });
</script>



<div class="row">
    <div class="col-md-12">
        <div class="well well-custom rounded-0">
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-8">



                </div>


            </div>
            <center>
                <h3>Dashboard</h3>
            </center>
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row">
                        <div class="container-fluid d-flex justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Total Tickets</div>
                                    <div class="card-body" style="height: 420px">
                                        <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                            </div>
                                        </div>
                                        <div class=" ct-chart ct-square chartjs-render-monitor" style="display: block; width: auto; height: 400px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?php

include("include/footer.php");



?>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script type="text/javascript">
    flatpickr('#t_start_time', {
        enableTime: true
    });

    flatpickr('#t_end_time', {
        enableTime: true
    });
</script>