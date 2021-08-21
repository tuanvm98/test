<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chi tiết tin tức</title>
	<link rel="stylesheet" href="bootstrap/css/ctt.css" />
   <?php
        require_once("header.php");
    ?>
</head>
<body>
<?php
$id=$_GET['id'];
require('ket_noi.php');
$sql = "SELECT *
        FROM tbltintuc
        WHERE idtin=".$id;
$ketquatruyvan = $conn->query($sql);
if($ketquatruyvan->num_rows > 0){
    while($mathang = $ketquatruyvan->fetch_assoc()){
        $tenMatHang = $mathang['tieude'];
        $hang = $mathang['idnhom'];
        $mau = $mathang['noi_dung'];
        $hinhAnh = $mathang['hinh_anh'];
        $moTa = $mathang['trichdan'];
    }
}
?>
        <div class="bantin">
        <h2><?=$tenMatHang?></h2>
        <img src="anh/<?=$hinhAnh?>" />
        <h4><?=$moTa?></h4>
        <h5><?=$mau?></h5>
        <br />
<div class="footer">
<?php
    require_once("footer.php");    
?>
</div>
</body>
</html>