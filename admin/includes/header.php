<?php

  if(!isset($_SESSION["Admin_ID"])){
      echo '<script>location.href="index.php";</script>';
  }

?>
  <style type="text/css">
    .navbar-dark .navbar-nav .nav-link{
      color: #ffffff !important;
      font-size: 19px;
    }
    .nav-item{
      border-right: 1px solid #ffffff;
    }
    .nav-item:last-child{
      border-right: 1px solid #343a40;
    }
  </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="home.php">MasterSaudi</a>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addinsp.php">Add Inspirer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Moderatorpage.php">Upload Video</a>
          </li>
       <!--   <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            All Videos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="all_restaurants.php">All Videos</a>
              <a class="dropdown-item" href="my_restaurants.php">My Videos</a>
              <a class="dropdown-item" href="add_restaurant.php">Add Inspirer</a>

            </div>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <b>Welcome!</b> <?php echo $_SESSION["Admin_NAME"]; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>