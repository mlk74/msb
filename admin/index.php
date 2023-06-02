<?php

    include("includes/db_helper.php");
    if(isset($_SESSION["Admin_ID"])){
        echo '<script>location.href="home.php";</script>';
    }

?>
<html>
  <head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <style type="text/css">
        body{
            background: #000000;
            color: #ffffff;
        }
        .label-style{
            font-weight: 500;
        }
        input{
            border: 1px solid #343a40 !important;
        }
    </style>
  </head>
  <body>

    <?php

        if(isset($_REQUEST['adminsignin'])){
            $username = $_REQUEST["username"];
            $pass = $_REQUEST["password"];

            $sql ="SELECT * FROM admin_login WHERE username= '$username' AND password = '$pass'";
            $result=mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_array($result);
                $_SESSION["Admin_ID"] = $row["id"];
                $_SESSION["Admin_NAME"] = $row["username"];
                $_SESSION["Admin_Email"] = $row["email"];
               
                echo '<script>location.href="home.php";</script>';
                
            } else {
                echo '<script>location.href="index.php?signin=0";</script>';
            }
        }
    ?>
    
    <div class="container-fluid h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
        <?php
            if(isset($_REQUEST["signup"])){
                if($_REQUEST["signup"] == "1"){
        ?>
                    <br />
                    <div class="alert alert-success" align="center">
                        <strong>Registration Successful</strong>
                    </div>
                    <br />
        <?php
                }
            }
        ?>
        <?php
            if(isset($_REQUEST["signin"])){
                if($_REQUEST["signin"] == "0"){
        ?>
                    <br />
                    <div class="alert alert-danger" align="center">
                        <strong>Invalid Email or Password!</strong>
                    </div>
                    <br />
        <?php
                }
            }
        ?>
                <div class="row justify-content-center">
                    <img src="assets/images/logo.png" class="img-fluid" style="height: 200px;" />
                </div>
                <h3 align="center">Admin Sign In</h3>
                <br />
                <form name="form" method="post">
                    <div class="form-group">
                        <label class="label-style">Username</label>
                        <input class="form-control form-control-lg" name="username" placeholder="Username"  required>
                    </div>
                    <div class="form-group">
                        <label class="label-style">Password</label>
                        <input class="form-control form-control-lg" name="password" placeholder="Password" type="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="adminsignin" class="btn btn-success btn-lg btn-block">Sign In</button>
                    </div>
                </form>
                <p align="center"><a href="../index.php">User Login</a></p>
                <p align="center">All rights reserved © <?=date("Y");?></p>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
