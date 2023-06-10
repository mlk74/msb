<?php
          
          $query = "SELECT * FROM `inspirer_follow` WHERE user_id = '".$_SESSION["User_ID"]."' ";
          $result = mysql_query($query) or die(mysql_error());
          $row = mysql_fetch_array($result);
          
          while($row){
              echo $row['name']. " - ". $row['age'];
              echo "<br />";
          }
      ?>
     
     $query = "SELECT * FROM inspirer_follow"; 

$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);

while($row){
    echo $row['name']. " - ". $row['age'];
    echo "<br />";
}





while($row = mysqli_fetch_array($res)){
            echo"<div class='d-flex flex-row justify-content-between align-items-center'> 
            
            <div class='d-flex flex-row align-items-center'
            ><img class='rounded-circle'
            src='https://i.imgur.com/KmT515u.jpg'
            width='55'>
                <div class='d-flex flex-column align-items-start ml-2'>
                  <span class='font-weight-bold'>$row[name] </span>
                <span class='followers'>##folor</span></div>
            </div>
            <!-- folo button-->
            <div class='d-flex flex-row align-items-center mt-2'>
              <button class='btn btn-outline-primary btn-sm'
               type='button'>Follow</button></div>
        </div>
            
            
            ";
            

        }
    }