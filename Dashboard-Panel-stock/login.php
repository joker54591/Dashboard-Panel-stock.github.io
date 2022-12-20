<?php

session_start();

include("db.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = md5($_POST['password']);

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        //read from database
        $query = "select * from login where user_name = '$user_name' limit 1";

        $result = mysqli_query($con, $query);

        if ($result) {








            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);




                if ($user_data['password'] === $password) {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    $_SESSION['first_name'] = $user_data['firstname'];
                    $_SESSION['last_name'] = $user_data['lastname'];



                    $_SESSION['image'] = $user_data['image'];


                    header("Location: index.php");
                    die;
                }
            }
        }

        echo "<script>alert('帳號或密碼錯誤')</script>";
    } else {
        echo "<script>alert('帳號或密碼錯誤')</script>";
    }
}

?>
<html>

<body>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta charset="utf-8">

        <title>登入</title>

        <link rel="stylesheet " href="css/login.css">
    </head>

    <div class="center">
        <h1>使用者登入</h1>

        <form method="post">
            <div class="txt_field">

                <input type="email" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <span></span>
                <label for="exampleInputEmail1" class="form-label">電子郵件</label>
            </div>
            <div class="txt_field">


                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                <span></span>
                <label for="exampleInputPassword1" class="form-label">密碼</label>
            </div>
            <div class="but">
                <input type="checkbox" onclick="myFunction()">顯示密碼

                <script>
                    function myFunction() {
                        var x = document.getElementById("exampleInputPassword1");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>

                <input href="index.php" type="submit" value="登入">

                <div class="signup_link">
                    沒有帳號? <a href="signup.php">註冊</a>
                    <a href="index.php">回首頁</a>
                </div>

        </form>
    </div>



</body>

</html>