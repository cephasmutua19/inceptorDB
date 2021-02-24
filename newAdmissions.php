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
    <title>Submitted Admissions</title>
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
    <h2 class="text-center text-white">Submitted Admissions</h2>
</div>
<br>
<div class="container">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "inceptorDB");
    if (!$conn) {
        die("Database Connection Error" . mysqli_connect_error());
    }
    //Removing SQL Injection

    $admiNum = mysqli_real_escape_string($conn, $_POST['admission_number']);
    $admiDate = mysqli_real_escape_string($conn, $_POST['adm_date']);
    $admifName = mysqli_real_escape_string($conn, $_POST['fName']);
    $admimName = mysqli_real_escape_string($conn, $_POST['mName']);
    $admilName = mysqli_real_escape_string($conn, $_POST['lName']);
    $admiGender = mysqli_real_escape_string($conn, $_POST['gender']);
    $admiDob = mysqli_real_escape_string($conn, $_POST['doBirth']);
    $admiPost = mysqli_real_escape_string($conn, $_POST['pAddress']);
    $admiNxt = mysqli_real_escape_string($conn, $_POST['nextKin']);
    $admiReltn = mysqli_real_escape_string($conn, $_POST['relKin']);
    $admiKintel = mysqli_real_escape_string($conn, $_POST['nokPhone']);
    $admiSch = mysqli_real_escape_string($conn, $_POST['schAtt']);
    $admiYfrom = mysqli_real_escape_string($conn, $_POST['yearFro']);
    $admiYto = mysqli_real_escape_string($conn, $_POST['yearTo']);
    $admiMaths = mysqli_real_escape_string($conn, $_POST['mathsG']);
    $admiEng = mysqli_real_escape_string($conn, $_POST['englishG']);
    $admiOverall = mysqli_real_escape_string($conn, $_POST['overallG']);
    $admiCourse = mysqli_real_escape_string($conn, $_POST['course']);
    $admiChoice = mysqli_real_escape_string($conn, $_POST['roChoice']);
    $admiKnwhow = mysqli_real_escape_string($conn, $_POST['knowHow']);

    $sql = "INSERT INTO admissions(admission_number,admission_date,surname,mid_name,last_name,gender,
                      dob,p_address,nok,relation,nok_tel_num,school_att,year_fro,year_to,math_g,english_g,
                      overall_g,course,r_o_choice,know_how) 
                      values('$admiNum','$admiDate','$admifName','$admimName','$admilName','$admiGender','$admiDob',
                             '$admiPost','$admiNxt','$admiReltn','$admiKintel','$admiSch','$admiYfrom',
                             '$admiYto','$admiMaths','$admiEng','$admiOverall','$admiCourse','$admiChoice',
                             '$admiKnwhow')";

    if ($conn->query($sql) == true) {
        print "<p>Admission is Successfull</p>";
        print "<a href='admissions.php' class='btn btn-primary'>Add New Admission</a>";
    } else {
        print "<p>Admission Not Successfull</p>";
        print "<a href='admissions.php' class='btn btn-danger'>Try Again</a>";
    }
    mysqli_close($conn)
    ?>
</div>
</body>
</html>
