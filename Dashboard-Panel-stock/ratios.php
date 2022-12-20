<div class="month" style=" overflow: scroll; height: calc(50vh - 10px); margin-top:20px ">
    <table class="table">
        <thead>
            <tr>
            <tr>
                <th class="pos" data-column="name" data-order="desc">年季</th>
                <th>流動比率(%)</th>
                <th>速動比率(%)</th>
                <th>應收款項週轉率(次)</th>
                <th>總資產週轉率(次)</th>

            </tr>

        </thead>

        <tbody>

            <?php


            require_once('conn.php');






            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $input = $_POST['input'];

                $sql = "SELECT * FROM ratios  WHERE stock LIKE '%" . $input . "%' ";

                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {










                        echo "<tr><td data-label='年季'>$row[date]</td><td   data-label='流動比率(%)'> $row[ratios] </td><td data-label='速動比率(%)'> $row[ratios1]</td><td  data-label='應收款項週轉率(次)'>  $row[ratios2]</td><td  data-label='總資產週轉率(次)'>  $row[ratios3]</td></tr> ";
                    }
                }
            } else {
                require_once('conn.php');







                $input = '2330';

                $sql = "SELECT * FROM ratios  WHERE stock LIKE '%" . $input . "%' ";

                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {













                        echo "<tr><td data-label='年季'>$row[date]</td><td   data-label='流動比率(%)'> $row[ratios] </td><td data-label='速動比率(%)'> $row[ratios1]</td><td  data-label='應收款項週轉率(次)'>  $row[ratios2]</td><td  data-label='總資產週轉率(次)'>  $row[ratios3]</td></tr> ";
                    }
                }
            }

            ?>



        </tbody>
    </table>
</div>