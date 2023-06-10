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
                        <h1 class="Description-Upload">Add Inspirer</h1>

                        <!-- end -->


                        <!-- choose inspirer form -->
                        <?php
              $query4 = "SELECT fieldName FROM fields";
              $result = $conn->query($query4);
              if ($result->num_rows > 0) {
                $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
              }
              ?>
                        <select name="insp" class="btn">
                            <option style="background-color: #AEC69F;">Select Field</option>
                            <?php
                foreach ($options as $option) {
                  ?>
                            <option style="background-color: #AEC69F;">
                                <?php echo $option['fieldName']; ?>
                            </option>
                            <?php
                }
                ?>
                        </select>
                        <!-- end -->
                </div>

                <!-- Video key word form -->
                <div class="textbox">

                    <input type="text" id="title" name="title" required="required">
                    <span>Inspirer Name</span>
                    <br>
                    <!-- end -->
                </div>
                <br>
                <!-- Video Title form -->
                <div class="textbox">
                    <br>
                    <input type="text" id="description" name="description" required="required">
                    <span>About me (optional)</span>
                </div>

                <!-- end -->
                <br>
                <br>

                <!-- submit form -->
                <button type="submit" name="upload" class="but-upload-video">Add</button>

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
    $field = $_REQUEST["insp"];

      $queryfieldid = mysqli_query($conn, "SELECT fieldId FROM fields WHERE fieldName LIKE '".$field."'");
      $getfId = mysqli_fetch_row($queryfieldid);

  
      
      
      $query = "INSERT INTO `inspirers`(`name`, `description`, `fields`) VALUES ('$title','$description','$field')";
    
    if (mysqli_query($conn, $query)) {
      echo "New record has been added successfully !";
    } else {
      echo "Error: " . $query . ":-" . mysqli_error($conn);
    }
    $getId = mysqli_query($conn,"SELECT id FROM inspirers WHERE name LIKE '".$title."'");
    $rowrow = mysqli_fetch_row($getId);
    $query2 = "INSERT INTO `inspirers_fields`(`inspirer_id`, `field_id`, `field_name`) VALUES ('$rowrow[0]','$getfId[0]','$field')";
      mysqli_query($conn, $query2);
  }
  ?>
    <br /><br />
    </div>
    <div class="col-md-12">
        <div class="row">


</body>

</html>