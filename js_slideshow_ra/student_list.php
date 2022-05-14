<?php
include 'connect.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Attendance Percentage</th>
      <th scope="col">Marks</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  
  <tbody>
  <?php 
    $sql1 = "SELECT * FROM `student`";
    //$sql2 = "SELECT * FROM `atttendance`";
    $result1 = mysqli_query($con, $sql1);
    //$result2 = mysqli_query($con, $sql2);
    //$i=0;
    if($result1 ){
       while($row = mysqli_fetch_assoc($result1)){
        
       // $row2 = mysqli_fetch_assoc($result2);
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        //$attd = $row2['attendance'];
        
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td></td>
        <td></td>
        <td>    
             <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light" >Update</a></button>
             <button  class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"  class="text-light" >Delete</a></button>
         </td>
      </tr>';
     // $i++;
       }  
    }
    else{
        echo "error";
    }
  ?>
  </tbody>
</table>
    </div>

</body>
</html>