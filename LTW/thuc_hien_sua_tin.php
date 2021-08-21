<?php
$id=$_POST['id'];
$tendienthoai= $_POST['tieude'];
$moTa= $_POST['trichdan'];
$mau= $_POST['noi_dung'];
$hinhAnh = $_POST['hinh_anh'];
$loaiHangID = $_POST['idnhom'];
require("ket_noi.php");
mysqli_query($conn,'set names utf8');
$sql =" UPDATE `tbltintuc` 
        SET `tieude`='". $tendienthoai . "',
            `trichdan`='" . $moTa . "',
            `noi_dung`='" . $mau . "',
            `hinh_anh`='".$hinhAnh."',
            `idnhom`='".$loaiHangID."',
        WHERE `idtin`=".$id;
        
if($conn->query($sql)){
    echo"
    <script>
    alert('Sửa thành công')
    window.location='danh_sach_tin.php';
    </script>
    ";
}
else {
    echo "Không sửa được";
}
?>
