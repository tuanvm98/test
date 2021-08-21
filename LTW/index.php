<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cửa hàng điện thoại KangJin</title>
  <?php
    include("header.php");
 ?>
</head>
<body>
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

<?php
require_once("ket_noi.php");
$sql = "SELECT *
        FROM tblsp
        limit 0,6";
$ketquatruyvan = $conn->query($sql);
if($ketquatruyvan->num_rows > 0){
    $i=0;
    while($mathang = $ketquatruyvan->fetch_assoc()){
        if($i%3==0){
        ?>
<div class="container">
    <div class="row">    
        <?php
        }
?>
        <div class="col-xs-4">
          <div class="panel panel-primary">
            <div class="panel-heading"><?=$mathang['ten_sp']?></div>
            <div class="panel-body">
                <a href="chi_tiet_sp.php?id=<?=$mathang['sp_id']?>">
                <img src="anh/<?=$mathang['hinh_anh']?>" 
                class="img-responsive" style="width:100%; height: 300px;" alt="Image" />
                </a>
            </div>
            <div class="panel-footer"><?=$mathang['gia_ban']?> VNĐ
                <a class="btn btn-oder" href="chi_tiet_sp.php?id=<?=$mathang['sp_id']?>">Mua ngay</a>
            </div>
          </div>
        </div>     
        <?php
        if($i%3==2){
        ?>
    </div>  
</div><br />  
        <?php
        }
        $i++;
    }
}  
?>
<div class="footer">
<?php

    require_once("footer.php");
?>
</body>
</html>