<?php
$tenLoaiHang= $_POST['ten_loai_sp'];
$id=$_POST['loaisp_ id'];
require("ket_noi.php");
$sql ="update `tblloaisp` set `ten_loai_sp`='". $tenLoaiHang . "'
        where `loaisp_id`=".$id;
        
if($conn->query($sql)){
    echo"Sửa mới thành công";
}
 else {
    echo"Không sửa mới được";
 }
?>