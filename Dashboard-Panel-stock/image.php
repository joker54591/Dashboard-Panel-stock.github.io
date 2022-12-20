<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const labels = [<?php


                    require_once('conn.php');






                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $input = $_POST['input'];

                        $sql = "SELECT * FROM investors  WHERE stock LIKE '%" . $input . "%' ";

                        $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result)) {
                            while ($row = mysqli_fetch_assoc($result)) {




                                echo "'$row[date]', ";
                            }
                        }
                    } else {
                        require_once('conn.php');






                        $input = '2330';

                        $sql = "SELECT * FROM investors  WHERE stock LIKE '%" . $input . "%' ";

                        $result = mysqli_query($con, $sql);

                        if (mysqli_num_rows($result)) {
                            while ($row = mysqli_fetch_assoc($result)) {




                                echo "'$row[date]', ";
                            }
                        }
                    }

                    ?>];
    const labels3 = [<?php


                        require_once('conn.php');






                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $input = $_POST['input'];

                            $sql = "SELECT * FROM month  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "'$row[date]', ";
                                }
                            }
                        } else {
                            require_once('conn.php');







                            $input = '2330';

                            $sql = "SELECT * FROM month  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "'$row[date]', ";
                                }
                            }
                        }

                        ?>];

    const labels4 = [<?php


                        require_once('conn.php');






                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $input = $_POST['input'];

                            $sql = "SELECT * FROM debt  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "'$row[date]', ";
                                }
                            }
                        } else {
                            require_once('conn.php');






                            $input = '2330';

                            $sql = "SELECT * FROM debt  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "'$row[date]', ";
                                }
                            }
                        }

                        ?>];

    const labels5 = [<?php


                        require_once('conn.php');






                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $input = $_POST['input'];

                            $sql = "SELECT * FROM chips  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "'$row[date]', ";
                                }
                            }
                        } else {
                            require_once('conn.php');







                            $input = '2330';

                            $sql = "SELECT * FROM chips  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "'$row[date]', ";
                                }
                            }
                        }

                        ?>];
    const labels6 = [<?php


                        require_once('conn.php');






                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $input = $_POST['input'];

                            $sql = "SELECT * FROM ratios  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "'$row[date]', ";
                                }
                            }
                        } else {
                            require_once('conn.php');







                            $input = '2330';

                            $sql = "SELECT * FROM ratios  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "'$row[date]', ";
                                }
                            }
                        }

                        ?>];



    const data = {


        labels: labels,
        datasets: [{
                label: '現金股利',
                data: [<?php


                        require_once('conn.php');






                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $input = $_POST['input'];

                            $sql = "SELECT * FROM investors  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "$row[money], ";
                                }
                            }
                        } else {
                            require_once('conn.php');






                            $input = '2330';

                            $sql = "SELECT * FROM investors  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "$row[money], ";
                                }
                            }
                        }

                        ?>],
                backgroundColor: 'rgb(121, 184, 242)',
            },
            {
                label: '股票股利',
                data: [<?php


                        require_once('conn.php');




                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $input = $_POST['input'];

                            $sql = "SELECT * FROM investors  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {


                                    echo "$row[money1],";
                                }
                            }
                        } else {
                            require_once('conn.php');





                            $input = '2330';

                            $sql = "SELECT * FROM investors  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {


                                    echo "$row[money1],";
                                }
                            }
                        }

                        ?>],
                backgroundColor: '#ff8d8d',
            },
        ]
    };
    const data3 = {
        labels: labels3,
        datasets: [{
                label: '單月合併營收(千)',
                data: [<?php


                        require_once('conn.php');






                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $input = $_POST['input'];

                            $sql = "SELECT * FROM month  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "'$row[month1]', ";
                                }
                            }
                        } else {
                            require_once('conn.php');







                            $input = '2330';

                            $sql = "SELECT * FROM month  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "'$row[month1]', ";
                                }
                            }
                        }
                        ?>],
                borderColor: 'rgb(121, 184, 242)',
                backgroundColor: 'rgb(121, 184, 242)',
                order: 1
            },
            {
                label: '單月營收年成長(%)',
                data: [<?php


                        require_once('conn.php');






                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $input = $_POST['input'];

                            $sql = "SELECT * FROM month  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "'$row[month4]', ";
                                }
                            }
                        } else {
                            require_once('conn.php');







                            $input = '2330';

                            $sql = "SELECT * FROM month  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "'$row[month4]', ";
                                }
                            }
                        }

                        ?>],
                borderColor: '#ff8d8d',
                backgroundColor: '#ff8d8d',
                type: 'line',
                order: 0,
                yAxisID: 'percentage',
            }
        ]
    };
    const data4 = {
        labels: labels4,
        datasets: [{
                label: '權益總計(千)',
                data: [<?php


                        require_once('conn.php');










                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $input = $_POST['input'];

                            $sql = "SELECT * FROM debt  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "$row[debt5], ";
                                }
                            }
                        } else {
                            require_once('conn.php');











                            $input = '2330';

                            $sql = "SELECT * FROM debt  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "$row[debt5], ";
                                }
                            }
                        }

                        ?>],
                borderColor: 'rgb(121, 184, 242)',
                backgroundColor: 'rgb(121, 184, 242)',
            },
            {
                label: '負債總計(千)',
                data: [<?php


                        require_once('conn.php');






                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $input = $_POST['input'];

                            $sql = "SELECT * FROM debt  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "$row[debt2], ";
                                }
                            }
                        } else {
                            require_once('conn.php');







                            $input = '2330';

                            $sql = "SELECT * FROM debt  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "$row[debt2], ";
                                }
                            }
                        }

                        ?>],
                borderColor: '#ff8d8d',
                backgroundColor: '#ff8d8d',
            }
        ]
    };
    const data5 = {
        labels: labels5,
        datasets: [{
                label: '外資買賣超',
                data: [<?php


                        require_once('conn.php');






                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $input = $_POST['input'];

                            $sql = "SELECT * FROM chips  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "$row[chips1], ";
                                }
                            }
                        } else {
                            require_once('conn.php');







                            $input = '2330';

                            $sql = "SELECT * FROM chips  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "$row[chips1], ";
                                }
                            }
                        }

                        ?>],
                borderColor: '#ff8d8d',
                backgroundColor: '#ff8d8d',
            },
            {
                label: '自營商買賣超',
                data: [<?php


                        require_once('conn.php');






                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $input = $_POST['input'];

                            $sql = "SELECT * FROM chips  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "$row[chips2], ";
                                }
                            }
                        } else {
                            require_once('conn.php');







                            $input = '2330';

                            $sql = "SELECT * FROM chips  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "$row[chips2], ";
                                }
                            }
                        }

                        ?>],
                borderColor: 'rgb(121, 184, 242)',
                backgroundColor: 'rgb(121, 184, 242)',
            },
            {
                label: '投信買賣超',
                data: [<?php


                        require_once('conn.php');






                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $input = $_POST['input'];

                            $sql = "SELECT * FROM chips  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "$row[chips3], ";
                                }
                            }
                        } else {
                            require_once('conn.php');






                            $input = '2330';

                            $sql = "SELECT * FROM chips  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "$row[chips3], ";
                                }
                            }
                        }

                        ?>],
                borderColor: 'orange',
                backgroundColor: 'orange',
            },


        ]
    };
    const data6 = {


        labels: labels6,
        datasets: [{
                label: '流動比率',
                data: [<?php


                        require_once('conn.php');






                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $input = $_POST['input'];

                            $sql = "SELECT * FROM ratios  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "$row[ratios], ";
                                }
                            }
                        } else {
                            require_once('conn.php');






                            $input = '2330';

                            $sql = "SELECT * FROM ratios  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "$row[ratios], ";
                                }
                            }
                        }

                        ?>],
                borderColor: 'rgb(121, 184, 242)',
                backgroundColor: 'rgb(121, 184, 242)',
                order: 1,
            },
            {
                label: '速動比率',
                data: [<?php


                        require_once('conn.php');




                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $input = $_POST['input'];

                            $sql = "SELECT * FROM ratios  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {


                                    echo "$row[ratios1],";
                                }
                            }
                        } else {
                            require_once('conn.php');





                            $input = '2330';

                            $sql = "SELECT * FROM ratios  WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {


                                    echo "$row[ratios1],";
                                }
                            }
                        }

                        ?>],
                borderColor: '#E7D1FC',
                backgroundColor: '#E7D1FC',
                order: 1,
            },
            {
                label: '應收款項週轉率(次)',
                data: [<?php


                        require_once('conn.php');






                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $input = $_POST['input'];

                            $sql = "SELECT * FROM ratios WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "'$row[ratios2]', ";
                                }
                            }
                        } else {
                            require_once('conn.php');







                            $input = '2330';

                            $sql = "SELECT * FROM ratios WHERE stock LIKE '%" . $input . "%' ";

                            $result = mysqli_query($con, $sql);

                            if (mysqli_num_rows($result)) {
                                while ($row = mysqli_fetch_assoc($result)) {




                                    echo "'$row[ratios2]', ";
                                }
                            }
                        }

                        ?>],
                borderColor: 'orange',
                backgroundColor: 'orange',
                type: 'line',
                order: 0,
                yAxisID: 'percentage',
            }

        ]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            plugins: {
                title: {
                    display: true,
                    text: ''
                },
            },
            responsive: true,

            aspectRatio: 2,
            scales: {
                x: {
                    stacked: true,
                },
                y: {
                    stacked: true
                }
            },


        }
    }
    const config3 = {
        type: 'bar',
        data: data3,
        options: {
            responsive: true,

            aspectRatio: 2,
            percentage: {
                beginAtzero: true,
                position: 'right',

                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: ''
                    }
                }
            }
        },
    };
    const config4 = {
        type: 'bar',
        data: data4,
        options: {
            indexAxis: 'x',
            // Elements options apply to all of the options unless overridden in a dataset
            // In this case, we are setting the border of each horizontal bar to be 2px wide
            elements: {
                bar: {
                    borderWidth: 2,
                }
            },
            responsive: true,

            aspectRatio: 2,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: ''

                }

            },
            scales: {
                x: {
                    stacked: true,
                },
                y: {
                    stacked: true
                }
            },

        },
    };
    const config5 = {
        type: 'bar',
        data: data5,
        options: {

            indexAxis: 'x',

            elements: {
                bar: {
                    borderWidth: 2,
                }
            },

            responsive: true,

            aspectRatio: 2,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: ''
                }
            },
            scales: {
                x: {
                    stacked: true,
                },
                y: {
                    stacked: true
                }
            },
            percentage: {
                beginAtzero: true,
                position: 'right',
            },
        }
    };
    const config6 = {
        type: 'bar',
        data: data6,
        options: {
            responsive: true,

            aspectRatio: 2,
            percentage: {
                beginAtzero: true,
                position: 'right',

                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: ''
                    }
                }
            }
        },
    }
</script>
<script>
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
    const myChart3 = new Chart(
        document.getElementById('myChart3'),
        config3
    );
    const myChart4 = new Chart(
        document.getElementById('myChart4'),
        config4
    );
    const myChart6 = new Chart(
        document.getElementById('myChart6'),
        config5
    );
    const myChart7 = new Chart(
        document.getElementById('myChart7'),
        config6
    );
</script>