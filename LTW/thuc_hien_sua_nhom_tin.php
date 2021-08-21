<?php
$tenLoaiHang= $_POST['tennhom'];
$id=$_POST['idnhom'];
require("ket_noi.php");
$sql ="update `tblnhomtin` set `tennhom`='". $tenLoaiHang . "'
        where `idnhom`=".$id;
        
if($conn->query($sql)){
    echo"Sửa mới thành công";
}
 else {
    echo"Không sửa mới được";
 }
?>