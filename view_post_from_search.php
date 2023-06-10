<?php

  include("includes/db_helper.php");

?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>MasterSaudi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css1/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
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
    <div class="container" style="background-color: #495463;">

        <div class="row">
            <div class="col-md-12">
                <br /><br />
                <h3 align="center">Video Details</h3>
                <br /><br />
            </div>
            <div class="col-md-12">
                <?php
          $query = "SELECT * FROM social_post WHERE id = '".$_REQUEST["rid"]."'";
          $res = mysqli_query($conn,$query);
          $row = mysqli_fetch_array($res);

          
        ?>
                <div class="card mb-3" style='background-color: #506075;'>
                    <div id="-d" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" style=" background-color: #506075 ";>
              <p class=" card-text"> <?=$row["video"];?></p>
                            <iframe style="display: block; margin: auto;" width="560" height="315"
                                src="https://www.youtube.com/embed/<?php echo $row["embbed"]?>"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>

                        </div>

                    </div>

                    <div class="card-body" style=" background-color: #506075;">
                        <h5 class="card-title" style=" color:white"><?=$row["title"];?></h5>
                        <p class="card-text" style=" color:white"><b style="background-color: #506075";>Description:></b>'
                            <?=$row["description"]?></p>
                    </div>
                    <?php
                  $query2 = "SELECT * FROM inspirer_follow, users, inspirers WHERE users.id = '".$_SESSION["User_ID"]."' 
                   AND user_id = inspirers.id AND  follower_id= '".$_SESSION["User_ID"]."' ";

                  $res2 = mysqli_query($conn,$query2);

                  if (mysqli_num_rows($res2) > 0){
                    echo "<form method='post'style='background-color: #506075;'>";
                    echo "<input class='transparent' type='submit' name='delete' value='Unfollow' />";   // Appears when user is already following
                    echo "</form>";
                  }
                  else{
                    echo "<form method='post'style='background-color: #57cbcc;'>";
                    echo "<input class='transparent' type='submit' name='insert' value='Follow' />";   // Appears when user is not following
                    echo "</form>";
                  }
                  
                  ?>
                    <?php
                  
                  if(isset($_POST['insert'])) {
                    $query3 = "INSERT INTO `inspirer_follow`(`user_id`, `follower_id`) VALUES ('" . $row["post_inspirer_id"] . "','" . $_SESSION["User_ID"] . "')";
                        if (mysqli_query($conn, $query3)) {
                          echo 'Done';
                        }
                    } else if (isset($_POST['delete'])){
                      $query3 = "DELETE FROM `inspirer_follow` WHERE `user_id` =  '" . $row["post_inspirer_id"] . "' AND `follower_id` = '" . $_SESSION["User_ID"] . "'";
                      if (mysqli_query($conn, $query3)) {
                        echo 'Done';
                      }
              }
               ?>


                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <hr />
                        <div class="form-group">
                            <div class="col-md-12">
                                <?php
          $query = "SELECT * FROM ratings WHERE rid = '".$_REQUEST["rid"]."'";
          $res = mysqli_query($conn,$query);
          $row = mysqli_fetch_array($res);
          $R=0;
          $row["rating"]??=null;
          if($row["rating"]==null){
            $row["rating"]=0;
          }else{
            $R=$row["rating"];
          }

          
        ?>
                                <label class="label-style">Rating:</label><span style=" color: rgb(187, 171, 0);">
                                    <?=$row["rating"];?>★</span>
                            </div>
                            <!-- Stars -->
                            <?php
                        function rate()
                        {
                          $rateQuery = "INSERT INTO `ratings`( `userid`, `rid`, `rating`) VALUES ('" . $_SESSION["User_ID"] . "','".$_REQUEST["rid"]."','[value-4]')    ";
                        }
                        function changeRate()
                        {
                          $ratechange = "UPDATE `ratings` SET `rating`='[value-4]' WHERE `userid`='" . $_SESSION["User_ID"] . "" . $_REQUEST["rid"] . "";
                        }
                        if(isset($_REQUEST["submituserrate"])){

                          $result = mysqli_query($conn,"SELECT * from ratings WHERE userid ='".$_SESSION["User_ID"]."' AND rid = '".$_REQUEST["rid"]."'");
                          if(mysqli_num_rows($result) <= 0){
                            $query = "INSERT INTO `ratings`( `userid`, `rid`, `rating`) VALUES ('" . $_SESSION["User_ID"] . "','".$_REQUEST["rid"]."','".$_REQUEST["rate"]."')    ";
                            if(mysqli_query($conn,$query)){
                                echo '<script>alert("Your Rating has been Submitted Successfully");</script>';
                                echo '<script>location.href="view_post.php?rid='.$_REQUEST["rid"].'";</script>';
                            }
                          } else {
                            $changer = mysqli_query($conn,"SELECT * from ratings WHERE userid ='".$_SESSION["User_ID"]."' AND rid = '".$_REQUEST["rid"]."' AND rating <>'".$_REQUEST["rate"]."' ");
                            if (mysqli_num_rows($changer) > 0) { // 
                              $update = "UPDATE `ratings` SET `rating`='". $_REQUEST["rate"] ."' WHERE `userid`='".$_SESSION["User_ID"]."' AND `rid`='".$_REQUEST["rid"]."' ";
                              
                              if (mysqli_query($conn, $update)) {
                                echo '<script>alert("Your Rating has been Changed Successfully");</script>';
                                echo '<script>location.href="view_post.php?rid=' . $_REQUEST["rid"] . '";</script>';
                              }
                              
                            }else{
                              echo '<script>alert("Your Review is already Submitted. \nThanks");</script>';
                              echo '<script>location.href="view_post.php?rid=' . $_REQUEST["rid"] . '";</script>';}

                          }
                        }
                        ?>


                            <form name="rating" method="post">
                                <div class="rate">

                                    <input type="radio" id="star5" name="rate" value="5">
                                    <label for="star5" title="5 stars">5 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4">
                                    <label for="star4" title="4 stars">4 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3">
                                    <label for="star3" title="3 stars">3 stars</label>
                                    <input type="radio" id="star2" name="rate" value="2">
                                    <label for="star2" title="2 stars">2 stars</label>
                                    <input type="radio" id="star1" name="rate" value="1">
                                    <label for="star1" title="1 star">1 star</label>

                                </div>
                                <?php
                          
                            $checkexistingrating = mysqli_query($conn,"SELECT * from ratings WHERE userid ='".$_SESSION["User_ID"]."' AND rid = '".$_REQUEST["rid"]."'");
                            if (mysqli_num_rows($checkexistingrating) > 0){
                              $status = "Change";
                            }
                            else{
                            $status = "Submit";
                            }
                            $c=mysqli_query($conn,"SELECT * from ratings WHERE userid ='".$_SESSION["User_ID"]."' AND rid = '".$_REQUEST["rid"]."'");
                             ?>

                                <button type="submit" class='transparent' name="submituserrate"><?php echo $status; ?>
                                    Rating</button>
                            </form>
                        </div>
                        <br>
                        <hr>
                        <!-- Comment Box -->

                        <h6 style='padding: 10px;background-color:#353b43;' class='bg-info text-white'>Add a comment
                        </h6>
                        <form name="form" method="post">
                            <div class="form-group">
                                <textarea class="form-control" name="comment" maxlength="200"
                                    placeholder="Your Comment Goes Here...(200 Characters Max)" rows="5" required
                                    style='background-color: #506075; color:white;'></textarea>
                            </div>
                            <div class="form-group row justify-content-end">
                                <button type="submit" name="submituserreview"
                                    class="col-md-2 btn btn-info btn-block">Comment</button>
                            </div>
                        </form>
                        <hr />
                        <!-- Display Comments -->
                        <?php

                              if(isset($_REQUEST["submituserreview"])){

                                $result = mysqli_query($conn,"SELECT * from comments WHERE userid ='".$_SESSION["User_ID"]."' AND rid = '".$_REQUEST["rid"]."'");
                                
                                  $query = "INSERT INTO `comments`(`userid`, `rid`,  `comment`) VALUES ('".$_SESSION["User_ID"]."','".$_REQUEST["rid"]."','".$_REQUEST["comment"]."')";
                                  if(mysqli_query($conn,$query)){
                                      echo '<script>alert("Your Comment has been Submitted Successfully");</script>';
                                      echo '<script>location.href="view_post.php?rid='.$_REQUEST["rid"].'";</script>';
                                  }
                                 else {
                                    echo '<script>alert("Your Review is already Submitted. \nThanks");</script>';
                                    echo '<script>location.href="view_post.php?rid='.$_REQUEST["rid"].'";</script>';

                                }
                              }
                              ?>
                        <h5 style=" padding: 10px;" class="bg-info text-white">Comments</h5>
                        <div class="row">
                            <?php
                            $query = "SELECT *,R.id as ratingid FROM `comments` R INNER JOIN `users` U ON U.id = R.userid WHERE R.rid = '".$_REQUEST["rid"]."'";
                            $reviews = mysqli_query($conn,$query);
                            if(mysqli_num_rows($reviews) > 0){
                                while($ratingrow = mysqli_fetch_array($reviews)){
                          ?>
                            <div class="col-md-12" style='background-color: #506075;'>
                                <div class="individual-comment" style=' color:white;'>
                                    <p><?=$ratingrow["comment"];?></p>
                                </div>
                                <div class="individual-comment-by">
                                    <i>Comment by:<b> <?=$ratingrow["username"];?></b></i>
                                </div>
                                <hr />
                            </div>
                            <?php
                                }
                            } else {
                        ?>
                            <div class="col-md-12">
                                <p align="center"><i>No Comments yet.</i></p>
                            </div>
                            <?php
                            }
                        ?>
                        </div>
                        <!---->


                    </div>
                </div>
            </div>


            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

</body>

</html>
