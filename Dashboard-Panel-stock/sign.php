<?php
session_start();

include("db.php");
include("functions.php");
if (isset($_POST['upload'])) {

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];

    $folder = "images/";


    /* new file size in KB */

    /* new file size in KB */

    /* make file name in lower case */
    $new_file_name = strtolower($file);
    /* make file name in lower case */

    $final_file = str_replace(' ', '-', $new_file_name);
    $img_upload_path1 = 'images/' . $final_file;
    if (move_uploaded_file($file_loc, $folder . $final_file)) {


        echo "File sucessfully upload";
    } else {

        echo "Error.Please try again";
    }
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $user_name = $_POST['user_name'];
    $password = md5($_POST['password']);







    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        //read from database
        $query = "select * from login where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);






        //save to database
        $user_id = random_num(20);

        $query = "insert into login (user_id,firstname,lastname,phonenumber,user_name,password,image) values ('$user_id','$firstname','$lastname','$phonenumber','$user_name','$password','$img_upload_path1')";
        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['user_name'] === $user_name) {



                    echo "<script href>alert('註冊過!')</script>";

                    $url = "signup.php";
                    echo "<script type='text/javascript'>";
                    echo "window.location.href='$url'";
                    echo "</script>";
                    exit();
                }
            }
        }


        mysqli_query($con, $query);
        echo "<script>alert('註冊成功!')</script>";
        $url = "login.php";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>";
    } else {
        echo "<script>alert('註冊失敗')</script>";
    }
}
