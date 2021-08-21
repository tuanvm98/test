<?php
$loaiHang= $_POST['ten_hang'];
require("ket_noi.php");
$sql = " INSERT INTO `tblhang`(`ten_hang`) 
            VALUE ('" .$loaiHang."')";
if($conn->query($sql)){
    echo"
    <script>
    alert('Thêm mới thành công')
    window.location='danh_sach_hang.php';
    </script>
    ";
}
 else {
    echo"Không thêm mới được";
 }
?>