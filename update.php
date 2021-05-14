<?php
    include("Db_connect.php");
    
    if(isset($_GET['edit_data'])) {
       
        $edit_data_id = $_GET['edit_data'];

        $edit_data = "select * from begin where id='$edit_data_id'";

        $run_data = mysqli_query($con,$edit_data);

        $row_edit_data = mysqli_fetch_array($run_data);

        $data_id = $row_edit_data['id'];

        $data_name = $row_edit_data['Name'];

        $data_matno = $row_edit_data['Matric_NO'];

        $data_coll = $row_edit_data['College'];

        
        $data_dept = $row_edit_data['Dept'];

        $data_level = $row_edit_data['Level'];

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Edit School Rough</title>
</head>
<body>
   <h1 align="center">HEllo BOSSMAN</h1>
   <h3 align="center"> Edit Your Details</h3>

   <form action="" method="POST">
      
      <div class="form-row">
         <label> Student Name </label>
         <input type="text" name="nam" class="scl" required value="<?php echo $data_name;  ?>">
      </div>

      <div class="form-row">
         <label> Matric No </label>
         <input type="text" name="mtn" class="scl" required  value="<?php echo $data_matno;  ?>">
      </div>

      <div class="form-row">
         <label> College </label>
         <input type="text" name="col" class="scl" required value="<?php echo $data_coll;  ?>">
      </div>    

      <div class="form-row">
         <label> Department </label>
         <input type="text" name="dpt" class="scl" required value="<?php echo $data_dept;  ?>">
      </div>

      <div class="form-row">
         <label> Level </label>
         <input type="text" name="lel" class="scl" required value="<?php echo $data_level;  ?>">
      </div>

      <div class="form-row">
         <input type="submit" name="sub" value="Update">
      </div>

   </form>
</body>
</html>

<?php

  if(isset($_POST['sub'])) {

      $stud_name = $_POST['nam'];

      $stud_matric = $_POST['mtn'];

      $stud_collg = $_POST['col'];

      $stud_dept = $_POST['dpt'];

      $stud_level = $_POST['lel'];

      $update_stud = "update begin set
       Name='$stud_name',Matric_NO='$stud_matric',College='$stud_collg',
       Dept='$stud_dept',Level='$stud_level',Date=NOW() where id='$data_id'";
      

      $run_stud = mysqli_query($con,$update_stud);

      if($run_stud) {

         echo "<script> alert('Your Record Has been Succcessfully Updated Niggar') </script>";

         echo "<script> window.open('view.php','_self') </script>";
      }
      else{
         echo "Niggar You have got an issue";
      }

  }

?>