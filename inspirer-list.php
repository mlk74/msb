<!doctype html><?php

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
  <script>function changeName()
   {

       document.getElementById[unfbutton].innerHTML += "Done";
   }</script>
 
  
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
          
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Snippet - BBBootstrap</title>
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='#' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                } body {
                                      background: #eee;
                                    }

                                    .followers {
                                      font-size: 12px;
                                    }</style>
                                </head>
                                <body className='snippet-body'>
                                <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-6">
                <div class="p-3 bg-white text-center">
                    <div><!-- logo-->
                        <h1>Following Inspirers </h1>
                    </div>
                    <p><br><br></p>
                    <?php
          
          $query = "SELECT user_id, inspirers.id, name,fields FROM `inspirer_follow` LEFT JOIN `inspirers`
           ON user_id=inspirers.id WHERE inspirer_follow.follower_id='".$_SESSION["User_ID"]."' ORDER BY user_id";
          $res = mysqli_query($conn,$query); 
      
    
          while($row = mysqli_fetch_array($res)){
         
            echo"<div class='d-flex flex-row justify-content-between align-items-center'> 
            
            <div class='d-flex flex-row align-items-center'
            ><img class='rounded-circle' 
            src='assets/images/technology.png'
            width='55'>
             <div class='d-flex flex-column align-items-start ml-2'>";
               
             $rowname=$row['name'];
             $rowfields=$row['fields'];
                  echo "<span class='font-weight-bold'>$rowname</span>";
                 
             
               echo" <span class='followers'>$rowfields</span></div>
            </div>
            <!-- folo button-->
            
            <div class='d-flex flex-row align-items-center mt-2'>";
            $query2 = "SELECT * FROM inspirer_follow, users, inspirers WHERE users.id = '".$_SESSION["User_ID"]."'  AND user_id = inspirers.id AND users.id = follower_id ";
            $res2 = mysqli_query($conn,$query2);
            if (mysqli_num_rows($res2) > 0){
              echo "<form method='post'>";
              echo "<input class='btn' id='unfbutton' type='submit' name='delete' value='Unfollow'  onclick='changeName()' />";   // Appears when user is already following
              echo "</form>";
            }
            else{
              echo "<form method='post'>";
              echo "<input class='btn' type='submit' name='insert' value='Follow' />";   // Appears when user is not following
              echo "</form>";
            }
            
        echo "</div>";
            
            
            
            // Database - Follow Function
            if(isset($_POST['insert'])) {
              $query3 = "INSERT INTO `inspirer_follow`(`user_id`, `follower_id`) VALUES ('" . $row["user_id"] . "','" . $_SESSION["User_ID"] . "')";
                  if (mysqli_query($conn, $query3)) {
                    echo 'Done';
                  }
              } else if (isset($_POST['delete'])){
                $query3 = "DELETE FROM `inspirer_follow` WHERE `user_id` =  '" . $row["user_id"] . "' AND `follower_id` = '" . $_SESSION["User_ID"] . "'";
                if (mysqli_query($conn, $query3)) {
                }
        }

        }?>
    
  
  
    
                  
                  <?php
                  
               ?>   
                    
                    
                </div>
            </div>
        </div>
    </div>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
                            
                                </body>
                            </html>