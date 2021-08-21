<?php
$tenLoaiHang= $_POST['ten_loai_sp'];
require("ket_noi.php");
$sql = " INSERT INTO `tblloaisp`(`ten_loai_sp`) 
            VALUE ('" .$tenLoaiHang."')";

if($conn->query($sql)){
    echo"Thêm mới thành công";
}
 else {
    echo"Không thêm mới được";
 }
?>