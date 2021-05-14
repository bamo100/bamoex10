<?php

include("Db_connect.php");

if(isset($_GET['edit_data'])){

  echo "<script> window.open('update.php','_self') </script>";
  
}

if (isset($_GET['delete_data'])) {

  echo "<script> window.open('delete.php','_self') </script>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Details</title>
</head>
<body>
    <table>
      <thead>
       <tr>
          <th>S/N</th>
          <th>Name</th>
          <th>Matric NO</th>
          <th>College</th>
          <th>Dept</th>
          <th>Level</th>
          <th>Date</th>
       </tr>
      </thead>

      <tbody>
        <?php
     
          $get_data = "select * from begin";

          $run_data = mysqli_query($con,$get_data);

          while($row_data = mysqli_fetch_array($run_data)) {
             
            $data_id = $row_data['id'];

            $data_name = $row_data['Name'];
    
            $data_matno = $row_data['Matric_NO'];
    
            $data_coll = $row_data['College'];
    
            $data_dept = $row_data['Dept'];
    
            $data_level = $row_data['Level'];

            $data_date = $row_data['Date'];

       ?>
        <tr>
          <td width="50"><?php echo $data_id; ?></td>
          <td width="100"><?php echo $data_name; ?></td>
          <td width="100"><?php echo $data_matno; ?></td>
          <td width="100"><?php echo $data_coll; ?></td>
          <td width="50"><?php echo $data_dept; ?></td>
          <td width="50"><?php echo $data_level; ?></td>
          <td width="50"><?php echo $data_date; ?></td>
          <td>
            <a href="update.php?edit_data=<?php echo $data_id ?>">
               <b>Edit Data</b>
            </a>
          </td>
          <td>
            <a href="delete.php?delete_data=<?php echo $data_id ?>">
              <b>Delete</b>
            </a>
          </td>
         
        </tr>
        <?php  } ?>
      </tbody>
    </table>
</body>
</html>