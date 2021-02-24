<?php
$conn = mysqli_connect("localhost", "root", "", "inceptorDB");
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
//Removing SQL Injection
$billId = mysqli_real_escape_string($conn, $_POST['bIdU']);

$sql = "SELECT * FROM invoice WHERE bill_id='$billId'";
//Execute the query in $sql above
$result = $conn->query($sql);
if ($result->num_rows > 0) // If the table courses has data
{
    while ($row = $result->fetch_assoc()) {
        ?>
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
            <title>Billing/Invoice</title>
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
            <h2 class="text-center text-white">Billing/Invoice</h2>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form action="updateBilling.php" method="POST">
                        <table class="table table-striped table-responsive-sm">
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Billing ID :</b></label>
                                </td>
                                <td>
                                    <input type="text" name="bId" class="form-control" value="<?php echo $row['bill_id']?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Billing Date :</b></label>
                                </td>
                                <td>
                                    <input type="date" name="bdate" class="form-control" value="<?php echo $row['bill_date']?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Surname :</b></label>
                                </td>
                                <td>
                                    <input type="text" name="fName" class="form-control" value="<?php echo $row['surname']?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Middle Name :</b></label>
                                </td>
                                <td>
                                    <input type="text" name="mName" class="form-control" value="<?php echo $row['mid_name']?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Last Name :</b></label>
                                </td>
                                <td>
                                    <input type="text" name="lName" class="form-control" value="<?php echo $row['last_name']?>" required>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Course :</b></label>
                                </td>
                                <td>
                                    <select name="course" id="" class="form-control" value="<?php echo $row['course']?>" required>
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
                                    <label for=""><b>Amount to Pay :</b></label>
                                </td>
                                <td>
                                    <input type="text" name="pay" class="form-control" value="<?php echo $row['bill']?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" colspan="2">
                                    <button type="submit" class="btn btn-success">Update</button>
                                    &nbsp; &nbsp;
                                    <a href="billing.php" class="btn btn-secondary">Cancel Update</a>
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
    }
}
mysqli_close($conn);
?>
