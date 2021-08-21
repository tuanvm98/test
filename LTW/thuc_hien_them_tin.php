<?php
$tenMatHang= $_POST['tieude']; 
$moTa= $_POST['trichdan'];
$hinhAnh= $_POST['hinh_anh'];
$mau= $_POST['noi_dung'];
$loaiHang= $_POST['idnhom'];
require("ket_noi.php");
mysqli_query($conn,'set names utf8');
$sql = " INSERT INTO `tbltintuc`(`tieude`, `trichdan`, `hinh_anh`, `idnhom`,`noi_dung`) 
            VALUE ('" .$tenMatHang."','".$moTa."', '".$hinhAnh."', '" .$loaiHang."', '" .$mau."')";

if($conn->query($sql)){
   
    echo "
    <script>
    alert('Thêm mới thành công')
        window.location = 'danh_sach_tin.php'
    </script>
    ";
}
 else {
    echo "Không thêm được";
    var_dump($sql);
 }
?>