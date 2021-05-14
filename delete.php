<?php
  
  include("Db_connect.php");

  if(isset($_GET['delete_data'])) {
     
    $delete_data_id = $_GET['delete_data']; 

    $delete_data  = "delete from begin where id='$delete_data_id'";

    $run_delete = mysqli_query($con,$delete_data);

    if($run_delete) {
       echo "<script> alert('Record Has been successfully deleted') </script>";
       echo "<script> window.open('view.php','_self') </script>";
    }
  }

?>