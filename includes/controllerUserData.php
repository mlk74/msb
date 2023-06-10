<?php 

require "includes/db_helper.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

//Emailer Details
                $mail = new PHPMailer(true);
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'bayyen677@gmail.com';                     //SMTP username
                $mail->Password   = 'guuhxvkwfafobbcg';                               //SMTP password
                $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('bayyen677@gmail.com','Bayyen');
//
//Reciever Details
$email = "";
$name = "";
$errors = array();

//if user signup button
if(isset($_POST['signup'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $dateob = ($_POST['dateob']);
    $gender = $_REQUEST["gender"];
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    // Check Confirm Password
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    // Check if email already exists
    $email_check = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($conn, $email_check);
    if(mysqli_num_rows($res) > 0){ // Email Already Exists
        header('location: index.php?signup=2');
        exit();
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT); // Password Encryption
        $code = rand(999999, 111111); // Verification Code Generation
        $status = "notverified";
        $insert_data = "INSERT INTO `users`(`username`, `email`, `password`, `city`, `country`, `dateob`, `gender`, `code`, `status`)
        VALUES ('$username','$email','$encpass','$city','$country','$dateob','$gender', '$code', '$status')";
        $data_check = mysqli_query($conn, $insert_data);
        if($data_check){
           
            try {
                $mail->addAddress($email);
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = "Email Verification Code";
                $mail->Body    = "Your verification code is $code";

                $mail->send();
                echo 'Message has been sent';
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            } catch (Exception $e) {
                $errors['otp-error'] = "Failed while sending code!";
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }

}
    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
        $check_code = "SELECT * FROM users WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE users SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($conn, $update_otp);
            if($update_res){
                header('location: index.php?signup=1');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click login button
    if(isset($_POST['login'])){
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
                    //Register session
                    $_SESSION["User_ID"] = $fetch["id"];
                    $_SESSION["User_NAME"] = $fetch["username"];
                    $_SESSION["User_Email"] = $fetch["email"];
                    $_SESSION["User_City"] =$fetch["city"];
                    echo '<script>location.href="home.php";</script>';
                    header('location: home.php');
                }else{
                    // Email Registered, but unverified
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

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $check_email = "SELECT * FROM users WHERE email='$email'";
        $run_sql = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111); // OTP Random  Generation
            $insert_code = "UPDATE users SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($conn, $insert_code);
            if($run_query){

                try {
                    $mail->addAddress($email);
                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = "Password Reset Code";
                    $mail->Body    = "Your password reset code is $code";
                    $mail->send();
                    echo 'Message has been sent';
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                } catch (Exception $e) {
                    $errors['otp-error'] = "Failed while sending code!";
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
        $check_code = "SELECT * FROM users WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_BCRYPT); // Encryption
            $update_pass = "UPDATE users SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($conn, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
    
//    if login now button click
    if(isset($_POST['login-now'])){
        header('Location: index.php');
    }
?>