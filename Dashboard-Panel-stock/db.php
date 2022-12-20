
<?php

$con = mysqli_connect("localhost", "root", "", "stock");
if ($con->query("SET NAMES utf8") == FALSE) {
  echo "Can not change codec....</br>";
  exit();
}

?>