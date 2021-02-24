<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in Success</title>
    <link rel="icon" href="image/logolink.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="bootstrap/js/jquery-3.5.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<br>
<div class="logo">
    <img src="image/logoa.png" alt="logo" width="200rem" height="">
</div>
<br>
<div class="heading">
    <h2 class="text-center text-white">Sign in Success</h2>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <?php
            // Establishing a Database Connection in MySQL
            $conn = mysqli_connect("localhost", "root", "", "inceptorDB");
            if (!$conn) {
                die("Connection Error : " . mysqli_connect_error());
            }
            // Removing SQL Injections
            $fName = mysqli_real_escape_string($conn, $_POST['fName']);
            $mName = mysqli_real_escape_string($conn, $_POST['mName']);
            $lName = mysqli_real_escape_string($conn, $_POST['lName']);
            $username = mysqli_real_escape_string($conn,$_POST['uName']);
            $password = mysqli_real_escape_string($conn,$_POST['passWd']);
            // Using SQL Insert statement to post the data to the database
            $sql = "insert into sys_admin(fname,mname,lname,username,passwd)
values ('$fName','$mName','$lName','$username','$password')";
            if ($conn->query($sql) == true) {
                print "<p>New System Manager Added Successfully</p>";
                print "<a href='newSystmanager.php' class='btn btn-primary'>Add Another System Manager</a>";
            } else {
                print "<p>System Manager not Added</p>";
                print "<a href='newSystmanager.php' class='btn btn-danger'>Try Again</a>";
            }
            mysqli_close($conn);
            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>
