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
    <title>Update Success</title>
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
    <h2 class="text-center text-white">Update Enquiry Success</h2>
</div>
<br>
<div class="container">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "inceptorDB");
    if (!$conn) {
        die("Database Connection Error" . mysqli_connect_error());
    }
    //Removing SQL Injection
    $billId = mysqli_real_escape_string($conn, $_POST['bId']);
    $billDate = mysqli_real_escape_string($conn, $_POST['bdate']);
    $fName = mysqli_real_escape_string($conn, $_POST['fName']);
    $mName = mysqli_real_escape_string($conn, $_POST['mName']);
    $lName = mysqli_real_escape_string($conn, $_POST['lName']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $pay = mysqli_real_escape_string($conn, $_POST['pay']);

    $sql = "update invoice set bill_id ='$billId',bill_date ='$billId',surname ='$fName',
                      mid_name ='$mName',last_name ='$lName',course ='$course',
                      bill ='$pay' where bill_id ='$billId'";

    if ($conn->query($sql) == true) {
        print "<p>Bill/Invoice Updated Successfully</p>";
        print "<a href='searchBilling.php' class='btn btn-primary'>Update Bill/Invoice</a>";
    }
    else {
        print "<p>Bill/Invoice Not Updated</p>";
        print "<a href='searchBilling.php' class='btn btn-danger'>Try Again</a>";
    }
    mysqli_close($conn)
    ?>
</div>
</body>
</html>
