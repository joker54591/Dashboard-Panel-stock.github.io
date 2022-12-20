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
            <form style="width:600px;  margin-right: auto;" action="news_search.php" method="post">
                <div class="search-box">
                    <i class="uil uil-search"></i>
                    <input name="input" type="text" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="新聞搜尋...">
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


        <div class="date" style="margin-top: 50px;">
            <form action="news_search.php" method="GET" class="date">
                <div class="search_date">
                    <label style="font-weight: 800; color:var(--text-color);font-size: x-large;" class="search_date">開始日期</label>
                    <input type="date" name="from_date" value="<?php if (isset($_GET['from_date'])) {
                                                                    echo $_GET['from_date'];
                                                                } ?>" class="form-control"></input>
                    <label style="font-weight: 800; color:var(--text-color);font-size: x-large;" class="search_date">結束日期</label>
                    <input type="date" name="to_date" value="<?php if (isset($_GET['to_date'])) {
                                                                    echo $_GET['to_date'];
                                                                } ?>" class="form-control"></input>
                    <button type="submit" class="search_date">送出</button>

                </div>

            </form>
        </div>


        <table class='content-table' style=" min-width: 100%;">
            <thead>
                <tr class="change_tr">
                    <th style="text-align: left; width:150px; height:50px">公司代號</th>
                    <th style="text-align: left; width:150px">公司名稱</th>
                    <th style='text-align:left'>發布時間</th>
                    <th style='text-align:left'>新聞標題</th>



                </tr>

            </thead>
            <?php


            require_once('conn.php');






            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $input = $_POST['input'];

                $sql =  "SELECT * FROM news   WHERE stock LIKE  '%" . $input  .  "%' or  date  LIKE '%" . $input  .  "%'  or  stock  LIKE '%" . $input  .  "%'  or  news  LIKE '%" . $input  . "%'      ";

                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result)) {

                    while ($row = mysqli_fetch_assoc($result)) {


                        echo  "
                                    <tbody>
                                      <tr  class='active-row'>
                                      <td class='change2' data-label='公司代號'> $row[data]</td>
                                      <td class='change2' data-label='公司名稱'><a href='$row[news1]' target='_blank'>$row[stock]</a> </td>
                                      <td class='change4' data-label='發布時間' >$row[date_time]</td>
                                      <td id='changePercent' class='change7'  >$row[news]</td>
                                   
                                       

                                      </tr>
                                     
                                     
                                    </tbody>";
                    }
                } else {
                    echo "     <tr  class='active-row'>   <td class='change2' data-label='此公司'><p>無資料 </p> </td> </tr>";
                }
            }



            ?>


            <?php


            require_once('conn.php');






            if (isset($_GET['from_date']) && isset($_GET['to_date'])) {
                $from_date = $_GET['from_date'];
                $to_date = $_GET['to_date'];
                $newDate = date("Y/m/d", strtotime($from_date));
                $newDate1 = date("Y/m/d", strtotime($to_date));

                $query = "SELECT * FROM news WHERE date_time BETWEEN '$newDate ' AND '$newDate1' ";

                $query_run = mysqli_query($con, $query);


                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $row) {


                        echo  "
                                    <tbody>
                                      <tr  class='active-row'>
                                      <td class='change2' data-label='公司代號'> $row[data]</td>
                                      <td class='change2' data-label='公司名稱'><a href='$row[news1]' target='_blank'>$row[stock]</a> </td>
                                      <td class='change4' data-label='發布時間' >$row[date_time]</td>
                                      <td id='changePercent' class='change7'  >$row[news]</td>
                                   
                                       

                                      </tr>
                                     
                                     
                                    </tbody>";
                    }
                }
            } else {
                echo "";
            }







            ?>


        </table>





        </div>

























    </section>




    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type='text/javascript' src='news.js'></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>










    </div>

    </div>


</body>

</html>