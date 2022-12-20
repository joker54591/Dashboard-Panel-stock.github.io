<div class="month" style=" overflow: scroll; height: calc(100vh - 10px); margin-top:20px ">
    <div style="display: flex;">
        <div class="infor">股票名稱 </div>
        <?php


        require_once('conn.php');






        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='股票名稱' class='infor1'>$row[stock]</div> ";
                }
            }
        } else {

            require_once('conn.php');
            $input = '2330';

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='股票名稱' class='infor1'>$row[stock]</div> ";
                }
            }
        }

        ?>



    </div>
    <div style="display: flex;">
        <div class="infor">英文簡稱 </div>
        <?php


        require_once('conn.php');






        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {






                    echo " <div data-label='英文簡稱' class='infor1'>$row[english_big_name]</div> ";
                }
            }
        } else {

            require_once('conn.php');
            $input = '2330';

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='英文簡稱' class='infor1'>$row[english_big_name]</div> ";
                }
            }
        }

        ?>

    </div>
    <div style="display: flex;">
        <div class="infor"> 地址 </div>
        <?php


        require_once('conn.php');






        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='地址 ' class='infor1'>$row[addres]</div> ";
                }
            }
        } else {

            require_once('conn.php');
            $input = '2330';

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='地址 ' class='infor1'>$row[addres]</div> ";
                }
            }
        }

        ?>

    </div>
    <div style="display: flex;">
        <div class="infor">電話 </div>
        <?php


        require_once('conn.php');






        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {








                    echo " <div data-label='電話 ' class='infor1'>$row[fax_machine_number]</div> ";
                }
            }
        } else {

            require_once('conn.php');
            $input = '2330';

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='電話 ' class='infor1'>$row[fax_machine_number]</div> ";
                }
            }
        }

        ?>

    </div>
    <div style="display: flex;">
        <div class="infor">實收資本額(百萬) </div>
        <?php


        require_once('conn.php');






        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='實收資本額(百萬) ' class='infor1'>$row[capital_millions]</div> ";
                }
            }
        } else {

            require_once('conn.php');
            $input = '2330';

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='實收資本額(百萬) ' class='infor1'>$row[capital_millions]</div> ";
                }
            }
        }

        ?>

    </div>
    <div style="display: flex;">
        <div class="infor">成立日期 </div>
        <?php


        require_once('conn.php');






        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='成立日期 ' class='infor1'>$row[Continuedyear]</div> ";
                }
            }
        } else {

            require_once('conn.php');
            $input = '2330';

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='成立日期 ' class='infor1'>$row[Continuedyear]</div> ";
                }
            }
        }

        ?>

    </div>
    <div style="display: flex;">
        <div class="infor">上市日期</div>
        <?php


        require_once('conn.php');






        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='上市日期 ' class='infor1'>$row[Listing_date]</div> ";
                }
            }
        } else {

            require_once('conn.php');
            $input = '2330';

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='上市日期 ' class='infor1'>$row[Listing_date]</div> ";
                }
            }
        }

        ?>

    </div>
    <div style="display: flex;">
        <div class="infor">董事長 </div>
        <?php


        require_once('conn.php');






        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='董事長 ' class='infor1'>$row[Chairman]</div> ";
                }
            }
        } else {

            require_once('conn.php');
            $input = '2330';

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='董事長 ' class='infor1'>$row[Chairman]</div> ";
                }
            }
        }

        ?>

    </div>
    <div style="display: flex;">
        <div class="infor"> 總經理</div>
        <?php


        require_once('conn.php');






        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='總經理 ' class='infor1'>$row[General]</div> ";
                }
            }
        } else {

            require_once('conn.php');
            $input = '2330';
            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='總經理 ' class='infor1'>$row[General]</div> ";
                }
            }
        }

        ?>

    </div>
    <div style="display: flex;">
        <div class="infor">網址 </div>
        <?php


        require_once('conn.php');






        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='網址 ' class='infor1'>$row[URL]</div> ";
                }
            }
        } else {

            require_once('conn.php');
            $input = '2330';

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='網址 ' class='infor1'>$row[URL]</div> ";
                }
            }
        }

        ?>

    </div>
    <div style="display: flex;">
        <div class="infor">電子信箱 </div>
        <?php


        require_once('conn.php');






        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='電子信箱 ' class='infor1'>$row[email]</div> ";
                }
            }
        } else {
            require_once('conn.php');
            $input = '2330';

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='電子信箱 ' class='infor1'>$row[email]</div> ";
                }
            }
        }

        ?>

    </div>
    <div style="display: flex;">
        <div class="infor">股票過戶機構 </div>
        <?php


        require_once('conn.php');






        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='股票過戶機構 ' class='infor1'>$row[stock_transfer_agency]</div> ";
                }
            }
        } else {
            require_once('conn.php');
            $input = '2330';

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='股票過戶機構 ' class='infor1'>$row[stock_transfer_agency]</div> ";
                }
            }
        }
        ?>

    </div>
    <div style="display: flex;">
        <div class="infor">產業名稱 </div>
        <?php


        require_once('conn.php');






        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='產業名稱 ' class='infor1'>$row[Industry_name]</div> ";
                }
            }
        } else {
            require_once('conn.php');
            $input = '2330';

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='產業名稱 ' class='infor1'>$row[Industry_name]</div> ";
                }
            }
        }
        ?>

    </div>
    <div style="display: flex;">
        <div class="infor">交易所普通股股本(千)</div>
        <?php


        require_once('conn.php');






        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='交易所普通股股本(千) ' class='infor1'>$row[Common]</div> ";
                }
            }
        } else {

            require_once('conn.php');
            $input = '2330';

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='交易所普通股股本(千) ' class='infor1'>$row[Common]</div> ";
                }
            }
        }
        ?>

    </div>
    <div style="display: flex;">
        <div class="infor">簽證會計師事務所 </div>
        <?php


        require_once('conn.php');






        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='簽證會計師事務所 ' class='infor1'>$row[Visa]</div> ";
                }
            }
        } else {

            require_once('conn.php');
            $input = '2330';

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='簽證會計師事務所 ' class='infor1'>$row[Visa]</div> ";
                }
            }
        }
        ?>

    </div>
    <div style="display: flex;">
        <div class="infor">經營項目 </div>
        <?php


        require_once('conn.php');






        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = $_POST['input'];

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='經營項目  ' class='infor1'>$row[business_project]</div> ";
                }
            }
        } else {



            require_once('conn.php');







            $input = '2330';

            $sql = "SELECT * FROM company WHERE stock LIKE '%" . $input . "%' ";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {







                    echo " <div data-label='經營項目  ' class='infor1'>$row[business_project]</div> ";
                }
            }
        }

        ?>
    </div>


</div>