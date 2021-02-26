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
    <title>Enquiries</title>
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
    <h2 class="text-center text-white">Enquiries</h2>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form class="form" action="newEnquiries.php" method="post">
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <td class="text-right">
                            <label for="" class="label"><b>Enquiry Date</b></label>
                        </td>
                        <td>
                            <input type="date" name="enq_date" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="" class="label"><b>Surname :</b></label>
                        </td>
                        <td>
                            <input type="text" name="fName" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="" class="label"><b>Middle Name :</b></label>
                        </td>
                        <td>
                            <input type="text" name="mName" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="" class="label"><b>Last Name :</b></label>
                        </td>
                        <td>
                            <input type="text" name="lName" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="" class="label"><b>Telephone :</b></label>
                        </td>
                        <td>
                            <input type="number" name="phone" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="" class="label"><b>Course :</b></label>
                        </td>
                        <td>
                            <select name="course" id="" class="form-control" required>
                                <option value="Data Science">Data Science</option>
                                <option value="Software Development">Software Development</option>
                                <option value="Computer Repair and Maintenance">Computer Repair and Maintenance</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Mobile Repair">Mobile Repair</option>
                                <option value="Python">Python</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="" class="label"><b>Comments :</b></label>
                        </td>
                        <td>
                            <textarea name="comments" id="" cols="30" rows="10"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="2">
                            <button type="submit" class="btn btn-success">Send</button>
                            &nbsp; &nbsp;
                            <a href="searchEnquiriesU.php" class="btn btn-outline-dark">Update</a>
                            &nbsp; &nbsp;
                            <a href="searchEnquiriesD.php" class="btn btn-danger">Delete</a>
                            &nbsp; &nbsp;
                            <a href="searchEnquiries.php" class="btn btn-outline-dark">Display</a>
                            &nbsp; &nbsp;
                            <a href="management_dashboard.php" class="btn btn-secondary">Main</a>
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
