<?php

    include("includes/controllerUserData.php");
    if(isset($_SESSION["User_ID"])){
        echo '<script>location.href="home.php";</script>';
    }

?>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <style type="text/css">
        .label-style{
            font-weight: 500;
        }
        input{
            border: 1px solid #343a40 !important;
        }
        body{
        background-color: #EFF5F5;
      }
      .logo{
        width: 300px;
        height: 300px;
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
                $_SESSION["User_City"] = $row["city"];
               
                echo '<script>location.href="home.php";</script>';
                
            } else {
                echo '<script>location.href="index.php?signin=0";</script>';
            }



            $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $check_email = "SELECT * FROM users WHERE email = '$email'";
        $res = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified'){
                    $row = mysqli_fetch_array($res);
                    $_SESSION["User_ID"] = $fetch["id"];
                    $_SESSION["User_NAME"] = $fetch["username"];
                    $_SESSION["User_Email"] = $fetch["email"];
                    $_SESSION["User_City"] =$fetch["city"];
                    echo '<script>location.href="index.php?signup=1";</script>';
                    // header('location: home.php');
                }else{
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "Incorrect email or password!";
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
                <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <label class="label-style">Email Address</label>
                        <input class="form-control form-control-lg" name="email" placeholder="Email Address" type="email" required>
                    </div>
                    <div class="form-group">
                        <label class="label-style">Password</label>
                        <input class="form-control form-control-lg" name="password" placeholder="Password" type="password" required>
                        <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" name="login" class="btn btn-success btn-lg btn-block">Sign In</button>
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
