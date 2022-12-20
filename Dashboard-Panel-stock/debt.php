<div class="month" style=" overflow: scroll; height: calc(50vh - 10px);  margin-top:20px ">
    <table class="table">
        <thead>
            <tr>
            <tr>
                <th class="pos">年/季度</th>
                <th>資產總計(千)</th>
                <th>負債總計(千)</th>
                <th>權益總計(千)
                </th>
                <th>流動資產(千)</th>
                <th>流動負債(千)</th>

            </tr>

        </thead>
        <tbody>

            <?php


            require_once('conn.php');






            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $input = $_POST['input'];

                $sql = "SELECT * FROM debt  WHERE stock LIKE '%" . $input . "%' ";

                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $number_format1 = number_format($row['debt1']);
                        $number_format2 = number_format($row['debt2']);
                        $number_format3 = number_format($row['debt3']);
                        $number_format4 = number_format($row['debt4']);
                        $number_format5 = number_format($row['debt5']);







                        echo "<tr><td data-label='年/季度'>$row[date]</td><td data-label='資產總計(千)'>   $number_format1 </td><td  data-label='負債總計(千)'>  $number_format2</td><td data-label='權益總計(千)'>  $number_format5</td><td data-label='流動資產(千)'>  $number_format3</td><td data-label='流動負債(千)'>  $number_format4</td></tr> ";
                    }
                }
            } else {
                require_once('conn.php');







                $input = '2330';

                $sql = "SELECT * FROM debt  WHERE stock LIKE '%" . $input . "%' ";

                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $number_format1 = number_format($row['debt1']);
                        $number_format2 = number_format($row['debt2']);
                        $number_format3 = number_format($row['debt3']);
                        $number_format4 = number_format($row['debt4']);
                        $number_format5 = number_format($row['debt5']);







                        echo "<tr><td data-label='年/季度'>$row[date]</td><td data-label='資產總計(千)'>   $number_format1 </td><td  data-label='負債總計(千)'>  $number_format2</td><td data-label='權益總計(千)'>  $number_format5</td><td data-label='流動資產(千)'>  $number_format3</td><td data-label='流動負債(千)'>  $number_format4</td></tr> ";
                    }
                }
            }

            ?>



        </tbody>
    </table>
</div>