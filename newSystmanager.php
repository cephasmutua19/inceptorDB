<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>
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
    <h2 class="text-center text-white">Sign in</h2>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form method="post" action="add_sysmanager.php">
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <td>
                            <label for=""><b>First Name : </b></label>
                        </td>
                        <td>
                            <input type="text" name="fName" class="form-control" placeholder="* Your First Name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for=""><b>Middle Name : </b></label>
                        </td>
                        <td>
                            <input type="text" name="mName" class="form-control" placeholder="* Your Middle Name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for=""><b>Last Name : </b></label>
                        </td>
                        <td>
                            <input type="text" name="lName" class="form-control" placeholder="* Your Last Name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for=""><b>Username : </b></label>
                        </td>
                        <td>
                            <input type="text" name="uName" class="form-control" placeholder="* Your Username" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for=""><b>Password : </b></label>
                        </td>
                        <td>
                            <input type="password" name="passWd" class="form-control" placeholder="* Your Password" required>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <div class="buttons">
                                <button type="submit" name="submit" class="btn btn-success">Sign in</button>

                                &nbsp;
                                <a href="index.php" class="btn btn-primary">Login</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-sm-3"></div>

    </div>
</body>
</html>
