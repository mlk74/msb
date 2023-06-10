<?php

  // connect to your database
  $con = mysqli_connect("localhost","root","","ms-f");
  $search = $_GET['search'];
  $query = "SELECT * FROM `social_post`WHERE title LIKE '%$search%' OR description LIKE '%$search%'";

  $result = mysqli_query($con,$query);

  if(mysqli_num_rows($result)==0){
    echo "<tr><td colspan='2'>No records found!</td></tr>";
    exit;
  }
if($search!=''){
  echo " <tr class ='search-res'> <th style='color:#57cbcc;'>";
 
  echo "Video Title </th>";
  echo"<th style='color:#57cbcc;'>";
  echo "Discretion</th> </tr>";
  while($data = mysqli_fetch_assoc($result))
  {
    echo"<tr style='color:#FFFFFF;'>
   
     <th> 
     <a class='link-post-search' href='../../view_post_from_search.php?rid=$data[id]'>$data[title]</a> </th>
     <td>$data[description]</td>
    </tr>";
  }
}

?>
