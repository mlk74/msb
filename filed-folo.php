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
    <style>
       <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css1/styles.css">
    <link rel="stylesheet" href="assets/css/custom-A.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
   <script>
   
 

   </script>
    
    <style>
     
      .link-post-search:hover{
        color: green;
      }
      .link-post-search{
        color: black;
      }
      .search-res{
        background-color: #AEC69F;
          border-radius:20%
      }
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
.form-label{
  border-radius: 4px;
}

    </style>
     
     
    </style>
  </head>
  <body>
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
                              echo "<h1>No filed following </h1>";
                            }
                          }
                        }
                      }
                    }
                  } else {
                    echo "<h1>Following Filed </h1>";
                  }

              

              ?>

            <div class ="field-icon"> 


            <?php
                  $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '1' ";
                  $res2 = mysqli_query($conn,$query2);
                  if (mysqli_num_rows($res2) > 0)
              echo "<a href='all_posts.php?rid=1'><img src='assets/images/engineer.png' class='feild-img'></a>"

              ?>
  <?php
                  $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '2' ";
                  $res2 = mysqli_query($conn,$query2);
                  if (mysqli_num_rows($res2) > 0)
              echo " <a href='all_posts.php?rid=2'><img src='assets/images/chef.png' class='feild-img'></a>"

              ?>
                <?php
                  $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '3' ";
                  $res2 = mysqli_query($conn,$query2);
                  if (mysqli_num_rows($res2) > 0)
              echo " <a href='all_posts.php?rid=3'><img src='assets/images/coding.png' class='feild-img'></a>"

              ?>
              
              <?php
                  $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '4' ";
                  $res2 = mysqli_query($conn,$query2);
                  if (mysqli_num_rows($res2) > 0)
              echo " <a href='all_posts.php?rid=4'><img src='assets/images/science.png' class='feild-img'></a>"

              ?>
  <?php
                  $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '5' ";
                  $res2 = mysqli_query($conn,$query2);
                  if (mysqli_num_rows($res2) > 0)
              echo " <a href='all_posts.php?rid=5'><img src='assets/images/class.png' class='feild-img'></a>"

              ?>
             
             <?php
                  $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '6' ";
                  $res2 = mysqli_query($conn,$query2);
                  if (mysqli_num_rows($res2) > 0)
              echo " <a href='all_posts.php?rid=6'><img src='assets/images/technology.png' class='feild-img'></a>"

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
