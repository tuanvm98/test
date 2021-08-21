
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="bootstrap/css/style.css" />
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
      <a class="navbar-brand" href="index.php"><img src="anh/logo.png" style="width: 25px;" /></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="dt.php">Danh sách sản phẩm</a></li>
        <li><a href="tintuc.php">Tin tức</a></li>
        <li>
           <form name="chido" action="ketqua.php" method="GET"  class="form-inline">
    <div class="input-group" style="padding-top:8px">
      <input id="key" name="q" type="text" class="form-control" size="50" placeholder="Tìm Kiếm ..." >
      <div class="input-group-btn">
        <button type="submit" class="btn btn-danger">Tìm kiếm</button>
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
                if(isset($_COOKIE['permision']) && $_COOKIE['permision'] == md5("admin")){
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
                if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
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
        </li>
        <?php
        require("ket_noi.php");
        ?>
        <li>
            <a href="gio_hang.php">
                <span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng
                <?php                
                if(isset($_COOKIE['permission']) && $_COOKIE['permission'] == md5("admin")){
                    echo "(".$_SESSION['gio_hang']['tong_so'].")";
                }
                ?>
            </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>