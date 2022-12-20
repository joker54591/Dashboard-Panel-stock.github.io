<?php
$con  = mysqli_connect('localhost','root','','datatable_example');
if($con->query("SET NAMES utf8")==FALSE)
{
   echo "Can not change codec....</br>";
   exit();
} 
