<?php
$conn = mysqli_connect("localhost", "root", "", "cephasDB");
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
//Removing SQL Injection
$admiNum = mysqli_real_escape_string($conn, $_POST['admission_numberU']);
$sql = "SELECT * FROM admissions WHERE admission_number ='$admiNum'";
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
            <title>Admissions Update</title>
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
            <h2 class="text-center text-white">Admissions</h2>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form action="updateAdmissions.php" method="POST">
                        <table class="table table-striped table-responsive-sm">
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Admission No.:</b></label>
                                </td>
                                <td>
                                    <input type="text" name="admission_number" class="form-control" required
                                           value="<?php echo $row['admission_number'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Admission Date :</b></label>
                                </td>
                                <td>
                                    <input type="date" name="adm_date" class="form-control" required
                                           value="<?php echo $row['admission_date'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Surname :</b></label>
                                </td>
                                <td>
                                    <input type="text" name="fName" class="form-control"
                                           value="<?php echo $row['surname'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Middle Name :</b></label>
                                </td>
                                <td>
                                    <input type="text" name="mName" class="form-control" required
                                           value="<?php echo $row['mid_name'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Last Name :</b></label>
                                </td>
                                <td>
                                    <input type="text" name="lName" class="form-control" required
                                           value="<?php echo $row['last_name'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Gender :</b></label>
                                </td>
                                <td>
                                    Male : <input type="radio" name="gender" value="male" class="form-control" required
                                                  value="<?php echo $row['gender'] ?>"> &nbsp;
                                    <br>
                                    Female : <input type="radio" name="gender" value="female" class="form-control"
                                                    required
                                                    value="<?php echo $row['gender'] ?>">
                                    &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Date of Birth :</b></label>
                                </td>
                                <td>
                                    <input type="date" name="doBirth" class="form-control" required
                                           value="<?php echo $row['dob'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Postal Address :</b></label>
                                </td>
                                <td>
                                    <input type="text" name="pAddress" class="form-control" required
                                           value="<?php echo $row['p_address'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Next of Kin :</b></label>
                                </td>
                                <td>
                                    <input type="text" name="nextKin" class="form-control" required
                                           value="<?php echo $row['nok'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Relationship to Kin :</b></label>
                                </td>
                                <td>
                                    <input type="text" name="relKin" class="form-control" required
                                           value="<?php echo $row['relation'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Telephone (Kin) :</b></label>
                                </td>
                                <td>
                                    <input type="number" name="nokPhone" class="form-control" required
                                           value="<?php echo $row['nok_tel_num'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>School Attended :</b></label>
                                </td>
                                <td>
                                    <input type="text" name="schAtt" class="form-control" required
                                           value="<?php echo $row['school_att'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Year From :</b></label>
                                </td>
                                <td>
                                    <input type="date" name="yearFro" class="form-control" required
                                           value="<?php echo $row['year_fro'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Year To :</b></label>
                                </td>
                                <td>
                                    <input type="date" name="yearTo" class="form-control" required
                                           value="<?php echo $row['year_to'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Maths Grade :</b></label>
                                </td>
                                <td>
                                    <input type="text" name="mathsG" class="form-control" required
                                           value="<?php echo $row['math_g'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>English Grade :</b></label>
                                </td>
                                <td>
                                    <input type="text" name="englishG" class="form-control" required
                                           value="<?php echo $row['english_g'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Overall Grade :</b></label>
                                </td>
                                <td>
                                    <input type="text" name="overallG" class="form-control" required
                                           value="<?php echo $row['overall_g'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Course :</b></label>
                                </td>
                                <td>
                                    <select name="course" id="" class="form-control" required
                                            value="<?php echo $row['course'] ?>">
                                        <option value="Data Science">Data Science</option>
                                        <option value="Software Development">Software Development</option>
                                        <option value="Computer Repair and Maintenance">Computer Repair and
                                            Maintenance
                                        </option>
                                        <option value="Graphic Design">Graphic Design</option>
                                        <option value="Mobile Repair">Mobile Repair</option>
                                        <option value="Python">Python</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for=""><b>Reason of Choice :</b></label>
                                </td>
                                <td>
                                    <textarea name="roChoice" id="" cols="30" rows="10"
                                              value="<?php echo $row['r_o_choice'] ?>"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-left" colspan="2">
                                    <label for=""><b>How did you know about us? :</b></label>
                                    <br>
                                    <input type="checkbox" name="knowHow" value="<?php echo $row['know_how'] ?>">&nbsp
                                    Walk in
                                    <br>
                                    <input type="checkbox" name="knowHow" value="<?php echo $row['know_how'] ?>">&nbsp;Enquiry
                                    <br>
                                    <input type="checkbox" name="knowHow" value="<?php echo $row['know_how'] ?>">&nbsp;Social
                                    Media
                                    <br>
                                    <input type="checkbox" name="knowHow" value="<?php echo $row['know_how'] ?>">&nbsp;Student
                                    <br>
                                    <input type="checkbox" name="knowHow" value="<?php echo $row['know_how'] ?>">&nbsp;Sign
                                    Board
                                    <br>
                                    <input type="checkbox" name="knowHow" value="<?php echo $row['know_how'] ?>">&nbsp;Friend
                                    <br>
                                    <input type="checkbox" name="knowHow" value="<?php echo $row['know_how'] ?>">&nbsp;TV/Radio
                                    <br>
                                    <input type="checkbox" name="knowHow" value="<?php echo $row['know_how'] ?>">&nbsp;Marketing/Sales
                                    staff
                                    <br>
                                    <input type="checkbox" name="knowHow" value="<?php echo $row['know_how'] ?>">&nbsp;Others
                                    <br>

                                </td>
                            </tr>
                            <tr>
                                <td class="text-center" colspan="2">
                                    <button type="submit" class="btn btn-success">Update</button>
                                    &nbsp; &nbsp;
                                    <a href="admissions.php" class="btn btn-secondary">Cancel Update</a>
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