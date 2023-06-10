<!doctype html><?php

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

    .transparent {
        background-color: #57cbcc;
    }

    ::-webkit-scrollbar {
        width: 8px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .followers {
        font-size: 12px;
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
    <div class="container" style=" background-color:#455263">
        <div class="container mt-5" style=" background-color:#455263">
            <div class="d-flex justify-content-center row" style=" background-color:#455263">
                <div class="col-md-6">
                    <div class="" style=" background-color:#455263">
                        <div>
                            <!-- logo-->
                            <h1> Following Inspirers </h1>
                        </div>
                        <p><br><br></p>
                        <?php
          
          $query =  "SELECT user_id, inspirers.id, name,fields FROM `inspirer_follow` LEFT JOIN `inspirers`
          ON user_id=inspirers.id WHERE inspirer_follow.follower_id='".$_SESSION["User_ID"]."' ORDER BY user_id";
          $res = mysqli_query($conn,$query); 
      
    
          while($row = mysqli_fetch_array($res)){
         
            echo"<div class='d-flex flex-row justify-content-between align-items-center'> 
            
            <div class='d-flex flex-row align-items-center'
            ><img class='rounded-circle' 
            src='assets/images/technology.png'
            width='55'>
             <div class='d-flex flex-column align-items-start ml-2'>";
               
             $rowname=$row['name'];
             $rowfields=$row['fields'];
                  echo "<span class='font-weight-bold'>$rowname</span>";
                 
             
               echo" <span class='followers'>$rowfields</span></div>
            </div>
            <!-- folo button-->
            
            <div class='d-flex flex-row align-items-center mt-2'>";
            $query2 = "SELECT * FROM inspirer_follow, users, inspirers WHERE users.id = '".$_SESSION["User_ID"]."'  AND user_id = inspirers.id AND users.id = follower_id ";
            $res2 = mysqli_query($conn,$query2);
            if (mysqli_num_rows($res2) > 0){
              echo "<form method='post'>";
              echo "<input class='btn' id='unfbutton' type='submit' name='delete' value='Unfollow'  onclick='changeName()' />";   // Appears when user is already following
              echo "</form>";
            }
            else{
              echo "<form method='post'>";
              echo "<input class='btn' type='submit' name='insert' value='Follow' />";   // Appears when user is not following
              echo "</form>";
            }
            
        echo "</div>";
            
            
            
            // Database - Follow Function
            if(isset($_POST['insert'])) {
              $query3 = "INSERT INTO `inspirer_follow`(`user_id`, `follower_id`) VALUES ('" . $row["user_id"] . "','" . $_SESSION["User_ID"] . "')";
                  if (mysqli_query($conn, $query3)) {
                    echo 'Done';
                  }
              } else if (isset($_POST['delete'])){
                $query3 = "DELETE FROM `inspirer_follow` WHERE `user_id` =  '" . $row["user_id"] . "' AND `follower_id` = '" . $_SESSION["User_ID"] . "'";
                if (mysqli_query($conn, $query3)) {
                }
        }

        }?>
    
  
  
    
                  
                  <?php
                  
               ?>   
                    
                    
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</body>
=======
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
                            
                                </body>
                            </html>
>>>>>>> 6011fc007d3d98b103b08f233fd50b227e32ef55
