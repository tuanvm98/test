<?php
$id=$_POST['sp_id'];
$tendienthoai= $_POST['ten_sp'];
$moTa= $_POST['mo_ta'];
$mau= $_POST['mau'];
$hinhAnh = $_POST['hinh_anh'];
$giaBan = $_POST['gia_ban'];
$sl = $_POST['so_luong'];
$loaiHangID = $_POST['hang_id'];
$loaisp = $_POST['loaisp_id'];
$tt = $_POST['tinhtrang'];

require("ket_noi.php");

	$sql =" UPDATE `tblsp` 
        SET `ten_sp`='". $tendienthoai . "',
            `mo_ta`='" . $moTa . "',
            `mau`='" . $mau . "',
            `gia_ban`='".$giaBan."',
            `hinh_anh`='".$hinhAnh."',
            `so_luong`='".$sl."',
            `hang_id`='".$loaiHangID."',
            `loaisp_id`='".$loaisp."',
            `tinhtrang`='".$tt."'
        WHERE `sp_id`=".$id;
  



  
if($conn->query($sql)){
    echo"
    <script>
    alert('Sửa thành công')
    window.location='danh_sach_sp.php';
    </script>
    ";
}
else {
    echo "Không sửa được";
    var_dump($sql);
}
	


?>
