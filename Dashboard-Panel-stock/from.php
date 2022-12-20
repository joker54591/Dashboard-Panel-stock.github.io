<?php

session_start();

?>
<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>stock</title>
</head>

<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/0711.jpg.crdownload" alt="">
            </div>

            <span class="logo_name">台灣股市</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="index.php">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">首頁</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-backspace"></i>
                        <span class="link-name">台股大盤</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-money-bill"></i>
                        <span class="link-name">國際金融</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-newspaper"></i>
                        <span class="link-name">新聞</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-check-circle"></i>
                        <span class="link-name">選股</span>
                    </a></li>

            </ul>

            <ul class="logout-mode">
                <li><a href="#">
                        <i></i>
                        <span class="link-name"><?php if (isset($_SESSION['first_name']) && isset($_SESSION['last_name'])) {


                                                    echo ("<a href='login.php'><i class='uil uil-user' style='font-style: inherit;'>$_SESSION[first_name]$_SESSION[last_name]先生&小姐</i></a>");

                                                    echo ("<a href='logout.php'><i class='uil uil-signout' style='font-style: inherit;'>登出</i></a>");
                                                } else {
                                                    echo ("<a href='login.php'><i class='uil uil-signout' style='font-style: inherit;'>登入</i></a>");
                                                } ?></span>
                    </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <form style="width:600px;" action="from.php" method="post">
                <div class="search-box">
                    <i class="uil uil-search"></i>
                    <input name="input" type="text" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋...">
                    <datalist class="list" id="datalistOptions">
                        <option class="list-group"></option>

                    </datalist>

                </div>

            </form>

            <a href="login.php"><img src="images/0712.png" alt=""></a>

        </div>




        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-moneybag"></i>
                    <span class="text" style="font-size: 40px;"> <?php if (isset($_SESSION['company_name']))
                                                                        echo ($_SESSION['company_name']);
                                                                    else {
                                                                        echo '2330台灣積體電路製造';
                                                                    } ?></span>
                </div>
                <div class="dash-content">
                    <div class="btn-box" style=" 
                    border-bottom: 1px solid #ccc;  ">
                        <button onclick="showPanel(0,'#ff9f56');" class="btn"><i style="font-style:inherit; " class=" uil uil-arrows-up-right">歷史走勢</i></button>
                        <button onclick="showPanel(1,'#ff9f56')" class="btn"><i style="font-style:inherit;" class=" uil uil-card-atm">股利發放</i></button>
                        <button onclick="showPanel(2,'#ff9f56')" class="btn"><i style="font-style:inherit;" class=" uil uil-money-withdrawal">籌碼分析</i></button>
                        <button onclick="showPanel(3,'#ff9f56')" class="btn"><i style="font-style:inherit;" class=" uil uil-database-alt">基本資料</i></button>
                        <button onclick="showPanel(4,'#ff9f56')" class="btn"><i style="font-style:inherit;" class=" uil uil-money-stack">財務營收</i></button>



                        <div class="boxes">


                            <div id="container2" class="box box2" style="margin: auto; width:100%; height:500px;   border-radius: 0px; background-color:white;  ">


                            </div>

                            <div class="activity">
                                <div class="title">
                                    <i class="uil uil-clock-three"></i>

                                </div>

                                <div class="activity">
                                    <div class="title">
                                        <i class="uil uil-clock-three"></i>

                                    </div>

                                    <div class="activity-data" style="background: #F8F8FF; text-align: end; text-indent: 75px; margin-right:auto; display:flex; justify-content:space-between; align-items:center; ">
                                        <div class="data status" style=" background: #F8F8FF;">
                                            <div class='data names' style="background-color: #4da3ff;"><span class='data-list' style="font-weight:900; color:#fff">年度</span></div>



                                            <?php require_once('conn.php');
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                $input = $_POST['input'];

                                                $sql = "SELECT * FROM investors  WHERE stock LIKE '%" . $input . "%' ";
                                                $result = mysqli_query($con, $sql);

                                                if (mysqli_num_rows($result)) {
                                                    while ($row = mysqli_fetch_assoc($result)) {


                                                        echo "<div class='data names' ><span class='data-list'>$row[date]</span> </div>";
                                                    }
                                                }
                                            } else {
                                                echo '<p> 找不到 </p>';
                                            }
                                            ?>

                                        </div>
                                        <div class=" data status" style=" background: #F8F8FF">
                                            <div class='data names' style="background-color: #4da3ff;"><span class='data-list' style="font-weight:900; color:#fff">盈餘配息(元)</span></div>



                                            <?php require_once('conn.php');
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                $input = $_POST['input'];

                                                $sql = "SELECT * FROM investors  WHERE stock LIKE '%" . $input . "%' ";
                                                $result = mysqli_query($con, $sql);

                                                if (mysqli_num_rows($result)) {
                                                    while ($row = mysqli_fetch_assoc($result)) {


                                                        echo "<div class='data names' ><span class='data-list'>$row[money]</span> </div>";
                                                    }
                                                }
                                            } else {
                                                echo '<p> 找不到 </p>';
                                            }
                                            ?>

                                        </div>
                                        <div class="data status" style=" background: #F8F8FF">
                                            <div class='data names' style="background-color: #4da3ff;"><span class='data-list' style="font-weight:900; color:#fff">盈餘配股(元)</span></div>



                                            <?php require_once('conn.php');
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                $input = $_POST['input'];

                                                $sql = "SELECT * FROM investors  WHERE stock LIKE '%" . $input . "%' ";
                                                $result = mysqli_query($con, $sql);

                                                if (mysqli_num_rows($result)) {
                                                    while ($row = mysqli_fetch_assoc($result)) {


                                                        echo "<div class='data names' ><span class='data-list'>$row[money1]</span> </div>";
                                                    }
                                                }
                                            } else {
                                                echo '<p> 找不到 </p>';
                                            }
                                            ?>

                                        </div>

                                        <div class="data status" style=" background: #F8F8FF">
                                            <div class='data names' style="background-color: #4da3ff;"><span class='data-list' style="font-weight:900; color:#fff">除息日</span></div>



                                            <?php require_once('conn.php');
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                $input = $_POST['input'];

                                                $sql = "SELECT * FROM investors  WHERE stock LIKE '%" . $input . "%' ";
                                                $result = mysqli_query($con, $sql);

                                                if (mysqli_num_rows($result)) {
                                                    while ($row = mysqli_fetch_assoc($result)) {


                                                        echo "<div class='data names' ><span class='data-list'>$row[money2]</span> </div>";
                                                    }
                                                }
                                            } else {
                                                echo '<p> 找不到 </p>';
                                            }
                                            ?>

                                        </div>

                                        <div class="data status" style=" background: #F8F8FF">
                                            <div class='data names' style="background-color: #4da3ff;"><span class='data-list' style="font-weight:900; color:#fff">除權日</span></div>



                                            <?php require_once('conn.php');
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                $input = $_POST['input'];

                                                $sql = "SELECT * FROM investors  WHERE stock LIKE '%" . $input . "%' ";
                                                $result = mysqli_query($con, $sql);

                                                if (mysqli_num_rows($result)) {
                                                    while ($row = mysqli_fetch_assoc($result)) {


                                                        echo "<div class='data names' ><span class='data-list'>$row[money3]</span> </div>";
                                                    }
                                                }
                                            } else {
                                                echo '<p> 找不到 </p>';
                                            }
                                            ?>

                                        </div>
                                        <div class="data status" style=" background: #F8F8FF">
                                            <div class='data names' style="background-color: #4da3ff; "><span class='data-list' style="font-weight:900; color:#fff">領息日期</span></div>



                                            <?php require_once('conn.php');
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                $input = $_POST['input'];

                                                $sql = "SELECT * FROM investors  WHERE stock LIKE '%" . $input . "%' ";
                                                $result = mysqli_query($con, $sql);

                                                if (mysqli_num_rows($result)) {
                                                    while ($row = mysqli_fetch_assoc($result)) {


                                                        echo "<div class='data names' ><span class='data-list'>$row[money4]</span> </div>";
                                                    }
                                                }
                                            } else {
                                                echo '<p> 找不到 </p>';
                                            }
                                            ?>

                                        </div>
                                        <div class="data status" style=" background: #F8F8FF">
                                            <div class='data names' style="background-color: #4da3ff; "><span class='data-list' style="font-weight:900; color:#fff">股東會日期</span></div>



                                            <?php require_once('conn.php');
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                $input = $_POST['input'];

                                                $sql = "SELECT * FROM investors  WHERE stock LIKE '%" . $input . "%' ";
                                                $result = mysqli_query($con, $sql);

                                                if (mysqli_num_rows($result)) {
                                                    while ($row = mysqli_fetch_assoc($result)) {


                                                        echo "<div class='data names' ><span class='data-list'>$row[money5]</span> </div>";
                                                    }
                                                }
                                            } else {
                                                echo '<p> 找不到 </p>';
                                            }
                                            ?>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="boxes" id="content1">
                        <div style="background-color: white;">
                            <div class="box box2" style=" width: 60%;background-color: white;  ">
                                <span class="text" style="font-size: 28px; font-weight: 700;margin-right: auto;">歷年股利分配</span>
                                <span class="number"></span>


                                <canvas id="myChart"></canvas>







                                <div class="activity">


                                    <div class="activity-data" style="background: #F8F8FF; text-align: end; text-indent: 75px; margin-right:auto; display:flex; justify-content:space-between; align-items:center; ">




                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boxes" id=" content2">
                        <div class=" box box3" style="margin: auto; width:100%; height:500px ">
                            <span class="number">公司基本資料</span>
                            <span class="text" style="margin-right: auto;"><?php if (isset($_SESSION['stock'])) {
                                                                                echo "股票代號:  $_SESSION[stock]<br>" . "公司地址:  $_SESSION[addres]<br>" . "經營項目:  $_SESSION[business_project]<br>" . "公司信箱:  $_SESSION[email]<br>" . "成立年數:  $_SESSION[Continuedyear]年<br>"
                                                                                    . "市內電話:  $_SESSION[phone]<br>" . "成立日期(西元):  $_SESSION[year]<br>" . "董事長:  $_SESSION[Chairman]<br>" . "發言人:  $_SESSION[spokesman]<br>" . "實收資本額(百萬):  $_SESSION[capital_millions]<br>"
                                                                                    . "公司網站:  $_SESSION[URL]<br>" . "股票過戶機構:  $_SESSION[stock_transfer_agency]<br>" . "	
                                                                            產業名稱:  $_SESSION[Industry_name]<br>" . "	
                                                                            交易所普通股股本(千):  $_SESSION[Common]<br>" . "	
                                                                            簽證會計師事務所:  $_SESSION[Visa]<br>";
                                                                            } else {
                                                                                echo '未搜尋';
                                                                            } ?></span>


                        </div>

                    </div>
                </div>

            </div>

        </div>






        </div>








        </div>

        </div>
        </div>






        </div>

        </div>

        </div>
        </div>
    </section>




    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type='text/javascript' src='revenue.js'></script>
    <script type='text/javascript' src='search.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <?php require_once('test1 copy.php') ?>
    <?php require_once('0714.php') ?>


    <script>
        var tabButtons = document.querySelectorAll(".dash-content .btn-box button");
        var tabPanels = document.querySelectorAll(".dash-content  .boxes");

        function showPanel(panelIndex, colorCode) {
            tabButtons.forEach(function(node) {
                node.style.backgroundColor = "";
                node.style.color = "";
            });
            tabButtons[panelIndex].style.backgroundColor = colorCode;
            tabButtons[panelIndex].style.color = "white";
            tabPanels.forEach(function(node) {
                node.style.display = "none";
            });
            tabPanels[panelIndex].style.display = "block";
            tabPanels[panelIndex].style.backgroundColor = colorCode;
        }
        showPanel(0, 'orange');
    </script>





    </div>

    </div>


</body>

</html>