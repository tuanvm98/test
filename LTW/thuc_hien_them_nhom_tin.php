<?php
$loaiHang= $_POST['tennhom'];
require("ket_noi.php");
$sql = " INSERT INTO `tblnhomtin`(`tennhom`) 
            VALUE ('" .$loaiHang."')";
if($conn->query($sql)){
    echo"
    <script>
    alert('Thêm mới thành công')
    window.location='danh_sach_nhom_tin.php';
    </script>
    ";
}
 else {
    echo"Không thêm mới được";
 }
?>