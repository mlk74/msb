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
    <style>
    body{
        background-color: #eff5f5;
      }.btn{
        background-color: #AEC69F;
      }
      .btn:hover{
        background-color: darkgreen;
      }</style>
  </head>
  <body>
    <?php include("includes/header.php"); ?>
    <div class="container">  
     
      <div class="row" >
        <div class="col-md-12">
          <br /><br />
          <h3 align="center">Posts Details</h3>
          <br /><br />
        </div>
        <div class="col-md-12">
        <?php
          $query = "SELECT * FROM social_post WHERE id = '".$_REQUEST["rid"]."'";
          $res = mysqli_query($conn,$query);
          $row = mysqli_fetch_array($res);

          
        ?>
          <div class="card mb-3" style='background-color: #d8e8cf;'>
            <div id="-d" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
              <p class="card-text"> <?=$row["video"];?></p>
              <iframe style="display: block; margin: auto;" width="560" height="315" src="https://www.youtube.com/embed/<?php echo $row["embbed"]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            
              </div>
              
            </div>

            <div class="card-body">
              <h5 class="card-title"><?=$row["title"];?></h5>
              <p class="card-text"><b>Description:</b> <?=$row["description"]?></p>
            </div>
            
            <?php
                  // Follow Button
                  $query2 = "SELECT * FROM inspirer_follow, users, inspirers WHERE users.id = '".$_SESSION["User_ID"]."'  AND user_id = inspirers.id AND users.id = follower_id ";
                  $res2 = mysqli_query($conn,$query2);
                  if (mysqli_num_rows($res2) > 0){
                    echo "<form method='post'>";
                    echo "<input class='btn' type='submit' name='delete' value='Unfollow' />";   // Appears when user is already following
                    echo "</form>";
                  }
                  else{
                    echo "<form method='post'>";
                    echo "<input class='btn' type='submit' name='insert' value='Follow' />";   // Appears when user is not following
                    echo "</form>";
                  }
                  
                  ?>
                  <?php
                  // Database - Follow Function
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

         
          $row["rating"]??=null;
          if($row["rating"]==null){
            $row["rating"]=0;
          }else{
           
          }

          
        ?>
                          <label class="label-style">Rating:</label> <span style=" color: rgb(187, 171, 0);" > <?=$row["rating"];?>★</span>
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
                            
                          <button type="submit" name="submituserrate" ><?php echo $status; ?> Rating</button>
                      </form>
                      </div>
                      <br>
                      <hr>
                      <!-- Comment Box -->
                      
                        <h6 style="padding: 10px;" class="bg-info text-white" >Add a comment</h6>
                        <form name="form" method="post">
                            <div class="form-group">
                                <textarea class="form-control" name="comment" maxlength="200" placeholder="Your Comment Goes Here... (200 Characters Max)" rows="5" required style='background-color: #d8e8cf;'></textarea>
                            </div>
                            <div class="form-group row justify-content-end">
                                <button type="submit" name="submituserreview" class="col-md-2 btn btn-info btn-block">Comment</button>
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
                                  <div class="col-md-12"style='background-color: #d8e8cf;'>
                                    <div class="individual-comment">
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
