<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquiry and Admission forms</title>
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
    <h2 class="text-center text-white">For Enquiry/Admission regestration fill below</h2>
</div>
<br>
<div class="">
    <h3 class="text-center text-danger"><u>Enquiries</u></h3>
</div>
<br>
<div class="">
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
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<hr>
<br>
<br>
<div class="">
    <div class="">
        <h3 class="text-center text-danger"><u>Admission Application</u></h3>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="newAdmissions.php" method="POST">
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Admission No.:</b></label>
                        </td>
                        <td>
                            <input type="text" name="admission_number" class="form-control"
                                   placeholder="<?php echo "IIT/" . (rand()); ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Admission Date :</b></label>
                        </td>
                        <td>
                            <input type="date" name="adm_date" class="form-control" required>
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
                            <label for=""><b>Gender :</b></label>
                        </td>
                        <td>
                            Male : <input type="radio" name="gender" value="male" class="form-control" required> &nbsp;
                            <br>
                            Female : <input type="radio" name="gender" value="female" class="form-control" required>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Date of Birth :</b></label>
                        </td>
                        <td>
                            <input type="date" name="doBirth" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Postal Address :</b></label>
                        </td>
                        <td>
                            <input type="text" name="pAddress" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Next of Kin :</b></label>
                        </td>
                        <td>
                            <input type="text" name="nextKin" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Relationship to Kin :</b></label>
                        </td>
                        <td>
                            <input type="text" name="relKin" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Telephone (Kin) :</b></label>
                        </td>
                        <td>
                            <input type="number" name="nokPhone" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>School Attended :</b></label>
                        </td>
                        <td>
                            <input type="text" name="schAtt" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Year From :</b></label>
                        </td>
                        <td>
                            <input type="date" name="yearFro" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Year To :</b></label>
                        </td>
                        <td>
                            <input type="date" name="yearTo" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Maths Grade :</b></label>
                        </td>
                        <td>
                            <input type="text" name="mathsG" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>English Grade :</b></label>
                        </td>
                        <td>
                            <input type="text" name="englishG" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Overall Grade :</b></label>
                        </td>
                        <td>
                            <input type="text" name="overallG" class="form-control" required>
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
                            <label for=""><b>Reason of Choice :</b></label>
                        </td>
                        <td>
                            <textarea name="roChoice" id="" cols="30" rows="10"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left" colspan="2">
                            <label for=""><b>How did you know about us? :</b></label>
                            <br>
                            <input type="checkbox" name="knowHow" value="Walk in">&nbsp Walk in
                            <br>
                            <input type="checkbox" name="knowHow" value="Enquiry">&nbsp;Enquiry
                            <br>
                            <input type="checkbox" name="knowHow" value="Social Media">&nbsp;Social Media
                            <br>
                            <input type="checkbox" name="knowHow" value="Student">&nbsp;Student
                            <br>
                            <input type="checkbox" name="knowHow" value="Sign Board">&nbsp;Sign Board
                            <br>
                            <input type="checkbox" name="knowHow" value="Friend">&nbsp;Friend
                            <br>
                            <input type="checkbox" name="knowHow" value="TV/Radio">&nbsp;TV/Radio
                            <br>
                            <input type="checkbox" name="knowHow" value="Marketing/Sales staff">&nbsp;Marketing/Sales
                            staff
                            <br>
                            <input type="checkbox" name="knowHow" value="Others">&nbsp;Others
                            <br>

                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="2">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<br>
<hr>
</body>
</html>
