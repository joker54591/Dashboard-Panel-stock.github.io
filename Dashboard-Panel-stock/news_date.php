


  

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


                echo "<div  class='news' style='display: flex;'><div data-label='公司代號' class='infor4'>$row[date]</div><div data-label='公司名稱' class='infor3'>$row[stock]</div>  <div data-label='發佈時間' class='infor3'>$row[date_time]</div><div style='width:100%' data-label='新聞標題' class='infor5'>$row[news]</div><div style='text-align:center' data-label='新聞內容' class='infor3'> <form action='$row[news1]' method='post'> <button   class='btn' name='input' value='$row[news1]'  type='submit' class='form-control' list='datalistOptions' id=exampleDataList' placeholder='股票搜尋...'><a class='btn'   href='$row[news1]'>詳細內容</a></button></form></div></div> ";
            }
        }
    } else {
        echo '找不到';
    } ?>
