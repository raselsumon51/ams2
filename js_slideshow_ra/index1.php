<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

</head>

<body >

  <div>
    <div class="header" id="body">
      <ul>
        <li><a href="index1.php">Home</a></li>
        <li><a href="student_list.php">Student List</a></li>
        <li><a href="user.php">Add Student</a></li>
        <li><a href="student_list_1.php">Marks</a></li>
        <li><a href="">Logout</a></li>
        
      </ul>
    </div>
  </div>

  <div class="slideshow-container">
    <?php
    $sql = "SELECT * FROM `student`";
    $result = mysqli_query($con, $sql);
    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $img_name = $row['img_file_name'];
    ?>
        <div  class="mySlides fade">
          <img onclick="myf(<?php echo $id ?>)" src="<?php echo "upload/" . $img_name ?>" width="400" height="300">
          <!-- <div  class="text"><button class="btn1">PRESENT</button></div> -->
        
            <p><i id ="check" class="fa fa-check" ></i></p>
         
          <div>
            <h3>Name : <?php echo $name ?></h3>
            <h3>Student Id : <?php echo $id ?></h3>

          </div>
        </div>
    <?php
      }
    }
    ?>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
  </div>
  <br>

  <script src="./js/script1.js">
  </script>
</body>

</html>