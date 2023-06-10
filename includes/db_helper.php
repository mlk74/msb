<?php
	
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	$conn = mysqli_connect("localhost","root","","ms-f");
    $conn-> set_charset("utf8");
    $errors = array();

?>