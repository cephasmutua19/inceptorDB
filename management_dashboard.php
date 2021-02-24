<?php

session_start();

if($_SESSION['status']!="Active")
{
    header("location:login.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Management System</title>
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
    <h2 class="text-center text-white">Management Dashboard</h2>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <!-- A vertical navbar -->
            <nav class="navbar">

                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="enquiries.php">Enquiries</a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="admissions.php">Admissions</a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="billing.php">Bill/Invoice</a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="receipt.php">Receipt</a>
                    </li>
                    <br>
                    <li class="nav-item">
                        <a class="nav-link btn btn-secondary" href="logout.php">Logout</a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="col-sm-10 " style="margin: auto; align-items: center; display: flex;">
            <div><img src="image/logolink.png" alt="logo" width="200em"></div>
            &nbsp; &nbsp;
            <div><h1><b>WELCOME</b></h1></div>
        </div>
    </div>
</div>
</body>
</html>
