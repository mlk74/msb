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
    <style>

    </style>

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
Welcome Slider
==================================== -->

    <section class="hero-area overlay" style="background-image: url('images/banner/hero-area.jpg');">
        <!-- <video autoplay muted loop class="hero-video">
		<source src="images/banner/hero-video.mp4" type="video/mp4">
	</video> -->
        <div class="block">
            <div class="video-button mb-5">

            </div>
            <!-- home welcome text -->
            <h1>Learn From the bast</h1>
            <p></p>
            <a href="#Field-List" class="btn btn-transparent smooth-scroll">Explore Us</a>
        </div>
    </section>

    <!--
Sticky Navigation
==================================== -->
    <header id="navigation" class="navigation">
        <div class="container">
            <div class="navbar-header w-100">
                <nav class="navbar navbar-expand-lg navbar-dark px-0">
                    <!-- logo -->
                    <a class="navbar-brand logo" href="index.php">
                        <img src="images/logo.png" alt="Website Logo" style='width: 150px;' />
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
                                    <b>Welcome!</b>
                                    <?php if(isset($_SESSION["User_NAME"])) { echo $_SESSION["User_NAME"]; } ?>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                                    style="background-color:#1D2024;">
                                    <a class="dropdown-item" href="../../profile.php">My Profile</a>
                                    <!-- <a class="dropdown-item" href="../../logout.php">Logout</a> -->
                                </div>
                            </li>
                            <li>
                                <a class="nav-link" href="#contact-us">Contact</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#search">search</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Field-List">Field List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#home">Home</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!--
End Sticky Navigation
==================================== -->

    <!--
		Start  Section
		==================================== -->
    <section class="bg-one about section" id="Field-List">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <!-- section title -->
                    <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                        <h2>Field <span class="color">List</span> </h2>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->
                </div>

                <!-- About item -->
                <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms">
                    <div class="block">
                        <a href="All-video.php?rid=1">
                            <div class="icon-box">

                                <!-- engineer field -->
                                <img src="images\engineer.png" class="feild-img">

                            </div>
                        </a>
                        <!-- Express About Yourself -->
                        <div class="content text-center">
                            <h3>Engineer</h3>
                            <p> </p>
                        </div>
                    </div>
                </div>
                <!-- End About item -->

                <!-- About item -->
                <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
                    <div class="block">
                        <a href="All-video.php?rid=2">
                            <div class="icon-box">

                                <!-- chef field -->
                                <img src="images/chef.png">

                            </div>
                        </a>
                        <!-- Express About Yourself -->
                        <div class="content text-center">
                            <h3>Chef</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!-- End About item -->

                <!-- About item -->
                <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                    <div class="block kill-margin-bottom">
                        <a href="All-video.php?rid=3">
                            <div class="icon-box">

                                <!-- coding field -->
                                <img src="images/coding.png" class="feild-img">

                            </div>
                        </a>
                        <!-- Express About Yourself -->
                        <div class="content text-center">
                            <h3>Coding</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!-- End About item -->

            </div> <!-- End row -->
            <div class="row">

                <div class="col-12">
                    <!-- section title -->
                    <div class="title text-center wow fadeIn" data-wow-duration="1500ms">


                    </div>
                    <!-- /section title -->
                </div>

                <!-- About item -->
                <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms">
                    <div class="block">
                        <a href="All-video.php?rid=4">
                            <div class="icon-box">

                                <!-- science field -->
                                <img src="images\science.png" class="feild-img">

                            </div>
                        </a>
                        <!-- Express About Yourself -->
                        <div class="content text-center">
                            <h3>Science</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!-- End About item -->

                <!-- About item -->
                <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
                    <div class="block">
                        <a href="All-video.php?rid=5">
                            <div class="icon-box">

                                <!-- class field -->
                                <img src="images/class.png" class="feild-img">

                            </div>
                        </a>
                        <!-- Express About Yourself -->
                        <div class="content text-center">
                            <h3>Class</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!-- End About item -->

                <!-- About item -->
                <div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                    <div class="block kill-margin-bottom">
                        <a href="All-video.php?rid=6">
                            <div class="icon-box">

                                <!-- technology field -->
                                <img src="images/technology.png" class="feild-img">

                            </div>
                        </a>
                        <!-- Express About Yourself -->
                        <div class="content text-center">
                            <h3>Technology</h3>
                            <p></p>
                        </div>
                    </div>
                </div>
                <!-- End About item -->

            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->


    <!--
Start Call To Action
==================================== -->


    <!-- Start search Section
==================================== -->
    <section id="search" class="bg-one section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                        <h2> <span class="color">Search</span></h2>
                        <div class="border"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color:#57cbcc;">Search For Video</label>
                        <input type="text" class="form-control" style="background-color:#1D2024; color:#afbac4; border-radius: 4px;
  " oninput="load_data(this.value)" placeholder="Title/description">
                    </div>
                    <!-- /section title -->
                </div>
                <table class="table table-light table-striped">
                    <thead style="background-color:#1D2024;
  ">

                    </thead>
                    <tbody id="table_data" style=" background-color:#1D2024;;
  ">
                    </tbody>
                </table>



            </div> <!-- End row -->
            <script>
            function load_data(search = '') {
                let xhr = new XMLHttpRequest();

                xhr.open("GET", "../../server.php?search=" + search, true);

                xhr.onprogress = function() {
                    document.getElementById('table_data').innerHTML = `<div class="spinner-border" role="status">
	  <span class="visually-hidden">Loading...</span>
	</div>`;
                }

                xhr.onload = function() {
                    document.getElementById('table_data').innerHTML = xhr.responseText;
                }

                xhr.send();
            }

            load_data();
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
                crossorigin="anonymous"></script>


        </div> <!-- End container -->
    </section> <!-- End section -->


    <!-- Start classes Section
=========================================== -->





    <!--
Start The bast Inspirers
=========================================== -->


    <!-- Start  section
=========================================== -->


    <!-- Start section
=========================================== -->


    <!-- Start  Section
=========================================== -->


    <!-- Srart Contact Us section
=========================================== -->
    <section id="contact-us" class="contact-us section-bg">
        <!-- <div class="col-12">
				<div class="all-post text-center">
					<a class="btn btn-main" href="blog.html">View All Post</a>
				</div>
			</div> -->
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <!-- section title -->
                    <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                        <h2>Contact <span class="color">Details</span></h2>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->
                </div>

                <!-- Contact Details -->
                <div class="contact-info col-lg-6 wow fadeInUp" data-wow-duration="500ms">
                    <h3></h3>

                    <div class="contact-details">
                        <div class="con-info clearfix">

                        </div>

                        <div class="con-info clearfix">
                            <i class="tf-ion-ios-telephone-outline"></i>
                            <span>Phone: +966*********</span>
                        </div>



                        <div class="con-info clearfix">
                            <i class="tf-ion-ios-email-outline"></i>
                            <span>Email: Bayyen@gmail.com</span>
                        </div>
                        <div class="con-info clearfix">
                            <i class="tf-ion-ios-email-outline"></i>
                            <span><a href="About-us.php">About Us</a></span>
                        </div>
                    </div>
                </div>
                <!-- / End Contact Details -->

                <!-- Contact Form -->

                <!-- ./End Contact Form -->

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



                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Group" transform="translate(2.000000, 2.000000)" stroke="#57CBCC"
                                    stroke-width="3">
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
                            </script>. All Rights Reserved. <br> Bayyen </p>
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
    <!-- wow.min Script -->
    <script src="plugins/wow/wow.min.js"></script>
    <!-- Custom js -->
    <script src="js/script.js"></script>

</body>

</html>
