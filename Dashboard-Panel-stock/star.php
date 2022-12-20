<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>stock</title>
    <link rel="stylesheet" href="css/choose.css">
</head>

<body style="    background-color: var(--panel-color);">
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/0711.png" alt="">
            </div>

            <span class="logo_name">股票行情視覺化</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="index.php">
                        <i class="uil uil-search"></i>
                        <span class="link-name">個股搜尋</span>
                    </a></li>
                <li><a href="Stock_index.php">
                        <i class="uil uil-backspace"></i>
                        <span class="link-name">台股大盤</span>
                    </a></li>
                <li><a href="Stock_globe.php">
                        <i class="uil uil-money-bill"></i>
                        <span class="link-name">國際金融</span>
                    </a></li>
                <li><a href="news.php">
                        <i class="uil uil-newspaper"></i>
                        <span class="link-name">公司公告</span>
                    </a></li>
                <li><a href="choose.php">
                        <i class="uil uil-check-circle"></i>
                        <span class="link-name">篩選個股</span>
                    </a></li>
                <?php if (isset($_SESSION['first_name']) && isset($_SESSION['last_name'])) {
                    echo  "<li><a href='star.php'>
                         <i class='uil uil-star'></i>
                         <span class='link-name'>自選清單</span>
                     </a></li>";
                } else {
                    echo  "<li><a href='login.php'>
                        <i class='uil uil-star'></i>
                        <span class='link-name'>自選清單(請登入)</span>
                    </a></li>";
                };

                ?>
            </ul>

            <ul class="logout-mode">
                <li><a href="#">
                        <i></i>
                        <span class="link-name"><?php if (isset($_SESSION['first_name']) && isset($_SESSION['last_name'])) {


                                                    echo ("<a href='login.php'><i class='uil uil-user' style='font-style: inherit;'>$_SESSION[first_name]$_SESSION[last_name]會員</i></a>");

                                                    echo ("<a href='logout.php'><i class='uil uil-signout' style='font-style: inherit;'>登出</i></a>");
                                                } else {
                                                    echo ("<a href='login.php'><i class='uil uil-signout' style='font-style: inherit;'>登入</i></a>");
                                                } ?></span>
                    </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">深色模式</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard" style="display: inline; ">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>


            <?php if (isset($_SESSION['first_name']) && isset($_SESSION['last_name'])) {
                echo "<a><img src='$_SESSION[image]' ></a>";
            } else {
                echo ("<a href='login.php'><i class='uil uil-signout' style='font-style: inherit;'>登入</i></a>");
            } ?>

        </div>




        <div class="dash-content" style="padding: 0px;">
            <div class="overview">


                <div class="dash-content">
                    <div> </div>
                    <div class="boxes" id="content1">
                        <div id="ad"><img src="images/aeust.png" alt="" style="border: 1px solid #525252;border-radius: 8px;padding: 20px; background-color:#525252;width: 900px;"></div>
                    </div>
                    <div class="boxes" id="content1">
                        <div id="ad1"><img src="images/aeust1.png" alt="" style="border: 1px solid #ddd;border-radius: 8px;padding: 20px; background-color:#525252;width: 900px;"></div>
                    </div>
                    <div class="title" style="display: flex;">

                        <i class="uil uil-star"></i>
                        <span class="text" style="font-size: 28px; font-weight: 700;margin-right: auto; ">自選清單</span>
                    </div>

                    <div class="star">
                        <div class='star1' style="display: flex; text-indent: 20px;">
                            <div class='star2'>股票名稱</div>
                            <div class='star2'>日期</div>
                            <div class='star2'>收盤價</div>
                            <div class='star2'>刪除</div>


                        </div>
                        <div style='overflow: scroll; height: calc(70vh - 10px); margin-top:20px '>
                            <?php






                            require_once('conn.php');


                            if (isset($_POST['save_multiple_checkbox'])) {
                                $brands = $_POST['brands'];
                                $user_id = $_POST['user_id'];
                                $close = $_POST['close'];
                                $date = $_POST['date'];


                                // echo $brands;

                                foreach ($brands as $item) {

                                    $query = "select * from demo where name = '$item' limit 1";
                                    $result = mysqli_query($con, $query);
                                    // echo $item . "<br>";



                                    if ($result) {
                                        if ($result && mysqli_num_rows($result) > 0) {

                                            $user_data = mysqli_fetch_assoc($result);
                                            if ($user_data['name'] !== $item && $user_data['user_id'] == $user_id) { {
                                                    echo "<script href>alert('加入過!')</script>";

                                                    $url = "index.php";
                                                    echo "<script type='text/javascript'>";
                                                    echo "window.location.href='$url'";
                                                    echo "</script>";
                                                    exit();
                                                }
                                            } else {
                                                echo "<script href>alert('加入過!')</script>";

                                                $url = "index.php";
                                                echo "<script type='text/javascript'>";
                                                echo "window.location.href='$url'";
                                                echo "</script>";
                                                exit();
                                            }
                                        }
                                        $query = "INSERT INTO demo (user_id,name,close,date) VALUES ('$user_id','$item', '$close','$date')";
                                        $query_run = mysqli_query($con, $query);
                                        echo "<script href>alert('加入成功!')</script>";

                                        $url = "index.php";
                                        echo "<script type='text/javascript'>";
                                        echo "window.location.href='$url'";
                                        echo "</script>";
                                    }


                                    // echo $item . "<br>";

                                }
                            } else {
                                echo '';
                            }








                            require_once('conn.php');





                            $sql = "SELECT * FROM demo WHERE  user_id  LIKE '%" . $_SESSION['user_id'] . "%' ";
                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $_SESSION['name'] = $row['name'];

                                    echo " <div class='star1' ><form style='width:600px; margin-right: auto;display: flex;'' action='index.php' method='post'> <input name='input'  style=' border: thin; margin-right:unset;' type='submit' class='form-control' list='datalistOptions' id='exampleDataList' placeholder='股票搜尋...' value='$row[name]'><div class='star2'>$row[date]</div><div class='star2'> $row[close]</div><a class='delet' href='delet.php?id=" . $row['id'] . "' id='btn'>刪除</a></form></div>";
                                }
                            } else {
                                echo '';
                            }





                            ?>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </section>




    <script src=" script.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type='text/javascript' src='revenue.js'></script>
    <script type='text/javascript' src='search.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</body>

</html>