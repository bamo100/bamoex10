<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title> School Rough</title>
</head>
<body>
   <h1 align="center";>HEllo BOSSMAN</h1>
   <h3 align="center"> Please fill in Your Details Below</h3>

   <form action="index.php" method="POST">
      
      <div class="form-row">
         <label> Student Name </label>
         <input type="text" name="nam" class="scl" required>
      </div>

      <div class="form-row">
         <label> Matric No </label>
         <input type="text" name="mtn" class="scl" required>
      </div>

      <div class="form-row">
         <label> College </label>
         <input type="text" name="col" class="scl" required>
      </div>    

      <div class="form-row">
         <label> Department </label>
         <input type="text" name="dpt" class="scl" required>
      </div>

      <div class="form-row">
         <label> Level </label>
         <input type="text" name="lel" class="scl" required>
      </div>

      <div class="form-row">
         <input type="submit" name="submit">
         <input type="submit" name="delete" value="Delete">
      </div>

      <!-- <div class="form-row">
        <button>
          <a href="update.php?update">Update Data</a>
        </button>
      </div> -->

   </form>
</body>
</html>
<?php 
    
    include("Db_connect.php");
            
   //  if(isset($_GET['update'])) {
   //    include("update.php");
   //  }
   // if(isset($_GET['edit_data'])) {
   //    include("update.php");
   //  }
    if(isset($_POST['submit'])) {

      $name = $_POST['nam'];

      $matric = $_POST['mtn'];

      $collg = $_POST['col'];

      $dept = $_POST['dpt'];

      $level = $_POST['lel'];

      $insert_cred = "insert into begin (Name,Matric_NO,college,Dept,Level,Date) values ('$name','$matric','$collg','$dept','$level', NOW())";

      $run_cred = mysqli_query($con,$insert_cred);

      if($run_cred) {

         echo "<script> alert('Your Data Has been Succcessfully Inserted') </script>";

         echo "<script> window.open('index.php','_self') </script>";
      }
    }
?>