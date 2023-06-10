<!DOCTYPE html>

<?php

  include("../../includes/db_helper.php");

?>

<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Bayyen</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Parallax HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Meghna Template v1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

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


</head>
<?php include("../../includes/header.php"); ?>

<body id="home" data-spy="scroll" data-target=".navbar-nav" data-offset="80">
    <!--
	Start Preloader
	==================================== -->
    <div class="preloader">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>
    <!-- End Preloader
	==================================== -->

    <!--
Fixed Navigation
==================================== -->
    <header id="navigation" class="navigation">
        <div class="container">
            <div class="navbar-header w-100">
                <nav class="navbar navbar-expand-lg navbar-dark px-0">
                    <!-- logo -->
                    <a class="navbar-brand logo" href="index.php">
                        <img src="images/logo.png" alt="Website Logo" style='width: 150px;' />

                    </a>
                    <!-- /logo -->

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar01"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbar01">
                        <ul class="navbar-nav navigation-menu ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../profile.php">My Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#Field-List">Field List</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--
End Fixed Navigation
==================================== -->

    <section id="blog" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="title text-center wow fadeInDown">
                        <h2> <span class="color">Videos</span></h2>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->
                </div>

                <!-- single Video post -->
                <?php
   $query = "SELECT * FROM `social_post` WHERE postFieldId = '".$_REQUEST["rid"]."'";
   $res = mysqli_query($conn,$query);
   while($row = mysqli_fetch_array($res)){
     //Ratings
     $rquery = "SELECT * FROM `ratings` R INNER JOIN `users` U ON U.id = R.userid WHERE R.rid = '".$row["id"]."'";
     $rreviews = mysqli_query($conn,$rquery);
     $total_reviews = mysqli_num_rows($rreviews);
     $review_ratings = 0; $average_rating = 0;
     while($rating = mysqli_fetch_array($rreviews)){
       $review_ratings = $review_ratings + $rating["rating"];
     }
     if($total_reviews > 0){
       $average_rating = $review_ratings / $total_reviews;
       $average_rating = number_format((float) $average_rating, 1, '.', '');
     } else {
       $average_rating = "No ratings";
     }


?>
                <article class="col-lg-4 col-md-6 mb-30 clearfix wow fadeInUp" data-wow-duration="500ms">
                    <div class="post-block">
                        <div class="media-wrapper">
                            <img src="images/blog/blog-post-1.jpg" alt="amazing caves coverimage" class="w-100">
                        </div>
                        <div class="content">
                            <h3>
                                <h5 class="card-title"><?=$row["title"];?></h5>
                            </h3>
                            <p class="card-text"><b>Description:</b> <?=$row["description"];?></p>
                            <p class="card-text"><b>Average Rating: <span class="text-warning"><?=$average_rating;?>
                                        ★</span></b></p>
                            <p class="card-text"><b>Uploaded:</b> <?=$row["created"];?></p>
                            <a class="btn btn-transparent" href="../../view_post.php?rid=<?=$row["id"];?>">View
                                Video</a>



                        </div>
                    </div>
                </article>
                <?php
          }
        ?>
                <!-- /single Video post -->





            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end section -->

    <!-- end Contact Area
========================================== -->
    <footer id="footer" class="bg-one">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-duration="500ms">
                <div class="col-lg-12">

                    <!-- Footer Social Links -->
                    <div class="social-icon">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i
                                        class="tf-ion-social-twitter"></i></a></li>
                            <li class="list-inline-item"><a
                                    href="https://www.youtube.com/channel/UCx9qVW8VF0LmTi4OF2F8YdA"><i
                                        class="tf-ion-social-youtube"></i></a></li>
                        </ul>
                    </div>
                    <!--/. End Footer Social Links -->

                    <!-- copyright -->
                    <div class="copyright text-center">
                        <a href="index.html">
                            <img src="images/logo.png" alt="" style='width: 150px;' />
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

                        <p class="mt-3">Copyright
                            &copy; <script>
                            document.write(new Date().getFullYear())
                            </script>. All Rights Reserved. <br> Bayyen</p>
                    </div>
                    <!-- /copyright -->

                </div> <!-- end col lg 12 -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </footer> <!-- end footer -->

    <!--
	Essential Scripts
	=====================================-->

    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- Slick Carousel -->
    <script src="plugins/slick-carousel/slick.min.js"></script>
    <!-- Portfolio Filtering -->
    <script src="plugins/filterzr/jquery.filterizr.min.js"></script>
    <!-- Magnific popup -->
    <script src="plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Google Map API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
    <script src="plugins/google-map/gmap.js"></script>
    <!-- wow.min Script -->
    <script src="plugins/wow/wow.min.js"></script>
    <!-- Custom js -->
    <script src="js/script.js"></script>

</body>

</html>
