<html>
<head>
    <meta charset="utf-8" />
</head>
<?php
require('ket_noi.php');
$tenNguoiDung = $_POST['ten_dang_nhap'];
$matKhau = md5($_POST['mat_khau']);

$sql = "SELECT * FROM `tblnhanvien`
        WHERE ten_nv = '".$tenNguoiDung."'
            AND mat_khau = '".$matKhau."'";
$ketQua = $conn->query($sql);
if($ketQua->num_rows > 0){  
    while($nguoiDung = $ketQua->fetch_assoc()){
        session_start();
        $_SESSION["login"] = 1;
        $_SESSION["ten_nv"] = $tenNguoiDung;
        $_SESSION["gio_hang"]["mat_hang"] = array();
         $_SESSION['id'] = $nguoiDung['id'];
        $_SESSION["gio_hang"]["so_luong"] = 0;
       
        echo "
            <script>
            alert('Ðăng nhập thành công');
            window.location = 'a1_index.php';
            </script>
        ";
    }    
}
else {    
    echo "
        <script>
        alert('Sai tên đăng nhập hoặc mật khẩu');
        window.location = 'a_dang_nhap.php';
        </script>
    ";
}
?>
</html>