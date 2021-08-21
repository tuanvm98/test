<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chi tiết điện thoại</title>
    <?php
        require_once("header.php");
    ?>
</head>
<body>
<?php
$id=$_GET['id'];
require('ket_noi.php');
$sql = "SELECT *
        FROM tblsp
        WHERE sp_id=".$id;
$ketquatruyvan = $conn->query($sql);
if($ketquatruyvan->num_rows > 0){
    while($mathang = $ketquatruyvan->fetch_assoc()){
        $tenMatHang = $mathang['ten_sp'];
        $hang = $mathang['hang_id'];
        $loaisp = $mathang['loaisp_id'];
        $mau = $mathang['mau'];
        $hinhAnh = $mathang['hinh_anh'];
        $giaBan = $mathang['gia_ban'];
        $tt = $mathang['tinhtrang'];
        $moTa = $mathang['mo_ta'];
    }
}
$sql2=" SELECT `comment`.`commentTxt`,tblkh.ten_nguoi_dung 
		FROM `comment` 
		INNER JOIN tblkh ON `comment`.`id_khachhang`=tblkh.nguoi_dung_id 
		WHERE `comment`.`id_sp`=".$id;
$ketquatruyvan1 = $conn->query($sql2);
if($ketquatruyvan1->num_rows > 0){
	$num=1;
	while($comment = $ketquatruyvan1->fetch_assoc()){
		$com[$num]['name']=$comment['ten_nguoi_dung'];
		$com[$num]['cmt']=$comment['commentTxt'];
		$num++;
}
}		
?>

<div class="container">
    <div class="row"> 
        <div class="col-sm-4">
            <img src="anh/<?=$hinhAnh?>" class="img-responsive" style="width:100%; height: 300px;" alt="Image" />
         </div>
        <div class="tableparameter">
            <h4>Điện thoại <?=$tenMatHang?></h4>
            <h4>Màu <?=$mau?></h4>
            <h4>Giá <?=$giaBan?> VNĐ</h4>
            <h4>Thông số kỹ thuật <?=$moTa?></h4>
            <h4>Tình trạng: <?=$tt?></h4>
            
            <form class="form-inline" method="post" action="them_gio_hang.php">
                <input class="form-control" type="number" id="so_luong" name="so_luong" placeholder="Số lượng" />
                <input type="hidden" value="<?=$id?>" name="id" />
                <input type="hidden" value="<?=$tenMatHang?>" name="ten_sp" />
                <input type="hidden" value="<?=$hang?>" name="hang_id" />
                <input type="hidden" value="<?=$loaisp?>" name="loaisp_id" />
                <input type="hidden" value="<?=$mau?>" name="mau" />
                <input type="hidden" value="<?=$giaBan?>" name="gia_ban" />
                 <input type="hidden" value="<?=$tt?>" name="tinhtrang" />
                <input type="submit" class="btn btn-success" value="Mua ngay" />
            </form>   
        </div>
    </div>
	<div class="row">
		<div class="col-md-8">
			<h2>Bình luận</h2>
			<div class="row">				
				<div class="col-md-1">
					<img src="anh/no-avatar.png" style="width:50px; height: 50px;" >
				</div>
				<div class="col-md-11">
					<form class="form-inline" method="post" action="them_cmt.php">
						<input type="hidden" value="<?=$id?>" name="id" />
						<textarea class="commentText" cols="106" rows="4" name="cmt"></textarea>
												
							<input type='submit' class='btn btn-success commentbtn' value='Comment' name='Comment' />
											
					</form>
				</div>
			</div>
			</br>
			<?php if (isset($com)){ 
				foreach ($com as $comvalue ){ ?>
					<div class="row">
						<div class="col-md-1">
							<img src="anh/no-avatar.png" style="width:50px; height: 50px;" >
						</div>
						<div class="col-md-11">
							<h4><?php echo ($comvalue['name']);?></h4>
							<p><?php echo ($comvalue['cmt']);?></p>
						</div>
					</div>
				<?php }
			}?>	
			 	
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