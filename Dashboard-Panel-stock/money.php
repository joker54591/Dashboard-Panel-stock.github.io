<div class="month" style=" overflow: scroll; height: calc(50vh - 10px); margin-top:20px ">
    <table class="table">
        <thead>
            <tr>
            <tr>
                <th class="pos">年度</th>
                <th>現金股利</th>
                <th>股票股利</th>
                <th>除息日</th>
                <th>除權日</th>
                <th>股東會日期
                </th>
            </tr>

        </thead>
        <tbody>

            <?php


            require_once('conn.php');






            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $input = $_POST['input'];

                $sql = "SELECT * FROM investors  WHERE stock LIKE '%" . $input . "%' ";

                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {







                        echo "<tr><td data-label='年度'>$row[date]</td><td data-label='現金股利'> $row[money] </td><td  data-label='股票股利'> $row[money1]</td><td data-label='除息日'>$row[money2]</td><td data-label='除權日'>$row[money3]</td><td data-label='股東會日期'>$row[money6]</td></tr> ";
                    }
                }
            } else {



                require_once('conn.php');






                $input = '2330';

                $sql = "SELECT * FROM investors  WHERE stock LIKE '%" . $input . "%' ";

                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {







                        echo "<tr><td data-label='年度'>$row[date]</td><td data-label='現金股利'> $row[money] </td><td  data-label='股票股利'> $row[money1]</td><td data-label='除息日'>$row[money2]</td><td data-label='除權日'>$row[money3]</td><td data-label='股東會日期'>$row[money6]</td></tr> ";
                    }
                }
            }

            ?>



        </tbody>
    </table>
</div>