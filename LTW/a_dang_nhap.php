<html>
    <head>
      <title>Đăng nhập</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="jquery.min.js"></script>
      <script src="bootstrap/js/bootstrap.js"></script>
      <link rel="stylesheet" href="bootstrap/css/style.css" />
      <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
      <script>
      function validateForm() {
        var x1 = document.forms["form-dang-nhap"]["ten_dang_nhap"].value;
        if (x1 == "") {
            alert("Bạn chưa điền tên đăng nhập");
            document.forms["form-dang-nhap"]["ten_dang_nhap"].focus();
            return false;
        }
        
        var x2 = document.forms["form-dang-nhap"]["mat_khau"].value;
        if (x2 == "" || x2.length < 6) {
            alert("Mật khẩu không hợp lệ");
            document.forms["form-dang-nhap"]["mat_khau"].focus();
            return false;
        }
                        
      }
      </script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>          
      </button>
      <a class="navbar-brand" href="a1_index.php"><img src="anh/logo.png" style="width: 25px;" /></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
            <li>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-user"></span> 
                <?php
                    echo "Quản lý sản phẩm";
                ?>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#">Danh sách loại sản phẩm</a></li>
                <li><a href="#">Danh sách sản phẩm</a></li>                       
            </ul>
        </li>
         <li><a href="#">Quản lý khách hàng</a></li>
		<li>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-user"></span> 
                <?php
                    echo "Quản lý tin tức";
                ?>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#">Danh sách nhóm tin</a></li>
                <li><a href="#">Danh sách tin tức</a></li>                       
            </ul>
        </li>
        <li>
           <form class="form-inline">
    <div class="input-group" style="padding-top:8px">
      <input type="timkiem" class="form-control" size="50" placeholder="Tìm Kiếm ..." required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Tìm kiếm</button>
      </div>
    </div>
  </form>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-user"></span> 
                <?php
                session_start();
                if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
                    echo "Xin chào ".$_SESSION['ten_nv'];
                }
                else{
                    echo "Tài khoản";
                }
                ?>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <?php                
                if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
                ?>
                <li><a href="#">Thông tin tài khoản</a></li>
                <li><a href="a_dang_xuat.php">Đăng xuất</a></li> 
                <?php
                }
                else{
                ?>
                <li><a href="a_dang_nhap.php">Đăng nhập</a></li>
                <li><a href="a_dang_ky.php">Đăng ký</a></li> 
                <?php    
                }
                ?>                        
            </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">                
                    <form id="form-dang-nhap" class="form-horizontal" action='a_thuc_hien_dang_nhap.php' method="post" onSubmit="return(validateForm());">
                      <fieldset>
                        <div id="legend">
                          <legend class="">Đăng nhập</legend>
                        </div>
                        <div class="control-group">
                          <!-- Username -->
                          <label class="control-label" for="username">Tên đăng nhập</label>
                          <div class="controls">
                            <input type="text" id="ten_dang_nhap" name="ten_dang_nhap" placeholder="" class="form-control">                            
                          </div>
                        </div>
                     
                        <div class="control-group">
                          <!-- Password-->
                          <label class="control-label" for="password">Mật khẩu</label>
                          <div class="controls">
                            <input type="password" id="mat_khau" name="mat_khau" placeholder="" class="form-control">                            
                          </div>
                        </div><br />
                     
                        <div class="control-group">
                          <!-- Button -->
                          <div class="controls">
                            <input class="btn btn-success" value="Đăng nhập" type="submit" />
                          </div>
                        </div>
                      </fieldset>
                    </form>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
<?php
    require_once("footer.php");
?>
</body>
</html>