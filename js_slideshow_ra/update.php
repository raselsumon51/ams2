 <?php
    include 'connect.php';
    $id = $_GET['updateid'];
    $sql = "select * from `student` where id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
        $name = $row['name'];
        $id = $row['id'];
        $email = $row['email'];
        $mobile = $row['mobile'];

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $sql = "update `student` set id=$id, name='$name', email='$email',mobile='$mobile' where id=$id";
        $result = mysqli_query($con, $sql);
        if($result){
            //echo "Data is Updated successfully";
            header('location:display.php');
        }
        else {
           die(mysqli_error($con));
        }

    }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Attendance Management System</title>
</head>

<body>
    <div class="container">
        <form method="post" action="">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" value="<?php echo $name ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" value="<?php echo $email ?>">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile" value="<?php echo $mobile?>">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password" value="<?php echo $password?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>