<html>
<head>
    <meta charset="utf-8" />
</head>
<?php
require('ket_noi.php');
$tenNguoiDung = $_POST['ten_dang_nhap'];
$matKhau = md5($_POST['mat_khau']);

$sql = "SELECT * FROM `tblkh`
        WHERE ten_dang_nhap = '".$tenNguoiDung."'
            AND mat_khau = '".$matKhau."'";
$ketQua = $conn->query($sql);
if($ketQua->num_rows > 0){  
    while($nguoiDung = $ketQua->fetch_assoc()){
        session_start();
        $_SESSION["login"] = 1;
        $_SESSION["ten_dang_nhap"] = $tenNguoiDung;
        $_SESSION["gio_hang"]["mat_hang"] = array();
        $_SESSION["gio_hang"]["so_luong"] = 0;
        $_SESSION["gio_hang"]["tong_so"] = 0;
        $_SESSION["gio_hang"]["tong_tien"] = 0;
        $_SESSION['id'] = $nguoiDung['nguoi_dung_id'];
		if ($nguoiDung['permission']==1){
			$permission= md5("admin");
		}
		else ($permission= md5("guest") );
		setcookie("permission",$permission, time() + (86400 * 30), "/");
		if ($nguoiDung['permission']==1){
			$_COOKIE['permission']= $permission;
		}
		else ($_COOKIE['permission']= $permission );
        echo "
            <script>
            alert('Ðăng nhập thành công');
            window.location = 'index.php';
            </script>
        ";
    }    
}
else {    
    echo "
        <script>
        alert('Sai tên đăng nhập hoặc mật khẩu');
        window.location = 'dang_nhap.php';
        </script>
    ";
}
?>
</html>