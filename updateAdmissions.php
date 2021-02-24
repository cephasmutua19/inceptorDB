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
    <title>Admission Update Success</title>
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
    <h2 class="text-center text-white">Admission Update Success</h2>
</div>
<br>
<div class="container">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "inceptorDB");
    if (!$conn) {
        die("Database Connection Error" . mysqli_connect_error());
    }
    //Removing SQL Injection
    $admiNumU = mysqli_real_escape_string($conn, $_POST['admission_number']);
    $admiDateU = mysqli_real_escape_string($conn, $_POST['adm_date']);
    $admifNameU = mysqli_real_escape_string($conn, $_POST['fName']);
    $admimNameU = mysqli_real_escape_string($conn, $_POST['mName']);
    $admilNameU = mysqli_real_escape_string($conn, $_POST['lName']);
    $admiGenderU = mysqli_real_escape_string($conn, $_POST['gender']);
    $admiDobU = mysqli_real_escape_string($conn, $_POST['doBirth']);
    $admiPostU = mysqli_real_escape_string($conn, $_POST['pAddress']);
    $admiNxtU = mysqli_real_escape_string($conn, $_POST['nextKin']);
    $admiReltnU = mysqli_real_escape_string($conn, $_POST['relKin']);
    $admiKintelU = mysqli_real_escape_string($conn, $_POST['nokPhone']);
    $admiSchU = mysqli_real_escape_string($conn, $_POST['schAtt']);
    $admiYfromU = mysqli_real_escape_string($conn, $_POST['yearFro']);
    $admiYtoU = mysqli_real_escape_string($conn, $_POST['yearTo']);
    $admiMathsU = mysqli_real_escape_string($conn, $_POST['mathsG']);
    $admiEngU = mysqli_real_escape_string($conn, $_POST['englishG']);
    $admiOverallU = mysqli_real_escape_string($conn, $_POST['overallG']);
    $admiCourseU = mysqli_real_escape_string($conn, $_POST['course']);
    $admiChoiceU = mysqli_real_escape_string($conn, $_POST['roChoice']);
    $admiKnwhowU = mysqli_real_escape_string($conn, $_POST['knowHow']);

    $sql = "update admissions set admission_number ='$admiNumU',admission_date ='$admiDateU',surname ='$admifNameU',
                      mid_name ='$admimNameU',last_name ='$admilNameU',course ='$admiGenderU',bill ='$admiDobU',
                      bill ='$admiPostU',bill ='$admiNxtU',bill ='$admiReltnU',bill ='$admiKintelU',
                      bill ='$admiSchU',bill ='$admiYfromU',bill ='$admiYtoU',bill ='$admiMathsU',
                      bill ='$admiEngU',bill ='$admiOverallU',bill ='$admiCourseU',bill ='$admiChoiceU',
                      bill ='$admiKnwhowU' where admission_number ='$admiNumU'";

    if ($conn->query($sql) == true) {
        print "<p>Admission Successfull</p>";
        print "<a href='admissions.php' class='btn btn-primary'>Admission</a>";
    }
    else {
        print "<p>admission Not Successfull</p>";
        print "<a href='admissions.php' class='btn btn-danger'>Try Again</a>";
    }
    mysqli_close($conn)
    ?>
</div>
</body>
</html>
