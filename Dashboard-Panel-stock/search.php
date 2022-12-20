<?php
session_start();

require_once('conn.php');



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $input = $_POST['input'];

  $sql = "SELECT * FROM company WHERE  stock LIKE '%" . $input . "%' ";
  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
      $_SESSION['stock'] = $row['stock'];
      echo '<option    class="list-group"> ' . $row['stock']   .  '   </option>';
    }
  }
} else {
  echo '找不到';
}
