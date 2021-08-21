<?php
$tenMatHang= $_POST['tieude']; 
$moTa= $_POST['trichdan'];
$hinhAnh= $_POST['hinh_anh'];
$mau= $_POST['noi_dung'];
$loaiHang= $_POST['idnhom'];
require("ket_noi.php");
$sql = " INSERT INTO `tbltintuc`(`tieude`, `trichdan`, `hinh_anh`, `idnhom`,`noi_dung`) 
            VALUE ('" .$tenMatHang."','".$moTa."', '".$hinhAnh."', '" .$loaiHang."', '" .$mau."')";

if($conn->query($sql)){
   
    echo "
    <script>
    alert('Thêm m?i thành công')
        window.location = 'tintuc.php'
    </script>
    ";
}
 else {
    echo "Không thêm ðý?c";
    var_dump($sql);
 }
?>