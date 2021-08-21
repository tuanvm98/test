<html>
<head>
    <meta charset="utf-8" />
</head>
<?php
require("ket_noi.php");
$id =$_POST['id'];
$tenNguoiDung = $_POST['ten_dang_nhap'];
$chucvu = $_POST['chuc_vu'];
$matKhau = md5($_POST['mat_khau']);

$sql = "INSERT INTO `tblnhanvien`(`id`, `ten_nv`, `chuc_vu`, `mat_khau`) 
            VALUE ('" .$id."', '".$tenNguoiDung."', '".$chucvu."','".$matKhau."' )";

if($conn->query($sql)){    
    echo "
        <script>
        alert('Ðăng ký thành công');
        window.location = 'a_index.php';
        </script>
    ";
}
else {
    echo "
        <script>
        alert('Lỗi khi dang ký');
        window.location = 'a_index.php';
        </script>
    ";
}
?>
</html>