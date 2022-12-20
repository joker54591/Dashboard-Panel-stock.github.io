<?php
session_start();

require_once('conn.php');





  $sql = "SELECT * FROM person  ";
  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
      
      echo '<span class="data-list"> '.$row['COL 2'].' </span>';
      echo ' <div class="activity-data"> '.$row['COL 3'].' </div>';
  
    
    }
  } else {
    echo '<p> 找不到 </p>';
  }
