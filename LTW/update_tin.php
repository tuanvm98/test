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
    alert('Th�m m?i th�nh c�ng')
        window.location = 'tintuc.php'
    </script>
    ";
}
 else {
    echo "Kh�ng th�m ��?c";
    var_dump($sql);
 }
?>