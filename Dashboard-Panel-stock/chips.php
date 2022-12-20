<div class="month" style=" overflow: scroll; height: calc(50vh - 10px); margin-top:20px ">
    <table class="table">
        <thead>
            <tr>
            <tr>
                <th class="pos" data-column="name" data-order="desc">日期</th>
                <th>外資買賣超(張)</th>
                <th>自營商買賣超(張)</th>
                <th>投信買賣超(張)</th>
                <th>合計買賣超(張)</th>

            </tr>

        </thead>

        <tbody>

            <?php


            require_once('conn.php');






            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $input = $_POST['input'];

                $sql = "SELECT * FROM chips  WHERE stock LIKE '%" . $input . "%' ";

                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {










                        echo "<tr><td data-label='日期'>$row[date]</td><td  class='studio' data-label='外資買賣超(張)'> $row[chips1] </td><td class='studio1' data-label='自營商買賣超(張)'> $row[chips2]</td><td class='studio2' data-label='投信買賣超(張)'>  $row[chips3]</td><td class='studio3' data-label='合計買賣超(張)'>  $row[chips4]</td></tr> ";
                    }
                }
            } else {
                require_once('conn.php');







                $input = '2330';

                $sql = "SELECT * FROM chips  WHERE stock LIKE '%" . $input . "%' ";

                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {










                        echo "<tr><td data-label='日期'>$row[date]</td><td  class='studio' data-label='外資買賣超(張)'> $row[chips1] </td><td class='studio1' data-label='自營商買賣超(張)'> $row[chips2]</td><td class='studio2' data-label='投信買賣超(張)'>  $row[chips3]</td><td class='studio3' data-label='合計買賣超(張)'>  $row[chips4]</td></tr> ";
                    }
                }
            }

            ?>



        </tbody>
    </table>
</div>

