<!DOCTYPE HTML>
<?php

include("../includes/db_helper.php");

?>
<html>

<head>
    <title>Inspirer profile </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />

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

<body class="is-preload">
    <?php include("../includes/header.php"); ?>

    <?php
          
          
		  $query = "SELECT * FROM `inspirers` WHERE id = '".$_SESSION["insp_id"]."' ";
          $res = mysqli_query($conn,$query); 
			$Name='';$ds='';$fi='';
			if($row = mysqli_fetch_array($res)){
			$Name=$row['name'];
			$ds=$row['description'];
			$fi=$row['fields'];
		}
      ?>
    <!-- Header -->
    <section id="header">

        <header class="major">
            <!-- insp-name -->
            <a class="navbar-brand logo" href="../New/theme/index.php" style='width: 80;'>
                <img src="../New/theme/images/logo.png" alt="Website Logo" /></a><br>
            <h1> <?php  echo $Name?> </h1>
            <p> </p>
        </header>
        <div class="container">
            <ul class="actions special">
                <li><a href="#one" class="button primary scrolly">Begin</a></li>
            </ul>
        </div>
    </section>

    <!-- One -->
    <section id="one" class="main special">
        <div class="container">

            <div class="content">
                <header class="major">
                    <h2>Who I am</h2>
                </header>
                <p><?php  echo $ds?></p>
            </div>
            <a href="#three" class="goto-next scrolly">Next</a>
        </div>
    </section>

    <!-- Two -->

    <!-- What did he do. -->
    <!--  -->
    <!-- <section id="two" class="main special">
				<div class="container">
					<span class="image fit primary"><img src="images/pic02.jpg" alt="" /></span>
					<div class="content">
						<header class="major">
							<h2>Stuff I do</h2>
						</header>
						<p>What did he do.</p>
						
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</div>
			</section> -->

    <!-- Three -->
    <section id="three" class="main special">
        <div class="container">
            <div class="content">
                <header class="major">
                    <h2>Were can you Find me </h2>
                </header>
                <p> In <?php  echo $fi?> Field</p>
            </div>
            <a href="#footer" class="goto-next scrolly">Next</a>
        </div>
    </section>


    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbar01">
                <ul class="navbar-nav navigation-menu ml-auto" style='display: inline;'>

                    <li class="nav-item" style='display: inline;'>
                        <a class="dropdown-item" href="../inspirer-list.php" style=' color:black;'>Inspirer List</a>
                    </li>
                    <li class="nav-item" style='display: inline; color:black;'>
                        <a class="dropdown-item" href="../profile.php" style=' color:black;'>My Profile</a>
                    </li>
                    <li class="nav-item" style='display: inline;'>
                        <a class="nav-link" href="../New/theme/index.php#Field-List" style=' color:black;'>Field
                            List</a>
                    </li>
                    <li class="nav-item" style='display: inline;'>
                        <a class="nav-link" href="../New/theme/index.php" style=' color:black;'>Home</a>
                    </li>







                </ul>
            </div>
        </div>
        <footer>

            <ul class="copyright">
                <li>&copy; Bayyen </li>
            </ul>
        </footer>
    </section>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

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


</body>

</html>