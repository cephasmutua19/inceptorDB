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
    <h2 class="text-center text-white">Search Enquiries</h2>
</div>
<br>
<div class="container">
    <table class="table table-bordered table-striped table-responsive-sm">
                    <tr>
                        <th>Enquiry ID</th>
                        <th>Enquiry Date</th>
                        <th>Surname</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Telephone</th>
                        <th>Course</th>
                        <th>Comments</th>
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
                    $enquiryDate = mysqli_real_escape_string($conn, $_POST['edate']);
                    $sql = "SELECT * FROM enquiries where enquiry_date = '$enquiryDate'";
                    //Execute the query in $sql above
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) // If the table courses has data
                    {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $row ['enquiry_id']; ?></td>
                                <td><?php echo $row ['enquiry_date']; ?></td>
                                <td><?php echo $row ['surname']; ?></td>
                                <td><?php echo $row ['mid_name']; ?></td>
                                <td><?php echo $row ['last_name']; ?></td>
                                <td><?php echo $row ['tel_number']; ?></td>
                                <td><?php echo $row ['course']; ?></td>
                                <td><?php echo $row ['comments']; ?></td>
                            </tr>
                            <?php
                        }
                    }
                    mysqli_close($conn);
                    ?>
                    <tr>
                        <td colspan="4" class="text-center">
                            <a href="searchEnquiries.php" class="btn btn-outline-dark">Back To Search</a>
                        </td>
                    </tr>
                </table>
</div>
</body>
</html>
