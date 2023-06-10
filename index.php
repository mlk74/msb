<?php

    include("includes/db_helper.php");
    if(isset($_SESSION["User_ID"])){
        echo '<script>location.href="New/theme/index.php";</script>';
    }

?>
<html>

<head>
    <title>Login</title>
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Parallax HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Meghna Template v1.0">

    <!-- theme meta -->
    <meta name="theme-name" content="meghna" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- CSS
		================================================== -->
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="New/theme/plugins/themefisher-font/style.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="New/theme/plugins/bootstrap/bootstrap.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="New/theme/plugins/animate-css/animate.css">
    <!-- Magnific popup css -->
    <link rel="stylesheet" href="New/theme/plugins/magnific-popup/dist/magnific-popup.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="New/theme/plugins/slick-carousel/slick.css">
    <link rel="stylesheet" href="New/theme/plugins/slick-carousel/slick-theme.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="New/theme/css/style.css">
    <style>
    .label-style {
        font-weight: 500;
    }

    input[type=text] {
        padding: 12px 20px;
        border: 3px solid #ccc;
        -webkit-transition: 0.5s;
        transition: 0.5s;
    }

    input {
        border: 1px solid #343a40 !important;
    }

    input[type=text]:focus {

        border: 3px solid red;
    }

    .form-control:focus-visible {
        color: white;
        background-color: #424040;


    }
    </style>
</head>

<body>

    <?php

        if(isset($_REQUEST['usersignin'])){
            $username = $_REQUEST["username"];
            $pass = $_REQUEST["password"];

            $sql ="SELECT * FROM users WHERE username= '$username' AND password = '$pass'";
            $result=mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_array($result);
                $_SESSION["User_ID"] = $row["id"];
                $_SESSION["User_NAME"] = $row["username"];
                $_SESSION["User_Email"] = $row["email"];
            //    kjsdfkpjweopijrfwie
                echo '<script>location.href="New/Theme/index.php";</script>';
                
            } else {
                echo '<script>location.href="index.php?signin=0";</script>';
            }
        }
    ?>

    <div class="container-fluid h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <div class="row justify-content-center">
                    <img src="assets/images/logo.png" class="logo" />
                </div>

                <h1 align="center">Login</h1>
                <br />
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
            if(isset($_REQUEST["signup"])){
                if($_REQUEST["signup"] == "2"){
        ?>
                <br />
                <div class="alert alert-danger" align="center">
                    <strong>Username already taken, try again</strong>
                </div>
                <br />
                <?php
                }
            }
        ?>
                <?php
            if(isset($_REQUEST["pass"])){
                if($_REQUEST["pass"] == "1"){
        ?>
                <br />
                <div class="alert alert-success" align="center">
                    <strong>Password Updated Successfully</strong>
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
                <form name="form" method="post">
                    <div class="form-group">
                        <label class="label-style">Username</label>
                        <input class="form-control form-control-lg" name="username" placeholder="Username"
                            type="username" required>
                    </div>
                    <div class="form-group">
                        <label class="label-style">Password</label>
                        <input class="form-control form-control-lg" name="password" placeholder="Password"
                            type="password" required>
                        <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="usersignin" class="btn btn-success btn-lg btn-block">Sign
                            In</button>
                    </div>
                </form>
                <p align="center">Don't have an account? <a href="signup.php">Sign Up</a></p>
                <p align="center"><a href="admin/index.php">Admin Login</a></p>
                <p align="center">All rights reserved © <?=date("Y");?></p>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>