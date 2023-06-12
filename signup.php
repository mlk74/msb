<?php

    include("includes/controllerUserData.php");
    if(isset($_SESSION["User_ID"])){
        echo '<script>location.href="home.php";</script>';
    }

?>
<html>

<head>
    <title>Sign up</title>
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
        background-color: #424040;
        color: white;

    }
    </style>
</head>

<body>

    <?php
        

        if (isset($_REQUEST["usersignup"])) {
            $username = $_REQUEST["username"];
            $email = $_REQUEST["email"];
            $password = $_REQUEST["password"];
            $city = $_REQUEST["city"];
            $country = $_REQUEST["country"];
            $dateob = $_REQUEST["dateob"];
            $gender = $_REQUEST["gender"];
    
            $sql = "SELECT * FROM users WHERE username= '$username'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                echo '<script>location.href="index.php?signup=2";</script>';
            } else {
                $query = "INSERT INTO `users`(`username`, `email`, `password`, `city`, `country`, `dateob`, `gender`) VALUES ('$username','$email','$password','$city','$country','$dateob','$gender')";
                if (mysqli_query($conn, $query)) {
                    echo '<script>location.href="index.php?signup=1";</script>';
                }
            }
        }
    ?>

    <div class="container-fluid h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <h3 align="center">User Sign Up</h3>
                <br />
                <form name="form" method="post">
                    <div class="form-group">
                        <label class="label-style">Username*</label>
                        <input class="form-control form-control-lg" name="username" placeholder="Username" type="text"
                            required>
                    </div>
                    <div class="form-group">
                        <label class="label-style">Email Address*</label>
                        <input class="form-control form-control-lg" name="email" placeholder="name@example.com"
                            type="email" required>
                    </div>
                    <div class="form-group">
                        <label class="label-style">Password*</label>
                        <input class="form-control form-control-lg" name="password" placeholder="Password"
                            type="password" minlength="6" required>
                            <div class="form-group">
                        <label class="label-style">Confirm Password*</label>
                        <input class="form-control form-control-lg" name="cpassword" placeholder="Confirm Password" type="password" minlength="6" required>
                    </div>
                    </div>

                    
                    
                    
                   
                    <div class="form-group">
                        <button type="submit" name="signup" class="btn btn-success btn-lg btn-block">Sign
                            Up</button>
                    </div>
                </form>
                <p align="center">Already have an account? <a href="index.php">Sign In</a></p>
                <p align="center">All rights reserved © <?=date("Y");?></p>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>