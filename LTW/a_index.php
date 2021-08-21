<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cửa hàng điện thoại</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
  <link rel="stylesheet" href="bootstrap/css/style.css" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
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
                <li><a href="#">Danh sách tin</a></li>     
                                     
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
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role ="listbox" style="margin-bottom: 30px;">
    <div class="item active">
      <img src="anh/banner.png" alt="banner"/>
      <div class="carousel-caption">
      </div> 
    </div>

    <div class="item">
      <img src="anh/main.jpg" alt="f1s"/>
      <div class="carousel-caption">
      </div> 
    </div>

  <!-- Left and right controls -->
   <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
   </div>
</div>
</div><br />
<div class="footer">
<?php
 require_once("footer.php");
?>
</div>
</body>
</html>