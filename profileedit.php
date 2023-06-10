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

.about{
  color: black;
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
              <!-- <img src="assets/images/logo.png" class="logo"/> -->
                
          </div>
        
          
        </div>
        
              
            </div>
            
            <section class="h-100 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card">
          <div class="rounded-top text-white d-flex flex-row" style="background-color:#AEC69F; height:250px;">
          <form action="profile.php"method='post' style="height: 15px">
               <input class='btn' type='submit' value='Go Back' style="bottom:0" />
          </form>
            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
              <img src="assets/images/profilepage.png"
                alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                style="width: 150px; z-index: 1">
              <!-- <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                style="z-index: 1;">
                Edit profile
              </button> -->
            </div>
            <!-- Name  -->
            <div class="ms-3" style="margin-top: 130px; margin-bottom: 150px;">
            

              <?php if(isset($_SESSION["User_NAME"])) {
                echo '
                <form action="Profile_update.php" method="post">
                fname: <input type="text" name="fname" placeholder="'.$_SESSION["User_NAME"].'"><br>
              
                city: <input type="text" name="city" placeholder="'.$_SESSION["User_City"].'"><br>
              
                
                <input type="submit" name="edit" value="Save">
                <br>
                <br>
                <br>
                
             </form>
                ';
                echo $_SESSION["User_NAME"]; } ?></h5>
              <!-- end -->
              <!-- City -->
              <?php 
              $queryc = "SELECT city FROM users WHERE id= '".$_SESSION["User_ID"]."'";
              $result1c = mysqli_query($conn, $queryc);
              $rowc = mysqli_fetch_row($result1c);
              
              ?>
              <p style="color:black;"><?php echo $rowc[0] ?></p>
              <!-- end -->
            </div>
          </div>

          <?php
 
 if(isset($_POST['edit']))
 {
    $id=$_SESSION['id'];
    $fname=$_POST['fname'];
    $city=$_POST['city'];
    
    $select= "select * from users where id= '".$_SESSION["User_ID"]."'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
   
       $update = "update users set fname='$fname',city='$city' where id='$id'";
       $sql2=mysqli_query($conn,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:profile.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:Profile_edit_form.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:Profile_edit_form.php');
    }
 }
?>
          <?php 


            $query = "SELECT COUNT(*) FROM inspirer_follow WHERE follower_id = '".$_SESSION["User_ID"]."'";
            $result1 = mysqli_query($conn, $query);
            $row = mysqli_fetch_row($result1);
            
            $query2 = "SELECT COUNT(*) FROM field_follow WHERE follower_id = '".$_SESSION["User_ID"]."'";
            $result2 = mysqli_query($conn, $query2);
            $row2 = mysqli_fetch_row($result2);
          
          
          ?>
          <div class="p-4 text-black" style="background-color: #f8f9fa;">
            <div class="d-flex justify-content-end text-center py-1">
              <!--Num-Fields & Inspirers Followed  -->
            <div>
            <a href="filed-folo.php"> <p class="Num-Fields-Followed"><?php echo $row2[0] ?></p></a>
                <p class="small text-muted mb-0">Fields Followed</p>
              </div>
              <div class="px-3">
             <a href="inspirer-list.php"><p class="Num-Inspirers-Followed"><?php echo $row[0] ?></p></a>
                <p class="small text-muted mb-0">Inspirers Followed</p>
              </div>
                    <!-- end -->
              <div>
                
              </div>
            </div>
          </div>
     <!--     <div class="card-body p-4 text-black">
            <div class="mb-5">
              <p class="lead fw-normal mb-1"><span class="about"style="color:black;">About</span></p>
              <div class="p-4" style="background-color: #f8f9fa;">
              <-- user's description  --
                <p class="font-italic mb-1">Web Developer</p>
                <-- end 
              </div>
            </div>
           
            
             
            </div> -->
            
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

            
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
