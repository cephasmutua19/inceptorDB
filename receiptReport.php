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
    <title>Receipt Report</title>
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
    <h2 class="text-center text-white">Receipt Report</h2>
</div>
<br>
<div class="container">
    <table class="table table-bordered table-striped table-responsive-sm">
                    <tr>
                        <th>Receipt Number</th>
                        <th>Receipt Date</th>
                        <th>Surname</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Course</th>
                        <th>Amount Paid</th>
                    </tr>
        <?php

        session_start();

        if($_SESSION['status']!="Active")
        {
            header("location:login.php");
        }

        ?>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "inceptorDB");
                    if (!$conn) {
                        die("Connection Failed: " . mysqli_connect_error());
                    }
                    //Removing SQL Injection
                    $rNumber = mysqli_real_escape_string($conn, $_POST['rNum']);
                    $sql = "SELECT * FROM receipt where receipt_num = '$rNumber'";
                    //Execute the query in $sql above
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) // If the table courses has data
                    {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $row ['receipt_num']; ?></td>
                                <td><?php echo $row ['receipt_date']; ?></td>
                                <td><?php echo $row ['surname']; ?></td>
                                <td><?php echo $row ['mid_name']; ?></td>
                                <td><?php echo $row ['last_name']; ?></td>
                                <td><?php echo $row ['course']; ?></td>
                                <td><?php echo $row ['paid']; ?></td>
                            </tr>
                            <?php
                        }
                    }
                    mysqli_close($conn);
                    ?>
                    <tr>
                        <td colspan="4" class="text-center">
                            <a href="searchReceipt.php" class="btn btn-outline-dark">Back To Search</a>
                        </td>
                    </tr>
                </table>
</div>
</body>
</html>
