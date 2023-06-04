
<?php
  require_once "includes/controllerUserData.php";
  if(!isset($_SESSION["User_ID"])){
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="home.php">MasterSaudi</a>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <b>Welcome!</b> <?php if(isset($_SESSION["User_NAME"])) { echo $_SESSION["User_NAME"]; } ?>
            </a>
            
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="profile.php">My Profile</a>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>