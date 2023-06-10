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
                    <br />
                    <div class="card mb-3 col-md-4">

                        <div class="card-body">
                            <h5 class="card-title"><?=$row["title"];?></h5>
                            <p class="card-text"><b>Description:</b> <?=$row["description"];?></p>
                            <p class="card-text"><b>Average Rating: <span class="text-warning"><?=$average_rating;?>
                                        ★</span></b></p>
                            <p class="card-text"><b>Uploaded:</b> <?=$row["created"];?></p>
                            <div class="row justify-content-end">
                                <a href="view_post.php?rid=<?=$row["id"];?>" type="button" class="btn btn-primary">View
                                    Post</a>
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
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

</body>

</html>