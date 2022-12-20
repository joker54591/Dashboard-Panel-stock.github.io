<div class="month" style=" overflow: scroll; height: calc(50vh - 10px); margin-top:20px ">
    <table class="table">
        <thead>
            <tr>
            <tr>
                <th class="pos">年月</th>
                <th>單月合併營收(千)</th>
                <th>去年單月營收(千)</th>
                <th>累計合併營收成長%</th>
                <th>單月營收年成長%
                </th>
            </tr>

        </thead>
        <tbody>

            <?php


            require_once('conn.php');






            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $input = $_POST['input'];

                $sql = "SELECT * FROM month  WHERE stock LIKE '%" . $input . "%' ";

                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {







                        echo "<tr><td data-label='年月'>$row[date]</td><td data-label='單月合併營收(千)'> $row[month5] </td><td  data-label='去年單月營收(千)'> $row[month6]</td><td class='studio' data-label='累計合併營收成長'>$row[month3]</td><td class='studio1' data-label='單月營收年成長'>$row[month4]</td></tr> ";
                    }
                }
            } else {
                require_once('conn.php');







                $input = '2330';

                $sql = "SELECT * FROM month  WHERE stock LIKE '%" . $input . "%' ";

                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {







                        echo "<tr><td data-label='年月'>$row[date]</td><td data-label='單月合併營收(千)'> $row[month5] </td><td  data-label='去年單月營收(千)'> $row[month6]</td><td class='studio' data-label='累計合併營收成長'>$row[month3]</td><td class='studio1' data-label='單月營收年成長'>$row[month4]</td></tr> ";
                    }
                }
            }

            ?>



        </tbody>
    </table>
</div>