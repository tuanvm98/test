<html>
<head>
    <meta charset="utf-8" />
</head>
<?php
require_once("ket_noi.php");
$hoten = $_POST['ten_nguoi_dung'];
$tendangnhap = $_POST['ten_dang_nhap'];
$sdt = $_POST['sdt'];
$email = $_POST['email'];
$matKhau = $_POST['mat_khau'];

$sql = "INSERT INTO `tblkh`(`ten_nguoi_dung`,`ten_dang_nhap`, `sdt`, `email`, `mat_khau`) 
            VALUE ('" .$hoten."','" .$tendangnhap."','" .$sdt."', '".$email."', '".$matKhau."')";

if($conn->query($sql)){    
    echo "
        <script>
        alert('Ðăng ký thành công');
        window.location = 'index.php';
        </script>
    ";
}
else {
    echo "
        <script>
        alert('Lỗi khi đăng ký');
        window.location = 'index.php';
        </script>
    ";
}
?>
</html