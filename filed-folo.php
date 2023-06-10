<?php

  include("includes/db_helper.php");

?>
<html>

<head>
    <title>MasterSaudi</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css1/styles.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css1/styles.css">
    <link rel="stylesheet" href="assets/css/custom-A.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- CSS
		================================================== -->
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="plugins/themefisher-font/style.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <!-- Magnific popup css -->
    <link rel="stylesheet" href="plugins/magnific-popup/dist/magnific-popup.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="plugins/slick-carousel/slick.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick-theme.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <style>
    html {
        background-color: #353b43;
        color: #737f8a;

    }

    body {
        background-color: #353b43;
        font-family: "Anaheim", sans-serif;
        color: #737f8a;
        -webkit-font-smoothing: antialiased;
        position: relative;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {

        font-weight: 400;
        font-family: "Quattrocento Sans", sans-serif;
        color: #afbac4;
        color: black;
    }

    .hero {
        border-radius: 20%;
        background-color: #3d4754;
        margin: 0 260px;
        width: 50%;
        height: 50vh;

        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;

    }

    .feild-img {
        border: 1px solid #3d4754;
        border-radius: 4px;
        padding: 5px;
        width: 150px;
    }

    .feild-img:hover {
        background-color: #637894;
    }

    p {
        font-family: "Quattrocento Sans", sans-serif;
    }

    .transparent {
        background-color: #57cbcc;
    }
    </style>

</head>

<body>
    <header id="navigation" class="navigation">
        <div class="container">
            <div class="navbar-header w-100">
                <nav class="navbar navbar-expand-lg navbar-dark px-0">
                    <!-- logo -->
                    <a class="navbar-brand logo" href="New/theme/index.php">
                        <img src="New/theme/images/logo.png" alt="Website Logo" class="logo" style='width: 150;' />
                    </a>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC" stroke-width="3">
                            <ellipse id="Oval" cx="20.5" cy="20" rx="20.5" ry="20"></ellipse>
                            <path d="M6,7 L33.5,34.5" id="Line-2" stroke-linecap="square"></path>
                            <path d="M21,20 L34,7" id="Line-3" stroke-linecap="square"></path>
                        </g>
                    </g>
                    </svg>
                    </a>
                    <!-- /logo -->

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar01"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbar01">
                        <ul class="navbar-nav navigation-menu ml-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="New/theme/index.php#Field-List">Field List</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="New/theme/index.php">Home</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <?php include("includes/header.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br /><br />

                <br /><br />
            </div>
            <div class="col-md-12">
                <div class="row">

                    <?php
          
           
        ?>
                    <br />
                    <div class="hero">

                        <?php
                  $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '1' ";
                  $res2 = mysqli_query($conn,$query2);
                  if (mysqli_num_rows($res2) <= 0){
                    $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '2' ";
                    $res2 = mysqli_query($conn,$query2);
                    if (mysqli_num_rows($res2) <= 0){
                      $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '3' ";
                      $res2 = mysqli_query($conn,$query2);
                      if (mysqli_num_rows($res2) <=0){
                        $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '4' ";
                        $res2 = mysqli_query($conn,$query2);
                        if (mysqli_num_rows($res2) <= 0){
                          $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '5' ";
                          $res2 = mysqli_query($conn,$query2);
                          if (mysqli_num_rows($res2) <= 0){
                            $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '6' ";
                            $res2 = mysqli_query($conn,$query2);
                            if (mysqli_num_rows($res2) <=0){
                              echo "<h1 >No filed following </h1>";
                            }
                          }
                        }
                      }
                    }
                  } else {
                    echo "<h1>Following Filed </h1>";
                  }

              

              ?>

                        <div class="field-icon">


                            <?php
                  $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '1' ";
                  $res2 = mysqli_query($conn,$query2);
                  if (mysqli_num_rows($res2) > 0)
              echo "<a href='New/theme/All-video.php?rid=1'><img src='assets/images/engineer.png' class='feild-img'></a>"

              ?>
                            <?php
                  $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '2' ";
                  $res2 = mysqli_query($conn,$query2);
                  if (mysqli_num_rows($res2) > 0)
              echo " <a href='New/theme/All-video.php?rid=2'><img src='assets/images/chef.png' class='feild-img'></a>"

              ?>
                            <?php
                  $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '3' ";
                  $res2 = mysqli_query($conn,$query2);
                  if (mysqli_num_rows($res2) > 0)
              echo " <a href='New/theme/All-video.php?rid=3'><img src='assets/images/coding.png' class='feild-img'></a>"

              ?>

                            <?php
                  $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '4' ";
                  $res2 = mysqli_query($conn,$query2);
                  if (mysqli_num_rows($res2) > 0)
              echo " <a href='New/theme/All-video.php?rid=4'><img src='assets/images/science.png' class='feild-img'></a>"

              ?>
                            <?php
                  $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '5' ";
                  $res2 = mysqli_query($conn,$query2);
                  if (mysqli_num_rows($res2) > 0)
              echo " <a href='New/theme/All-video.php?rid=5'><img src='assets/images/class.png' class='feild-img'></a>"

              ?>

                            <?php
                  $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '6' ";
                  $res2 = mysqli_query($conn,$query2);
                  if (mysqli_num_rows($res2) > 0)
              echo " <a href='New/theme/All-video.php?rid=6'><img src='assets/images/technology.png' class='feild-img'></a>"

              ?>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    ?></div>
    <?php
                  
                  
                      
                   ?>
    <div style="margin-top: 20%;">
    </div>
    <div class="row">

        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

</body>

</html>
