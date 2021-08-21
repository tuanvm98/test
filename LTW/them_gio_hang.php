<html>
<head>
    <meta charset="utf-8" />
</head>
<?php
session_start();
$matHangId = $_POST['id'];
$tenMatHang = $_POST['ten_sp'];
$giaBan = $_POST['gia_ban'];

if(isset($_SESSION['login']) && $_SESSION['login'] == 1){        
    if(isset($_POST['so_luong']) && $_POST['so_luong'] != ""){
        $soLuong = $_POST['so_luong'];
        
        $_SESSION['gio_hang']['mat_hang'][] = array(
            'id' => $matHangId,
            'ten_dt' => $tenMatHang,
            'gia_ban' => $giaBan,
            'so_luong' => $soLuong
        );
        $_SESSION['gio_hang']['tong_so'] += $soLuong;
        echo
        "<script>
        alert('Đã thêm vào giỏ');
        window.location = 'chi_tiet_sp.php?id=$matHangId';
        </script>";
        return true;        
    }
    else{
        echo
        "<script>
        alert('Số lượng không hợp lệ');
        window.location = 'chi_tiet_sp.php?id=$matHangId';
        </script>"; 
    }        
}
else{
    echo 
    "<script>
    alert('Bạn cần đăng nhập để mua hàng');
    window.location = 'dang_nhap.php';
    </script>";    
}
?>
</html>