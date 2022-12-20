<?php

session_start();

?>
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

<body style="background-color: var(--panel-color);">
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
                <li><a href="#">
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
    <section class="dashboard" style="background-color: var(--panel-color);">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>


            <?php if (isset($_SESSION['first_name']) && isset($_SESSION['last_name'])) {
                echo "<a><img src='$_SESSION[image]' ></a>";
            } else {
                echo ("<a href='login.php'><i class='uil uil-signout' style='font-style: inherit;'>登入</i></a>");
            } ?>

        </div>

        <div class="dash-content" style="   margin-top:50px;padding-top: 0px; ">
            <span class="text" style="font-size: 28px; font-weight: 700;margin-right: auto; ">產業分類</span>
            <div class="boxes" style="display: -webkit-box;">

                <table class='content-table' style=" min-width: 100%;">

                    <form style="width:600px; margin-right: auto;" action="choose.php" method="post">
                        <div class="search-box">

                            <tr class='active-row'>
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="水泥工業">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="塑膠">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="食品">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="紡織">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="電機">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="化學">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="生技">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="玻璃">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="造紙">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="鋼鐵">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="橡膠">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="汽車">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="半導體">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="電腦">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="網路">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="電子零組件">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="電子通路">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="資訊服務">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="其他電子">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="營建">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="航運">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="觀光">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="金融">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="貿易百貨">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="油電燃氣">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="存託憑證">
                                <input name="input" type="submit" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋..." value="其他">


                            </tr>
                        </div>

                    </form>
                </table>
            </div>
        </div>
        <div>
            <span class="text" style="font-size: 28px; font-weight: 700;margin-right: auto; ">篩選個股</span>
            <div class="dash-content" style=" overflow: scroll; height: calc(50vh - 10px); width: calc(80vw - 10px);  margin-top:20px;padding-top: 0px; ">
                <div class="boxes" style="display: -webkit-box;">
                    <table class='content-table' style=" min-width: 100%;">
                        <form style="width:600px; margin-right: auto;" action="index.php" method="post">
                            <div class="search-box">

                                <tr class='active-row'>
                                    <?php


                                    require_once('conn.php');



                                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                        $input = $_POST['input'];

                                        $sql = "SELECT * FROM company WHERE  Industry_name LIKE '%" . $input . "%' ";
                                        $result = mysqli_query($con, $sql);

                                        if (mysqli_num_rows($result)) {
                                            while ($row = mysqli_fetch_assoc($result)) {

                                                echo "  <input name='input'  style=' margin-right:unset;' type='submit' class='form-control' list='datalistOptions' id='exampleDataList' placeholder='股票搜尋...' value='$row[stock]'>";
                                            }
                                        }
                                    } else {
                                        echo '';
                                    }


                                    //食品
                                    //塑膠
                                    //紡織
                                    //電機
                                    //電器電纜
                                    //化學
                                    //生技
                                    //玻璃
                                    //造紙
                                    //鋼鐵
                                    //橡膠
                                    //汽車
                                    //半導體
                                    //電腦週邊
                                    //光電
                                    //通訊網路
                                    //電子零組件
                                    //電子通路
                                    //資訊服務
                                    //其他電子
                                    //營建
                                    //航運
                                    //觀光
                                    //金融業
                                    //貿易百貨
                                    //油電燃氣
                                    //存託憑證
                                    //ETF
                                    //受益證券
                                    //ETN
                                    //創新板
                                    //其他
                                    ?>
                                </tr>
                            </div>

                        </form>
                    </table>
                </div>
            </div>
        </div>
    </section>





    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type='text/javascript' src='news.js'></script>






















    </div>

    </div>


</body>

</html>