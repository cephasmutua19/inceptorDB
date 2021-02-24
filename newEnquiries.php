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
    <title>Enquiries Submission</title>
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
    <h2 class="text-center text-white">Enquiries submission</h2>
</div>
<br>
<div class="container">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "inceptorDB");
    if (!$conn) {
        die("Database Connection Error" . mysqli_connect_error());
    }
    //Removing SQL Injection

    $enquiryDate = mysqli_real_escape_string($conn, $_POST['enq_date']);
    $enquiryfName = mysqli_real_escape_string($conn, $_POST['fName']);
    $enquirymName = mysqli_real_escape_string($conn, $_POST['mName']);
    $enquirylName = mysqli_real_escape_string($conn, $_POST['lName']);
    $enquiryPhone = mysqli_real_escape_string($conn, $_POST['phone']);
    $enquiryCourse = mysqli_real_escape_string($conn, $_POST['course']);
    $enquiryComments = mysqli_real_escape_string($conn, $_POST['comments']);

    $sql = "INSERT INTO enquiries(enquiry_date,surname,mid_name,last_name,tel_number,course,comments)
values('$enquiryDate','$enquiryfName','$enquirymName','$enquirylName','$enquiryPhone','$enquiryCourse','$enquiryComments')";

    if ($conn->query($sql) == true) {
        print "<p>New Enquiry Added Successfully</p>";
        print "<a href='enquiries.php' class='btn btn-primary'>Add New Enquiry</a>";
    } else {
        print "<p>Enquiry Not Added</p>";
        print "<a href='enquiries.php' class='btn btn-danger'>Try Again</a>";
    }
    mysqli_close($conn)
    ?>
</div>
</body>
</html>
