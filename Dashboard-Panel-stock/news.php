<?php

session_start();

?>
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

  <link rel="stylesheet" type="text/css" href="css/datatables-1.10.25.min.css" />
  <link href="css/bootstrap5.0.1.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/datatables-1.10.25.min.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
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

    <div class="menu-items" style="margin-inline-start: -30px;">
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
      <form style="width:600px; margin-right: auto;" action="index.php" method="post">
        <div class="search-box">


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




    <div class="dash-content">
      <div class="overview">

        <div><?php if (isset($_SESSION['first_name']) && isset($_SESSION['last_name']) && isset($_SESSION['close']) && isset($_SESSION['date'])) {
                echo "  <form action='star.php' method='POST'>
                    <input type='checkbox' style='display: none;' class='btn btn-primary' name='brands[]' value='$_SESSION[stock]' checked > 


                    
                    <input type='checkbox' style='display: none;' class='btn btn-primary' name='close'  value='$_SESSION[close] 'checked>
                    <input type='checkbox' style='display: none;' class='btn btn-primary' name='date'  value='$_SESSION[date] 'checked>
                    <input type='checkbox' style='display: none;'' class='btn btn-primary' name='user_id'  value=' $_SESSION[user_id] 'checked>


                                                                                                                           
                                                                                                                 

                    <div class='form-group mb-3' style='margin-left: 280px;margin-top: -90px;'>
                        <button type='submit' name='save_multiple_checkbox' class='btn2'  ><i style='font-style:inherit; '  class='uil uil-star'>加入清單</i></button>
                    </div>
                </form>";
              } else {
                echo  "   <div class='form-group mb-3' style='margin-left: 280px;margin-top: -90px;'>
                            <button  onclick=location.href='login.php'  type='submit' name='save_multiple_checkbox' class='btn2' style='
                            display: none;
                        '  ><i style='font-style:inherit; '  class='uil uil-star'>加入清單</i></button>
                        </div>
                        ";
              } ?>
        </div>
        <div class="dash-content">

        </div>
        <div class="container-fluid">

          <div class="row">
            <div class="container">
              <div class="btnAdd" style="margin-left: 72vw;position: initial;margin-top: 50px;">
                <a href="#!" data-id="" data-bs-toggle="modal" data-bs-target="#addUserModal" class="btn btn-success btn-sm">新增公司公告</a>
              </div>
              <div class="row">
                <div class="col-md-2" style="position: absolute;"></div>
                <div class="col-md-8">
                  <table id="example" class="table" style="width: 70%;">
                    <thead>
                      <tr class="change_tr" style="text-align: center;">
                        <th class='news' style='width:80px;'>順序</th>
                        <th class='news'>日期</th>
                        <th class='news' style='width:80px'>代號</th>
                        <th class='news' style='width:80px'>公司名稱</th>
                        <th class='news' style='min-width:400px'>新聞標題</th>
                        <th class='news'>操作</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-2"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="js/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/dt-1.10.25datatables.min.js"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  -->
        <script type="text/javascript">
          $(document).ready(function() {
            $('#example').DataTable({
              "fnCreatedRow": function(nRow, aData, iDataIndex) {
                $(nRow).attr('id', aData[0]);
              },
              'serverSide': 'true',
              'processing': 'true',
              'paging': 'true',
              'order': [],
              'ajax': {
                'url': 'fetch_data.php',
                'type': 'post',
              },
              "aoColumnDefs": [{
                  "bSortable": false,
                  "aTargets": [5]
                },

              ]
            });
          });
          $(document).on('submit', '#addUser', function(e) {
            e.preventDefault();
            var city = $('#addCityField').val();
            var username = $('#addUserField').val();
            var mobile = $('#addMobileField').val();
            var email = $('#addEmailField').val();
            if (city != '' && username != '' && mobile != '' && email != '') {
              $.ajax({
                url: "add_user.php",
                type: "post",
                data: {
                  city: city,
                  username: username,
                  mobile: mobile,
                  email: email
                },
                success: function(data) {
                  var json = JSON.parse(data);
                  var status = json.status;
                  if (status == 'true') {
                    mytable = $('#example').DataTable();
                    mytable.draw();
                    $('#addUserModal').modal('hide');
                  } else {
                    alert('failed');
                  }
                }
              });
            } else {
              alert('Fill all the required fields');
            }
          });
          $(document).on('submit', '#updateUser', function(e) {
            e.preventDefault();
            //var tr = $(this).closest('tr');
            var city = $('#cityField').val();
            var username = $('#nameField').val();
            var mobile = $('#mobileField').val();
            var email = $('#emailField').val();
            var trid = $('#trid').val();
            var id = $('#id').val();
            if (city != '' && username != '' && mobile != '' && email != '') {
              $.ajax({
                url: "update_user.php",
                type: "post",
                data: {
                  city: city,
                  username: username,
                  mobile: mobile,
                  email: email,
                  id: id
                },
                success: function(data) {
                  var json = JSON.parse(data);
                  var status = json.status;
                  if (status == 'true') {
                    table = $('#example').DataTable();
                    // table.cell(parseInt(trid) - 1,0).data(id);
                    // table.cell(parseInt(trid) - 1,1).data(username);
                    // table.cell(parseInt(trid) - 1,2).data(email);
                    // table.cell(parseInt(trid) - 1,3).data(mobile);
                    // table.cell(parseInt(trid) - 1,4).data(city);
                    var button = '<td><a href="javascript:void();" data-id="' + id + '" class="btn btn-info btn-sm editbtn">內容</a>  <a href="#!"  data-id="' + id + '"  class="btn btn-danger btn-sm deleteBtn">刪除</a></td>';
                    var row = table.row("[id='" + trid + "']");
                    row.row("[id='" + trid + "']").data([id, username, email, mobile, city, button]);
                    $('#exampleModal').modal('hide');
                  } else {
                    alert('failed');
                  }
                }
              });
            } else {
              alert('Fill all the required fields');
            }
          });
          $('#example').on('click', '.editbtn ', function(event) {
            var table = $('#example').DataTable();
            var trid = $(this).closest('tr').attr('id');
            // console.log(selectedRow);
            var id = $(this).data('id');
            $('#exampleModal').modal('show');

            $.ajax({
              url: "get_single_data.php",
              data: {
                id: id
              },
              type: 'post',
              success: function(data) {
                var json = JSON.parse(data);
                $('#nameField').val(json.username);
                $('#emailField').val(json.email);
                $('#mobileField').val(json.mobile);
                $('#cityField').val(json.city);
                $('#id').val(id);
                $('#trid').val(trid);
              }
            })
          });

          $(document).on('click', '.deleteBtn', function(event) {
            var table = $('#example').DataTable();
            event.preventDefault();
            var id = $(this).data('id');
            if (confirm("你要刪除這則公告嗎? ")) {
              $.ajax({
                url: "delete_user.php",
                data: {
                  id: id
                },
                type: "post",
                success: function(data) {
                  var json = JSON.parse(data);
                  status = json.status;
                  if (status == 'success') {
                    //table.fnDeleteRow( table.$('#' + id)[0] );
                    //$("#example tbody").find(id).remove();
                    //table.row($(this).closest("tr")) .remove();
                    $("#" + id).closest('tr').remove();
                  } else {
                    alert('Failed');
                    return;
                  }
                }
              });
            } else {
              return null;
            }



          })
        </script>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">更新公告</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form id="updateUser">
                  <input type="hidden" name="id" id="id" value="">
                  <input type="hidden" name="trid" id="trid" value="">
                  <div class="mb-3 row">
                    <label for="nameField" class="col-md-3 form-label">日期</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="nameField" name="name">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="emailField" class="col-md-3 form-label">代號</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="emailField" name="email">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="mobileField" class="col-md-3 form-label">公司名稱</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="mobileField" name="mobile">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="cityField" class="col-md-3 form-label">新聞標題</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="cityField" name="City">
                    </div>
                  </div>
                  <div class="mb-3 row">

                  </div>
                  <div class="text-center">

                    <button type="submit" class="btn btn-primary">完成</button>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Add user Modal -->
        <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">新增公告</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form id="addUser" action="">
                  <div class="mb-3 row">
                    <label for="addUserField" class="col-md-3 form-label">日期</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="addUserField" name="name">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="addEmailField" class="col-md-3 form-label">代號</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="addEmailField" name="email">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="addMobileField" class="col-md-3 form-label">公司名稱</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="addMobileField" name="mobile">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="addCityField" class="col-md-3 form-label">新聞標題</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" id="addCityField" name="City">
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">完成</button>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
              </div>
            </div>
          </div>
        </div>

  </section>





  <script src="script.js"></script>





  </div>

  </div>


</body>

</html>