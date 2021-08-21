<?php
$tenMatHang= $_POST['ten_sp']; 
$moTa= $_POST['mo_ta'];
$hinhAnh= $_POST['hinh_anh'];
$giaBan= $_POST['gia_ban'];
$loaiHang= $_POST['hang_id'];
$loaisp= $_POST['loaisp_id'];
$mau= $_POST['mau'];
$sl= $_POST['so_luong'];
$tt= $_POST['tinhtrang'];
require("ket_noi.php");
}
$sql = " INSERT INTO `tblsp`(`ten_sp`, `mo_ta`, `hinh_anh`, `gia_ban`, `hang_id`,`loaisp_id`, `mau`, `so_luong`, `tinhtrang`) 
            VALUE ('" .$tenMatHang."','".$moTa."', '".$hinhAnh."', '" .$giaBan."', '" .$loaiHang."','" .$loaisp."', '" .$mau."','".$sl."', '".$tt."')";

if($conn->query($sql)){
   
    echo "
    <script>
    alert('Thêm mới thành công')
        window.location = 'danh_sach_sp.php'
    </script>
    ";
}
 else {
    echo "Không thêm được";
    var_dump($sql);
 }
?>