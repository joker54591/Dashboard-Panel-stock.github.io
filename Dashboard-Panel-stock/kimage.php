<script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.3.3/dist/echarts.min.js"></script>
<!-- Uncomment this line if you want to dataTool extension
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.3.3/dist/extension/dataTool.min.js"></script>
  -->
<!-- Uncomment this line if you want to use gl extension
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts-gl@2/dist/echarts-gl.min.js"></script>
  -->
<!-- Uncomment this line if you want to echarts-stat extension
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts-stat@latest/dist/ecStat.min.js"></script>
  -->
<!-- Uncomment this line if you want to use map
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@4.9.0/map/js/china.js"></script>
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@4.9.0/map/js/world.js"></script>
  -->
<!-- Uncomment these two lines if you want to use bmap extension
  <script type="text/javascript" src="https://api.map.baidu.com/api?v=3.0&ak=YOUR_API_KEY"></script>
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.3.3/dist/extension/bmap.min.js"></script>
  -->

<script type="text/javascript">
  var dom = document.getElementById('container2');
  var myChart5 = echarts.init(dom, null, {
    renderer: 'canvas',
    useDirtyRect: false
  });
  var app = {};

  var option;

  const upColor = '#ec0000';
  const upBorderColor = '#8A0000';
  const downColor = '#00da3c';
  const downBorderColor = '#008F28';
  // Each item: open，close，lowest，highest
  const data0 = splitData([
    <?php


    require_once('conn.php');









    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $input = $_POST['input'];

      $sql = "SELECT * FROM price  WHERE stock LIKE '%" . $input . "%' ";

      $result = mysqli_query($con, $sql);

      if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
          $_SESSION['close'] = $row['close'];
          $_SESSION['date'] = $row['date'];

          echo "['$row[date]', $row[open], $row[close], $row[low], $row[high]],";
        }
      }
    } else {
      $input = '2330';

      $sql = "SELECT * FROM price  WHERE stock LIKE '%" . $input . "%' ";

      $result = mysqli_query($con, $sql);

      if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
          $_SESSION['closer'] = $row['close'];
          $_SESSION['dater'] = $row['date'];

          echo "['$row[date]', $row[open], $row[close], $row[low], $row[high]],";
        }
      }
    }
    ?>
  ]);

  function splitData(rawData) {
    const categoryData = [];
    const values = [];
    for (var i = 0; i < rawData.length; i++) {
      categoryData.push(rawData[i].splice(0, 1)[0]);
      values.push(rawData[i]);
    }
    return {
      categoryData: categoryData,
      values: values
    };
  }

  function calculateMA(dayCount) {
    var result = [];
    for (var i = 0, len = data0.values.length; i < len; i++) {
      if (i < dayCount) {
        result.push('-');
        continue;
      }
      var sum = 0;
      for (var j = 0; j < dayCount; j++) {
        sum += +data0.values[i - j][1];
      }
      result.push(sum / dayCount);
    }
    return result;
  }
  option = {
    title: {
      text: '',
      left: 0
    },
    responsive: true,
    maintainAspectRatio: true,
    aspectRatio: 1,
    tooltip: {
      trigger: 'axis',
      axisPointer: {
        type: 'cross'
      }
    },
    legend: {
      data: ['日K', 'MA5', 'MA20', 'MA60', 'MA120']
    },
    grid: {
      left: '10%',
      right: '10%',
      bottom: '15%'
    },
    xAxis: {
      type: 'category',
      data: data0.categoryData,
      boundaryGap: false,
      axisLine: {
        onZero: false
      },
      splitLine: {
        show: false
      },
      min: 'dataMin',
      max: 'dataMax'
    },
    yAxis: {
      scale: true,
      splitArea: {
        show: true
      }
    },
    dataZoom: [{
        type: 'inside',
        start: 50,
        end: 100
      },
      {
        show: true,
        type: 'slider',
        top: '90%',
        start: 50,
        end: 100
      }
    ],
    series: [{
        name: '日K',
        type: 'candlestick',
        data: data0.values,
        itemStyle: {
          color: upColor,
          color0: downColor,
          borderColor: upBorderColor,
          borderColor0: downBorderColor
        },
        markPoint: {
          label: {
            formatter: function(param) {
              return param != null ? Math.round(param.value) + '' : '';
            }
          },
          data: [{
              name: 'Mark',
              coord: ['2013/5/31', 2300],
              value: 2300,
              itemStyle: {
                color: 'rgb(41,60,85)'
              }
            },
            {
              name: '最高',
              type: 'max',
              valueDim: 'highest'
            },
            {
              name: '最低',
              type: 'min',
              valueDim: 'lowest'
            },
            {
              name: '平均值',
              type: 'average',
              valueDim: 'close'
            }
          ],
          tooltip: {
            formatter: function(param) {
              return param.name + '<br>' + (param.data.coord || '');
            }
          }
        },
        markLine: {
          symbol: ['none', 'none'],
          data: [
            [{
                name: 'from lowest to highest',
                type: 'min',
                valueDim: 'lowest',
                symbol: 'circle',
                symbolSize: 10,
                label: {
                  show: false
                },
                emphasis: {
                  label: {
                    show: false
                  }
                }
              },
              {

                type: 'max',
                valueDim: 'highest',
                symbol: 'circle',
                symbolSize: 10,
                label: {
                  show: false
                },
                emphasis: {
                  label: {
                    show: false
                  }
                }
              }
            ],
            {
              name: 'min line on close',
              type: 'min',
              valueDim: 'close'
            },
            {
              name: 'max line on close',
              type: 'max',
              valueDim: 'close'
            }
          ]
        }
      },
      {
        name: 'MA5',
        type: 'line',
        data: calculateMA(5),
        smooth: true,
        lineStyle: {
          opacity: 0.5
        }
      },
      {
        name: 'MA20',
        type: 'line',
        data: calculateMA(20),
        smooth: true,
        lineStyle: {
          opacity: 0.5
        }
      },
      {
        name: 'MA60',
        type: 'line',
        data: calculateMA(60),
        smooth: true,
        lineStyle: {
          opacity: 0.5
        }
      },
      {
        name: 'MA120',
        type: 'line',
        data: calculateMA(120),
        smooth: true,
        lineStyle: {
          opacity: 0.5
        }
      },


    ]
  };

  if (option && typeof option === 'object') {
    myChart5.setOption(option);
  }

  window.addEventListener('resize', myChart5.resize);
</script>