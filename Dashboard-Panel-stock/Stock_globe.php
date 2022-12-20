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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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
                <li><a href="#">
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
                    <i class="uil uil-money-bill"></i>
                    <span class="text" style="font-size: 40px;"> <?php if (isset($_SESSION['stock']))
                                                                        echo '國際金融';
                                                                    else {
                                                                        echo '國際金融';
                                                                    } ?></span>
                </div>
                <div class="dash-content">
                    <p class="tw_date" style="font-weight:800; color:red;  ">資料來源:yahoo股市<a href="https://tw.stock.yahoo.com/">https://tw.stock.yahoo.com/</a></p>
                    <div class="btn-box">
                        <button onclick="showPanel(0,'#ff9f56');" class="btn2"><i style="font-style:inherit; ">國際指數</i></button>
                        <button onclick="showPanel(1,'#ff9f56');" class="btn2"><i style="font-style:inherit; ">外匯</i></button>
                        <button onclick="showPanel(2,'#ff9f56');" class="btn2"><i style="font-style:inherit; ">美股</i></button>
                        <button onclick="showPanel(3,'#ff9f56');" class="btn2"><i style="font-style:inherit; ">港股</i></button>

                        <button onclick="showPanel(4,'#ff9f56');" class="btn2"><i style="font-style:inherit; ">原物料</i></button>

                        <button onclick="showPanel(5,'#ff9f56');" class="btn2"><i style="font-style:inherit; ">加密貨幣</i></button>


                        <div style="border-bottom: 2px solid #d7d7d7; margin-top:-1px"></div>

                        
                        <div><img class="ad" src="https://tpc.googlesyndication.com/simgad/10830529119714233300" border="0" width="300" height="250" alt="" class="img_ad" style="position: absolute;right: 0;"></div>
                        <img class="ad" src="https://s.yimg.com/ch/28d4189f-83e6-467d-a78c-8aba5e1d9021.png" border="0" width="500" height="250" alt="advertisement"  style="position: absolute;right: 0;margin-top: 300px;">



                        <div class="boxes">
                            <table class='content-table'>
                                <thead>
                                    <tr class=" change_tr">
                                        <th style="text-align: left;">股名</th>

                                        <th class='change2'>股價</th>
                                        <th>漲跌</th>
                                        <th>漲跌幅(%)</th>
                                        <th class='change3'>開盤</th>
                                        <th class='change3'>最高價</th>
                                        <th class='change3'>最低價</th>
                                        <th class='change3'>收盤價</th>

                                        <th class='change3'>時間</th>

                                    </tr>

                                </thead>

                                <?php


                                require_once('conn.php');






                                $sql = "SELECT * FROM globe ";
                                $result = mysqli_query($con, $sql);

                                if (mysqli_num_rows($result)) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo  "
                                    <tbody>
                                      <tr  class='active-row'>
                                        
                                        <td class='change2' data-label='名稱'><a href='$row[url]' target='_blank'>$row[stock]</a></td>
                                        <td class='change4' data-label='股價'>$row[price]</td>
                                        <td id='changePercent' class='change' data-label='漲跌'>$row[up_down]</td>
                                        <td id='changePercent' class='change1' data-label='漲跌幅(%)'>$row[up_down1] </td>
                                        <td class='change3'>$row[open]</td>
                                        <td class='change3'>$row[high]</td>
                                        <td class='change3'>$row[low]</td>
                                        <td class='change3'>$row[close]</td>
                               
                                        <td class='change3'>$row[date]</td>

                                      </tr>
                                     
                                     
                                    </tbody>";
                                    }
                                } else {
                                    echo '找不到';
                                }
                                ?>

                            </table>

                        </div>



                        <div class="boxes">
                            <table class='content-table'>
                                <thead>
                                    <tr class="change_tr">
                                        <th style="text-align: left;">股名</th>

                                        <th class='change2'>股價</th>
                                        <th>漲跌</th>
                                        <th>漲跌幅(%)</th>
                                        <th class='change3'>開盤</th>
                                        <th class='change3'>最高價</th>
                                        <th class='change3'>最低價</th>
                                        <th class='change3'>收盤價</th>
                                        <th class='change3'>成交量</th>
                                        <th class='change3'>時間</th>

                                    </tr>

                                </thead>

                                <?php


                                require_once('conn.php');






                                $sql = "SELECT * FROM change_rate ";
                                $result = mysqli_query($con, $sql);

                                if (mysqli_num_rows($result)) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo  "
                                    <tbody>
                                     <tr  class='active-row'>
                                        
                                     <td class='change2' data-label='名稱'><a href='$row[url]' target='_blank'>$row[stock]</a></td>
                                     <td class='change4' data-label='股價'>$row[price]</td>
                                     <td id='changePercent' class='change' data-label='漲跌'>$row[up_down]</td>
                                     <td id='changePercent' class='change1' data-label='漲跌幅(%)'>$row[up_down1] </td>
                                     <td class='change3'>$row[open]</td>
                                     <td class='change3'>$row[high]</td>
                                     <td class='change3'>$row[low]</td>
                                     <td class='change3'>$row[close]</td>
                                     <td class='change3'>$row[cloum]</td>
                                     <td class='change3'>$row[date]</td>

                                   </tr>
                                     
                                     
                                    </tbody>";
                                    }
                                } else {
                                    echo '找不到';
                                }
                                ?>

                            </table>





                        </div>
                        <div class="boxes">
                            <table class='content-table'>
                            <thead>
                                    <tr class="change_tr">
                                        <th style="text-align: left;">股名</th>

                                        <th class='change2'>股價</th>
                                        <th>漲跌</th>
                                        <th>漲跌幅(%)</th>
                                        <th class='change3'>開盤</th>
                                        <th class='change3'>最高價</th>
                                        <th class='change3'>最低價</th>
                                        <th class='change3'>收盤價</th>
                                        <th class='change3'>成交量</th>
                                        <th class='change3'>時間</th>

                                    </tr>

                                </thead>


                                <?php


                                require_once('conn.php');






                                $sql = "SELECT * FROM america_stock ";
                                $result = mysqli_query($con, $sql);

                                if (mysqli_num_rows($result)) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo  "
                                        <tbody>
                                        <tr  class='active-row'>
                                           
                                        <td class='change2' data-label='名稱'><a href='$row[url]' target='_blank'>$row[stock]</a></td>
                                        <td class='change4' data-label='股價'>$row[price]</td>
                                        <td id='changePercent' class='change' data-label='漲跌'>$row[up_down]</td>
                                        <td id='changePercent' class='change1' data-label='漲跌幅(%)'>$row[up_down1] </td>
                                        <td class='change3'>$row[open]</td>
                                        <td class='change3'>$row[high]</td>
                                        <td class='change3'>$row[low]</td>
                                        <td class='change3'>$row[close]</td>
                                        <td class='change3'>$row[cloum]</td>
                                        <td class='change3'>$row[date]</td>
   
                                      </tr>
                                        
                                        
                                       </tbody>";
                                    }
                                } else {
                                    echo '找不到';
                                }
                                ?>

                            </table>





                        </div>

                        <div class="boxes">
                            <table class='content-table'>
                                <thead>
                                <tr class="change_tr">
                                        <th style="text-align: left;">股名</th>

                                        <th class='change2'>股價</th>
                                        <th>漲跌</th>
                                        <th>漲跌幅(%)</th>
                                        <th class='change3'>開盤</th>
                                        <th class='change3'>最高價</th>
                                        <th class='change3'>最低價</th>
                                        <th class='change3'>收盤價</th>
                                        <th class='change3'>成交量</th>
                                        <th class='change3'>時間</th>

                                    </tr>

                                </thead>

                                <?php


                                require_once('conn.php');






                                $sql = "SELECT * FROM hk_stock ";
                                $result = mysqli_query($con, $sql);

                                if (mysqli_num_rows($result)) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo  "
                                    <tbody>
                                    <tr  class='active-row'>
                                           
                                    <td class='change2' data-label='名稱'><a href='$row[url]' target='_blank'>$row[stock]</a></td>
                                    <td class='change4' data-label='股價'>$row[price]</td>
                                    <td id='changePercent' class='change' data-label='漲跌'>$row[up_down]</td>
                                    <td id='changePercent' class='change1' data-label='漲跌幅(%)'>$row[up_down1] </td>
                                    <td class='change3'>$row[open]</td>
                                    <td class='change3'>$row[high]</td>
                                    <td class='change3'>$row[low]</td>
                                    <td class='change3'>$row[close]</td>
                                    <td class='change3'>$row[cloum]</td>
                                    <td class='change3'>$row[date]</td>

                                  </tr>
                                     
                                     
                                    </tbody>";
                                    }
                                } else {
                                    echo '找不到';
                                }
                                ?>

                            </table>





                        </div>


                        <div class="boxes">
                            <table class='content-table'>
                                <thead>
                                <tr class="change_tr">
                                        <th style="text-align: left;">股名</th>

                                        <th class='change2'>股價</th>
                                        <th>漲跌</th>
                                        <th>漲跌幅(%)</th>
                                        <th class='change3'>開盤</th>
                                        <th class='change3'>最高價</th>
                                        <th class='change3'>最低價</th>
                                        <th class='change3'>收盤價</th>
                                        <th class='change3'>成交量</th>
                                        <th class='change3'>時間</th>

                                    </tr>

                                </thead>

                                <?php


                                require_once('conn.php');






                                $sql = "SELECT * FROM material ";
                                $result = mysqli_query($con, $sql);

                                if (mysqli_num_rows($result)) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo  "
                                        <tbody>
                                    <tr  class='active-row'>
                                           
                                    <td class='change2' data-label='名稱'><a href='$row[url]' target='_blank'>$row[stock]</a></td>
                                    <td class='change4' data-label='股價'>$row[price]</td>
                                    <td id='changePercent' class='change' data-label='漲跌'>$row[up_down]</td>
                                    <td id='changePercent' class='change1' data-label='漲跌幅(%)'>$row[up_down1] </td>
                                    <td class='change3'>$row[open]</td>
                                    <td class='change3'>$row[high]</td>
                                    <td class='change3'>$row[low]</td>
                                    <td class='change3'>$row[close]</td>
                                    <td class='change3'>$row[cloum]</td>
                                    <td class='change3'>$row[date]</td>

                                  </tr>
                                     
                                     
                                    </tbody>";
                                    }
                                } else {
                                    echo '找不到';
                                }
                                ?>

                            </table>





                        </div>
                        <div class="boxes">
                            <table class='content-table'>
                                <thead>
                                <tr class="change_tr">
                                        <th style="text-align: left;">股名</th>

                                        <th class='change2'>股價</th>
                                        <th>漲跌</th>
                                        <th>漲跌幅(%)</th>
                                        <th class='change3'>開盤</th>
                                        <th class='change3'>最高價</th>
                                        <th class='change3'>最低價</th>
                                        <th class='change3'>收盤價</th>
                                        <th class='change3'>成交量</th>
                                        <th class='change3'>時間</th>

                                    </tr>

                                </thead>

                                <?php


                                require_once('conn.php');






                                $sql = "SELECT * FROM crypto ";
                                $result = mysqli_query($con, $sql);

                                if (mysqli_num_rows($result)) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo  "
                                    <tbody>
                                    <tr  class='active-row'>
                                           
                                    <td class='change2' data-label='名稱'><a href='$row[url]' target='_blank'>$row[stock]</a></td>
                                    <td class='change4' data-label='股價'>$row[price]</td>
                                    <td id='changePercent' class='change' data-label='漲跌'>$row[up_down]</td>
                                    <td id='changePercent' class='change1' data-label='漲跌幅(%)'>$row[up_down1] </td>
                                    <td class='change3'>$row[open]</td>
                                    <td class='change3'>$row[high]</td>
                                    <td class='change3'>$row[low]</td>
                                    <td class='change3'>$row[close]</td>
                                    <td class='change3'>$row[cloum]</td>
                                    <td class='change3'>$row[date]</td>

                                  </tr>
                                     
                                     
                                    </tbody>";
                                    }
                                } else {
                                    echo '找不到';
                                }
                                ?>

                            </table>





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
    <script>
        $('.change').each(function(i) {
            var colorStr = '';
            $('.change').eq(i).html() > 0 ? colorStr = 'red' : colorStr = 'green';

            $('.change').eq(i).css('color', colorStr);
            $('.change1').eq(i).css('color', colorStr);
            $('.change4').eq(i).css('color', colorStr);





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