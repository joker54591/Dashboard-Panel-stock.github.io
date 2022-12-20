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

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <?php if (isset($_SESSION['first_name']) && isset($_SESSION['last_name'])) {
                echo "<a><img src='$_SESSION[image]' ></a>";
            } else {
                echo ("<a href='login.php'><i class='uil uil-signout' style='font-style: inherit;'>登入</i></a>");
            } ?>

        </div>




        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-backspace"></i>
                    <span class="text" style="font-size: 40px;"> <?php if (isset($_SESSION['stock']))
                                                                        echo '台股指數';
                                                                    else {
                                                                        echo '台股指數';
                                                                    } ?></span>
                </div>
                <div class="dash-content">
                    <div class="btn-box">
                        <button onclick="showPanel(0,'#ff9f56');" class="btn"><i style="font-style:inherit; ">加權指數</i></button>
                        <button onclick="showPanel(1,'#ff9f56');" class="btn"><i style="font-style:inherit;">上櫃指數</i></button>


                        <div style="border-bottom: 2px solid #d7d7d7; margin-top:-1px"></div>





                        <div class="boxes">



                            <div id="container3" class="he" style=" width:80vw; height:500px;  border-radius: 0px; background-color:white;  ">

                            </div>

                        </div>

                        <div class="boxes">



                            <div id="container4" class="he" style="  width:80vw; height:500px; border-radius: 0px; background-color:white;  ">

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
    <?php require_once('TWA00.php') ?>
    <?php require_once('TWC00.php') ?>




    </div>

    </div>


</body>

</html>