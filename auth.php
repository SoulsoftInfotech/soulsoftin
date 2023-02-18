<?php 
include('config.php');
include('mailfunction.php');

    if(isset($_GET['userid']))
    {
        // echo "Userid Recived";
        $userid=$_GET['userid'];

        $updatestatusquery="UPDATE `reg` SET `status`='1' WHERE `id`='$userid'";

        if(mysqli_query($con,$updatestatusquery))
        {
            //code for true
            echo "Success";
                //last id insert code to be added
            // if (sentemail("deshmukhrahul390@gmail.com","Sent by function")) 
            //     {
            //         echo "Success";
            //     }else {
            //         echo "falid";
            //     }

        }else
        {
            //code for false
            echo "Error TO Update";
        }





    }else{
        echo "Error to Recive Parameters";
    }

    ?>