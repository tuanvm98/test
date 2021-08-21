<?php
$loaiHang= $_POST['ten_hang'];
$id=$_POST['id'];
require("ket_noi.php");
$sql ="update `tblhang` set `ten_hang`='". $loaiHang . "'
        where `hang_id`=".$id;
if($conn->query($sql)){
    echo"
    <script>
    alert('Sửa thành công')
    window.location='danh_sach_hang.php';
    </script>
    ";
}
 else {
    echo"Không sửa mới được";
 }
?>