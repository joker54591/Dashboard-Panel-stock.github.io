<?php







include_once "sign.php"
?>

<html>

<body>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta charset="utf-8">

        <title>註冊</title>

        <link rel="stylesheet " href="css/sign.css">
    </head>

    <div class="center">
        <h1>使用者註冊</h1>

        <form method="post" enctype="multipart/form-data">
            <div class="txt_field">

                <input class="form-control" id="firstname" type="text" name="firstname" required>
                <span></span>
                <label for="firstname"><b>姓氏</b></label>
            </div>
            <div class="txt_field">

                <input class="form-control" id="lastname" type="text" name="lastname" required>
                <span></span>
                <label for="lastname"><b>名字</b></label>
            </div>
            <div class="txt_field">

                <input class="form-control" id="phonenumber" type="text" name="phonenumber" required>
                <span></span>
                <label for="phonenumber"><b>手機號碼</b></label>
            </div>
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
            <div class="txt_field">


                <input type="file" name="image" required>


                <span></span>

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

                <input href="index.php" type="submit" value="註冊" name="upload">
                <div class="signup_link">
                    註冊過了? <a href="login.php">登入</a>
                </div>
        </form>
</body>

</html>