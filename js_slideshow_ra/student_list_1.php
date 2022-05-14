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
      <h2 style="padding: 25px 0px;text-align:center;"> Total Classes and Student's Marks In Details</h2>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Total Present</th>
      <th scope="col">Total Absent</th>
      <th scope="col">Total Class</th>
      <th scope="col">Attendance Percentage</th>
      <th scope="col">Marks</th>
    </tr>
  </thead>
  
  <tbody>
  <?php 
    $sql1 = "SELECT * FROM `student` order by id asc";
    $result1 = mysqli_query($con, $sql1);

    $sql2 =  "SELECT COUNT(DISTINCT att_time) as cnt FROM `atttendance`";
    $result2 = mysqli_query($con, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
    

    
    
    if($result1 ){
       while($row = mysqli_fetch_assoc($result1)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $total_attd = $row2['cnt'];
        
        $sql3 = "SELECT COUNT(DISTINCT att_time) as cnt3 FROM `atttendance` WHERE `roll` = '$id'";
        $result3 = mysqli_query($con, $sql3);
        $row3 = mysqli_fetch_assoc($result3);
        $total_present = $row3['cnt3'];
        $attd_percentage = ($total_present/$total_attd)*100;
        if($attd_percentage >= 95)
            $marks = 8;
        else if($attd_percentage >= 90 && $attd_percentage <=94)
            $marks = 7;
        else if($attd_percentage >= 85 && $attd_percentage <=89)
            $marks = 6;
        else if($attd_percentage >= 80 && $attd_percentage <=84)
            $marks = 5;
        else if($attd_percentage >= 75 && $attd_percentage <=79)
            $marks = 4;
        else if($attd_percentage >= 70 && $attd_percentage <=74)
            $marks = 3;
        else if($attd_percentage >= 65 && $attd_percentage <=69)
            $marks = 2;
        else if($attd_percentage >= 60 && $attd_percentage <=64)
            $marks = 1;
        else
            $marks = 0;
        
        
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$total_present.'</td>
        <td>'.($total_attd - $total_present).'</td>
        <td>'.$total_attd.'</td>
        <td>'.$attd_percentage.'%</td>
        <td>'.$marks.'</td>
      </tr>';
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

<!-- <td>    
             <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light" >Update</a></button>
             <button  class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"  class="text-light" >Delete</a></button>
         </td> -->