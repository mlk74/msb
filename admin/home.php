<?php

  include("includes/db_helper.php");

?>
<html>
  <head>
    <title>MasterSaudi</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
   
    
    <style>
      .btn{
        background-color: #AEC69F;
      }
      .btn:hover{
        background-color: darkgreen;
      }
     
      body{
        background-color: #eff5f5;
      }
      .logo{
        width: 300px;
        height: 300px;
      }
      .hero{
        border-radius:20%;
        background-color: #e1e5e6;
        margin: 0 260px;
        width: 50%;
        height: 50vh;

display: flex;
align-items: center;
flex-direction: column;
justify-content: center;

}
h1{
    font-size:50px;
}
.feild-img{
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}

a{
  margin: 5px 10px;
}
.feild-img:hover{
  background-color: #AEC69F;
  border-radius:20%
}

    </style>
  </head>
  <body>
    <?php include("includes/header.php"); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br /><br />
          <div class="row justify-content-center">
              <img src="assets/images/logo.png" class="logo"/>
              <br><br>
                
          </div>
        
          
        </div>
        <div class="col-md-12">
          <form name="form" method="post">
            <div class="input-group mb-3 row justify-content-center">
              <input type="text" class="form-control form-control-lg col-md-6" placeholder="Search..." name="searchtext" required>
              <div class="input-group-append">
                <!-- <button class="btn btn-outline-secondary" type="submit" name="searchmovies">Search</button> -->
                <button type="submit" name="mysearch"class="btn" class="btn btn-primary">Go</button>
              </div>
              
            </div>
            <div class="hero"><h1>Field List</h1>
            <div class ="field-icon"> 
              <a href="all_posts.php?rid=1"><img src="assets/images/engineer.png" class="feild-img"></a>
               <a href="all_posts.php?rid=2"><img src="assets/images/chef.png" class="feild-img"></a>
              
              <a href="all_posts.php?rid=3"><img src="assets/images/coding.png" class="feild-img"></a>
              <a href="all_posts.php?rid=4"><img src="assets/images/science.png" class="feild-img"></a>
             
              <a href="all_posts.php?rid=5"><img src="assets/images/class.png" class="feild-img"></a>
              <a href="all_posts.php?rid=6"><img src="assets/images/technology.png" class="feild-img"></a>
            </div> 

            </div>
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
