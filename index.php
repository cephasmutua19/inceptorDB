<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inceptor Management System</title>
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
    <h2 class="text-center text-white">Inceptor Management System : Login</h2>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="" method="POST">
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <td>
                            <label for=""><b>Username : </b></label>
                        </td>
                        <td>
                            <input type="text" name="uName" class="form-control" placeholder="* Your Username" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for=""><b>Password : </b></label>
                        </td>
                        <td>
                            <input type="password" name="passWd" value="" class="form-control" placeholder="* Your Password" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="2">
                            <button type="submit" name="submit" class="btn btn-success">Login</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="newSystmanager.php" class="btn btn-primary">Register</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>

<?php
session_start();

if(isset($_POST['submit'])){
    include 'db_connect.php';

    $username = mysqli_real_escape_string($db,$_POST['uName']);
    $password = mysqli_real_escape_string($db,$_POST['passWd']);

    $qry=mysqli_query($db,"SELECT * FROM sys_admin WHERE username='$username' AND passwd='$password'");
    $row = mysqli_fetch_array($qry,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($qry);

    // If result matched $username and $password, table row must be 1 row

    if($count == 1) {

        if (!empty($username) && !empty($password)){
            header("LOCATION:management_dashboard.php");
            $_SESSION['status']="Active";
        }

    }else
    {
        header("LOCATION:login_error.php");
    }
}
?>