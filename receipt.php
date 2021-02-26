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
    <title>Receipt</title>
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
    <h2 class="text-center text-white">Receipt</h2>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="newReceipt.php" method="POST">
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Receipt Number :</b></label>
                        </td>
                        <td>
                            <input type="text" name="rNum" class="form-control"
                                   placeholder="<?php echo "No." . (rand());?> required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Receipt Date :</b></label>
                        </td>
                        <td>
                            <input type="date" name="rDate" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Surname :</b></label>
                        </td>
                        <td>
                            <input type="text" name="fName" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Middle Name :</b></label>
                        </td>
                        <td>
                            <input type="text" name="mName" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Last Name :</b></label>
                        </td>
                        <td>
                            <input type="text" name="lName" class="form-control" required>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-right">
                            <label for=""><b>Course :</b></label>
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
                            <label for=""><b>Amount Paid :</b></label>
                        </td>
                        <td>
                            <input type="text" name="paid" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="2">
                            <button type="submit" class="btn btn-success">Submit</button>
                            &nbsp; &nbsp;
                            <a href="searchReceiptU.php" class="btn btn-outline-dark">Update</a>
                            &nbsp; &nbsp;
                            <a href="searchReceiptD.php" class="btn btn-danger">Delete</a>
                            &nbsp; &nbsp;
                            <a href="searchReceipt.php" class="btn btn-outline-dark">Display</a>
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
