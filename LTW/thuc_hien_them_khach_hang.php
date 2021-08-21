<?php
$hoten= $_POST['ten_nguoi_dung'];
$tendangnhap= $_POST['ten_dang_nhap'];
$matKhau = $_POST['mat_khau'];
$email= $_POST['email'];
$sdt= $_POST['sdt'];
require("ket_noi.php");
$sql = "INSERT INTO tblkh(`ten_nguoi_dung`,`ten_dang_nhap`, `mat_khau`, `email`, `sdt`) 
        VALUES ('" .$hoten."','" .$tendangnhap."', '" .$matKhau."', '" .$email."','".$sdt."')";
if($conn->query($sql)){
    echo "Thêm mới thành công";
    echo "
        <script>
        window.location = 'danh_sach_khach_hang.php';
        </script>
    ";
}
 else {
    echo "Không thêm được";
    var_dump($_POST);
    var_dump($sql);
     }
?>
