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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>stock</title>
</head>

<body>
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
                <li><a href="#">
                        <i class="uil uil-user"></i>
                        <span class="link-name">新手Q&A</span>
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

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <form style="width:600px; margin-right: auto;" action="index.php" method="post">
                <div class="search-box">
                    <i class="uil uil-search"></i>
                    <input name="input" type="text" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="股票搜尋...">
                    <datalist class="list" id="datalistOptions">
                        <option class="list-group"></option>

                    </datalist>

                </div>

            </form>

            <?php if (isset($_SESSION['first_name']) && isset($_SESSION['last_name'])) {
                echo "<a><img src='$_SESSION[image]' ></a>";
            } else {
                echo ("<a href='login.php'><i class='uil uil-signout' style='font-style: inherit;'>登入</i></a>");
            } ?>

        </div>




        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-estate"></i>
                    <span class="text" class="text"> <?php


                                                        require_once('conn.php');






                                                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                            $input = $_POST['input'];

                                                            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

                                                            $result = mysqli_query($con, $sql);

                                                            if (mysqli_num_rows($result)) {
                                                                while ($row = mysqli_fetch_assoc($result)) {



                                                                    $_SESSION['stock'] = $row['stock'];



                                                                    echo " $row[stock] ";
                                                                }
                                                            }
                                                        } else {
                                                            echo $_SESSION['stock'] = '2330台積電';
                                                        } ?></span>
                </div>
                <div><?php if (isset($_SESSION['first_name']) && isset($_SESSION['last_name']) && isset($_SESSION['close']) && isset($_SESSION['date'])) {
                            echo "  <form action='star.php' method='POST'>
                    <input type='checkbox' style='display: none;' class='btn btn-primary' name='brands[]' value='$_SESSION[stock]' checked > 


                    
                    <input type='checkbox' style='display: none;' class='btn btn-primary' name='close'  value='$_SESSION[close] 'checked>
                    <input type='checkbox' style='display: none;' class='btn btn-primary' name='date'  value='$_SESSION[date] 'checked>
                    <input type='checkbox' style='display: none;'' class='btn btn-primary' name='user_id'  value=' $_SESSION[user_id] 'checked>


                                                                                                                           
                                                                                                                 

                    <div class='form-group mb-3' style='margin-left: 280px;margin-top: -90px;'>
                        <button type='submit' name='save_multiple_checkbox' class='btn2'  ><i style='font-style:inherit; '  class='uil uil-star'>加入清單</i></button>
                    </div>
                </form>";
                        } else {
                            echo  "   <div class='form-group mb-3' style='margin-left: 280px;margin-top: -90px;'>
                            <button  onclick=location.href='login.php'  type='submit' name='save_multiple_checkbox' class='btn2' style='
                            display: none;
                        '  ><i style='font-style:inherit; '  class='uil uil-star'>加入清單</i></button>
                        </div>
                        ";
                        } ?>
                </div>
                <div class="dash-content">
                    <div class="btn-box">
                        <button onclick="showPanel(0,'#ff9f56');" class="btn"><i style="font-style:inherit; " class=" uil uil-arrows-up-right">歷史走勢</i></button>
                        <button onclick="showPanel(1,'#ff9f56')" class="btn"><i style="font-style:inherit;" class=" uil uil-card-atm">股利發放</i></button>
                        <button onclick="showPanel(2,'#ff9f56')" class="btn"><i style="font-style:inherit;" class=" uil uil-money-withdrawal">籌碼分析</i></button>
                        <button onclick="showPanel(3,'#ff9f56')" class="btn"><i style="font-style:inherit; " class=" uil uil-database-alt">基本資料</i></button>
                        <button onclick="showPanel(4,'#ff9f56')" class="btn"><i style="font-style:inherit;" class=" uil uil-money-stack">資產負債</i></button>
                        <button onclick="showPanel(5,'#ff9f56')" class="btn"><i style="font-style:inherit;" class=" uil uil-money-stack">財務營收</i></button>
                        <button onclick="showPanel(6,'#ff9f56')" class="btn"><i style="font-style:inherit;" class=" uil uil-money-stack">財務比率</i></button>
                        <div style="border-bottom: 2px solid #d7d7d7; margin-top:-1px"></div>


                        <div class="boxes">



                            <div id="container2" class="he" style=" width:100%; height:500px; border-radius: 0px; background-color:white;  ">
                            </div>


                        </div>



                        <div class="boxes" id="content1">

                            <div style="background-color: white;  background-color: var(--panel-color);" class="va">
                                <div class="box box2" style="background-color: white;  background-color: var(--panel-color);  width:100%">
                                    <span class="text" style="font-size: 28px; font-weight: 700;margin-right: auto; ">歷年股利分配</span>
                                    <span class="number"></span>


                                    <canvas id="myChart" class="myChart"></canvas>



                                    <span class="text" style="font-size: 28px; font-weight: 700;margin-right: auto; ">歷年股利政策表</span>






                                    <?php require_once('cash.php') ?>




                                </div>
                            </div>
                        </div>
                        <div class="boxes" id=" content2">
                            <div style="background-color: white;  background-color: var(--panel-color);" class="va">
                                <div class="box box2" style="background-color: white;  background-color: var(--panel-color);  width:100%">
                                    <span class="text" style="font-size: 28px; font-weight: 700;margin-right: auto; ">法人買賣變化</span>
                                    <canvas id="myChart6" class="myChart6"></canvas>

                                    <span class="text" style="font-size: 28px; font-weight: 700;margin-right: auto; ">法人逐日買賣超</span>
                                    <?php require_once('chips.php') ?>
                                </div>
                            </div>
                        </div>
                        <div class="boxes" id=" content2">

                            <div style="background-color:white; background-color: var(--panel-color);">

                                <div class=" box box3" style=" width:100%;  background-color:white; background-color: var(--panel-color);">


                                    <div class='data names' style="background-color: white;background-color: var(--panel-color);"> <span class="text" style="font-size: 28px; font-weight: 700; background-color: var(--panel-color); ">公司基本資料</span></div>



                                    <?php require_once('information.php') ?>


                                </div>
                            </div>
                        </div>
                        <div class="boxes" id=" content2">
                            <div style="background-color: white;  background-color: var(--panel-color);" class="va">
                                <div class="box box2" style="background-color: white;  background-color: var(--panel-color);  width:100%">
                                    <span class="text" style="font-size: 28px; font-weight: 700;margin-right: auto; ">資產負債變化</span>
                                    <canvas id="myChart4" class="myChart6"></canvas>

                                    <span class="text" style="font-size: 28px; font-weight: 700;margin-right: auto; ">資產負債表格</span>
                                    <?php require_once('debt.php') ?>
                                </div>
                            </div>
                        </div>
                        <div class="boxes" id=" content2">
                            <div style="background-color: white;  background-color: var(--panel-color);" class="va">
                                <div class="box box2" style="background-color: white;  background-color: var(--panel-color);  width:100%">
                                    <span class="text" style="font-size: 28px; font-weight: 700;margin-right: auto; ">財務營收變化</span>
                                    <canvas id="myChart3" class="myChart6"></canvas>

                                    <span class="text" style="font-size: 28px; font-weight: 700;margin-right: auto; ">財務營收表格</span>
                                    <?php require_once('month.php') ?>
                                </div>
                            </div>
                        </div>
                        <div class="boxes" id=" content2">
                            <div style="background-color: white;  background-color: var(--panel-color);" class="va">
                                <div class="box box2" style="background-color: white;  background-color: var(--panel-color);  width:100%">
                                    <span class="text" style="font-size: 28px; font-weight: 700;margin-right: auto; ">財務比率變化</span>
                                    <canvas id="myChart7" class="myChart6"></canvas>

                                    <span class="text" style="font-size: 28px; font-weight: 700;margin-right: auto; ">財務比率表格</span>
                                    <?php require_once('ratios.php') ?>
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


    <?php require_once('kimage.php') ?>
    <?php require_once('image.php') ?>

    <script>
        $('.studio').each(function(i) {
            var colorStr = '';
            $('.studio').eq(i).html() > 0 ? colorStr = 'red' : colorStr = 'green';

            $('.studio').eq(i).css('color', colorStr);

        });
    </script>
    <script>
        $('.studio1').each(function(i) {
            var colorStr = '';
            $('.studio1').eq(i).html() > 0 ? colorStr = 'red' : colorStr = 'green';

            $('.studio1').eq(i).css('color', colorStr);

        });
    </script>
    <script>
        $('.studio2').each(function(i) {
            var colorStr = '';
            $('.studio2').eq(i).html() > 0 ? colorStr = 'red' : colorStr = 'green';

            $('.studio2').eq(i).css('color', colorStr);

        });
    </script>
    <script>
        $('.studio3').each(function(i) {
            var colorStr = '';
            $('.studio3').eq(i).html() > 0 ? colorStr = 'red' : colorStr = 'green';

            $('.studio3').eq(i).css('color', colorStr);

        });
    </script>

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
            tabPanels[panelIndex].style.backgroundColor = 'var(--panel-color)';




        }
        showPanel(0, 'orange');
    </script>




    </div>

    </div>


</body>

</html>