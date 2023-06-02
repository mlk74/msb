<?php

include("includes/db_helper.php");

?>
<html>

<head>
  <title>MasterSaudi</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/custom-A.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>


  <style>
    .btn {
      background-color: #AEC69F;
    }
    

    .btn:hover {
      background-color: darkgreen;
    }
    btnn:hover{
      background-color: darkgreen;
    }

    body {
      background-color: #eff5f5;
    }

    .logo {
      width: 300px;
      height: 300px;
    }

    /* .Video-explore{
        background-color: #AEC69F;
      } */
    .hero {
      border-radius: 20%;
      background-color: #e1e5e6;
      margin: 0 260px;
      width: 50%;
      height: 50vh;

      display: flex;
      align-items: center;
      flex-direction: column;
      justify-content: center;

    }

    .span-list-inspirer {
      color: black;
    }

    .dropdown-menu {
      border: #AEC69F;
    }

    .dropdown-menu a:hover {
      background-color: #AEC69F;
    }

    .Description-Upload {
      font-size: 50px;
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
          <img src="assets/images/logo.png" class="logo" />

        </div>
      </div>
    </div>


    <div class="hero">
      <div class="field-icon">

        <div class="Upload-form">
          <form method="post" name="form">
            <!--Upload video form  -->
            <h1 class="Description-Upload">Upload the video </h1>

            <br>
            <!-- end -->

            <br>
            <!-- choose inspirer form -->
            <div class="dropdown">
              
              <br>
              <br>
              <?php
              $query4 = "SELECT name FROM inspirers";
              $result = $conn->query($query4);
              if ($result->num_rows > 0) {
                $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
              }
              ?>
              <select name="insp" placeholder="Select Product ID Type" class="btn">
                <option class="btnn" style="background-color: #AEC69F;">Select Inspirer</option>
                <?php
                foreach ($options as $option) {
                  ?>
                  <option style="background-color: #AEC69F; " class="btnn">
                    <?php echo $option['name']; ?>
                  </option>
                <?php
                }
                ?>
              </select>
              <!-- end -->
            </div>

            <br>
            
            <!-- Video key word form -->
            <div class="textbox">

              <input type="text" id="title" name="title" required="required">
              <span>Video Title</span>
              <br>
              <!-- end -->
            </div>

            <br>
            
            <br>
            <br>
            <!-- Video Title form -->
            <div class="textbox">
              
              
              <input type="text" id="description" name="description" required="required">
              <span>Video Description</span>
            </div>
                  <br><br>
            <div class="textbox">
              

              <br >
              
              <input type="text" id="watchid" name="watchid" required="required" style="margin-top: 0px;">
              <span>Embbeded Link Id (optional) </span>
            </div>
            <!-- end -->
            <br>
            <br>
            <!-- submit form -->
            <br><br><br><br><br>
            <button type="submit" name="upload" class="but-upload-video"> Upload Video</button>

          </form>
        </div>
      </div>

    </div>
    <div class="row justify-content-center">
    </div>
    </form>
    <?php

  if (isset($_REQUEST["upload"])) {
    $title = $_REQUEST["title"];
    $description = $_REQUEST["description"];
   // $video = $_REQUEST["video"];
    $insp = $_REQUEST["insp"];
    $emb = $_REQUEST["watchid"];

      $queryinsp = mysqli_query($conn, "SELECT id FROM inspirers WHERE name LIKE '".$insp."'");
      $rowrow = mysqli_fetch_row($queryinsp);

      $queryfield = mysqli_query($conn, "SELECT field_id FROM inspirers_fields WHERE inspirer_id = '".$rowrow[0]."'");
      $rowrow2 = mysqli_fetch_row($queryfield);
      $query = "INSERT INTO `social_post`(`title`, `description`, `post_inspirer_id`,`embbed`,`postFieldId`) VALUES ('$title','$description', '$rowrow[0]','$emb','$rowrow2[0]')";
    if (mysqli_query($conn, $query)) {
      echo "New record has been added successfully !";
    } else {
      echo "Error: " . $query . ":-" . mysqli_error($conn);
    }
  }
  ?>
    <br /><br />
  </div>
  <div class="col-md-12">
    <div class="row">


</body>

</html>