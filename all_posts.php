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
      body{
        background-color: #eff5f5;
      }
        .btn{
        background-color: #AEC69F;
      }
      .btn:hover{
        background-color: darkgreen;
      }
     
    </style>
  </head>
  <body>
    <?php include("includes/header.php"); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br /><br />
          <h3 align="center">Videos</h3>
          <br /><br />
        </div>
        <div class="col-md-12">
          <div class="row">
          <!-- FETCH RATINGS FOR POST THUMBNAIL -->            
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
        ?> <!-- VIDEO DETAILS --> 
            <br />
            <div class="card mb-3 col-md-4"style='background-color: #d8e8cf;'>
            
              <div class="card-body">
                <h5 class="card-title"><?=$row["title"];?></h5>
                <p class="card-text"><b>Description:</b> <?=$row["description"];?></p>
                <p class="card-text"><b>Average Rating: <span class="text-warning"><?=$average_rating;?> ★</span></b></p>
                <p class="card-text"><b>Uploaded:</b> <?=$row["created"];?></p>
                <div class="row justify-content-end">
                  <a href="view_post.php?rid=<?=$row["id"];?>" type="button" class="btn btn-primary" class="btn">View Post</a>
                </div>
              </div>
            </div>
            <hr />
            <br /><br />
        <?php
          }
        ?>
         
          </div>
        </div>
      </div>
    </div>
    <!-- FOLLOW FIELD --> 
    <div class="col-md-12">  <?php
                  $query2 = "SELECT * FROM field_follow ,users WHERE follower_id= '".$_SESSION["User_ID"]."'  AND field_id = '".$_REQUEST["rid"]."' ";
                  $res2 = mysqli_query($conn,$query2);
                  if (mysqli_num_rows($res2) > 0){
                    echo "<form method='post'>";
                    echo "<input class='btn' type='submit' name='delete' value='Unfollow Field' />";   // Appears when user is already following
                    echo "</form>";
                  }
                  else{
                    echo "<form method='post'>";
                    echo "<input class='btn' type='submit' name='insert' value='Follow Field' />";   // Appears when user is not following
                    echo "</form>";
                  }
                  
                  ?>
                  <?php
                  $s=1;
                  if(isset($_POST['insert'])) {
                    $query3 = "INSERT INTO `field_follow`(`field_id`, `follower_id`) VALUES ('" .$_REQUEST["rid"]. "','" . $_SESSION["User_ID"] . "')";
                        if (mysqli_query($conn, $query3)) {
                          echo 'Done';
                        }
                    } else if (isset($_POST['delete'])){
                      $query3 = "DELETE FROM `field_follow` WHERE `field_id` =  '" .$_REQUEST["rid"]. "' AND `follower_id` = '" . $_SESSION["User_ID"] . "'";
                      if (mysqli_query($conn, $query3)) {
                        echo 'Done';
                      }
              }
               ?>
                  <?php
                  
                  
                      
                   ?>
      <div style="margin-top: 20%;">
     </div>
          <div class="row">
          
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

  </body>
</html>
