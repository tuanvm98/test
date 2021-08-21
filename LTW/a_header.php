<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cửa hàng điện thoại</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="bootstrap/css/style.css" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<?php if (isset($_COOKIE['permission'])&&($_COOKIE['permission']==md5("admin"))){
		
	}else {
		header('Location: index.php');
	}?>
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
                <li><a href="danh_sach_loai_sp.php">Danh sách loại sản phẩm</a></li>
                <li><a href="danh_sach_sp.php">Danh sách sản phẩm</a></li>                       
            </ul>
        </li>
         <li><a href="danh_sach_khach_hang.php">Quản lý khách hàng</a>
		</li>
		<li>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="glyphicon glyphicon-user"></span> 
                <?php
                    echo "Quản lý tin tức";
                ?>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="danh_sach_nhom_tin.php">Danh sách nhóm tin</a></li>
                <li><a href="danh_sach_tin.php">Danh sách tin</a></li>     
                                     
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
                if(isset($_COOKIE['permission']) && $_COOKIE['permission'] == md5("admin")){
                    echo "Xin chào ".$_SESSION['ten_dang_nhap'];
                }
                else{
                    echo "Tài khoản";
                }
                ?>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <?php                
                if(isset($_COOKIE['permission']) && $_COOKIE['permission'] == md5("admin")){
                ?>
                <li><a href="#">Thông tin tài khoản</a></li>
                <li><a href="dang_xuat.php">Đăng xuất</a></li> 
                <?php
                }
                else{
                ?>
                <li><a href="dang_nhap.php">Đăng nhập</a></li>
                <li><a href="dang_ky.php">Đăng ký</a></li> 
                <?php    
                }
                ?>                        
            </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>