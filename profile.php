<?php

  include("includes/db_helper.php");
  $sql = "SELECT picture FROM users WHERE id = '".$_SESSION["User_ID"]."'";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
    $rowpic = $result->fetch_assoc();
    $imageData = $rowpic['picture'];

} else {
    // Default picture if the user does not have a profile picture assigned
    
}

?>
<html>

<head>
    <title>MasterSaudi</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css1/styles.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>


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
    }

    p {
        font-family: "Quattrocento Sans", sans-serif;
    }

    .about {
        color: black;
    }
    </style>
</head>

<body>
    <?php include("includes/header.php"); ?>
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
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <b>Logout </b>
                                    <?php if(isset($_SESSION["User_NAME"])) { echo $_SESSION["User_NAME"]; } ?>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                                    style="background-color:Red">

                                    <a class="dropdown-item" href="logout.php">Logout</a>
                                </div>
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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br /><br />
                <div class="row justify-content-center">
                    <!-- <img src="assets/images/logo.png" class="logo"/> -->

                </div>


            </div>


        </div>

        <section class="h-100 gradient-custom-2">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-9 col-xl-7">
                        <div class="card">
                            <div class="rounded-top text-white d-flex flex-row"
                                style="background-color:#272a2e; height:200px;">
                                <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                    <!-- img profile -->
                                    <?php
                                     if (is_null($rowpic['picture']) || empty($rowpic['picture'] )){
                                        echo '<img src="assets/images/profilepage.png" alt="Profile Picture">';
                                    }
                                    else{
                                    echo '<img src="'.$rowpic['picture'].'" alt="Generic placeholder image"
                                        class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">';}
                                    ?>   
                                    <!-- <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                style="z-index: 1;">
                Edit profile
              </button> -->
                                </div>
                                <!-- Name  -->
                                <div class="ms-3" style="margin-top: 130px;">

                                    <h5 style="color:#bcc0c4;">
                                        <?php 
               if(isset($_SESSION["User_NAME"])) { 
                
                echo str_repeat('&nbsp;', 3) .$_SESSION["User_NAME"]; 
                } ?>
                                    </h5>
                                    <!-- end -->
                                    <!-- City -->
                                    <?php 
              $queryc = "SELECT city FROM users WHERE id= '".$_SESSION["User_ID"]."'";
              $result1c = mysqli_query($conn, $queryc);
              $rowc = mysqli_fetch_row($result1c);
              
              ?>
                                    <p style="color:#bcc0c4;"><?php echo str_repeat('&nbsp;', 4) . $rowc[0] ?></p>
                                    <!-- end -->
                                </div>
                            </div>
                            <form action="profileedit.php"method='post'>
               <input class='btn' type='submit' value='Edit Profile' />
          </form>

                            <?php 


            $query = "SELECT COUNT(*) FROM inspirer_follow WHERE follower_id = '".$_SESSION["User_ID"]."'";
            $result1 = mysqli_query($conn, $query);
            $row = mysqli_fetch_row($result1);
            
            $query2 = "SELECT COUNT(*) FROM field_follow WHERE follower_id = '".$_SESSION["User_ID"]."'";
            $result2 = mysqli_query($conn, $query2);
            $row2 = mysqli_fetch_row($result2);
          
          
          ?>
                            <div class="p-4 text-black" style="background-color: #3d3f42;">
                                <div class="d-flex justify-content-end text-center py-1">
                                    <!--Num-Fields & Inspirers Followed  -->
                                    <div>
                                        <a href="filed-folo.php">
                                            <p class="Num-Fields-Followed"><?php echo $row2[0] ?></p>
                                        </a>
                                        <p class="small text-muted mb-0" style="color:#bcc0c4;">Fields Followed</p>
                                    </div>
                                    <div class="px-3">
                                        <a href="inspirer-list.php">
                                            <p class="Num-Inspirers-Followed"><?php echo $row[0] ?></p>
                                        </a>
                                        <p class="small text-muted mb-0" style="color:#bcc0c4;">Inspirers Followed</p>
                                    </div>
                                    <!-- end -->
                                    <div>

                                    </div>
                                </div>
                            </div>
                            <!--     <div class="card-body p-4 text-black">
            <div class="mb-5">
              <p class="lead fw-normal mb-1"><span class="about"style="color:black;">About</span></p>
              <div class="p-4" style="background-color: #f8f9fa;">
              <-- user's description  --
                <p class="font-italic mb-1">Web Developer</p>
                <-- end 
              </div>
            </div>
           
            
             
            </div> -->


                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </section>


    <div class="row justify-content-center">
    </div>
    </form>
    <form name="ratingform" method="post">
    </form>
    <br /><br />
    </div>
    <div class="col-md-12">
        <div class="row">


</body>

</html>