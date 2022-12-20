<?php

require_once('conn.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($con, "DELETE FROM `demo` WHERE `id`='$id'");

    $run = mysqli_query($con, $query);
    if ($run) {
        header('location:star.php');
    } else {
        header('location:star.php');
    }
}
