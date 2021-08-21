<html>
<head>
    <meta charset="utf-8" />
</head>
<?php
session_start();
if(isset($_SESSION['login']) && $_SESSION['login'] == 1){        
    if(isset($_SESSION['gio_hang']) && $_SESSION['gio_hang']['tong_so'] > 0){
        require("ket_noi.php");
        
        $today = date("Y/m/d");
        
        $sql = "INSERT INTO `hoa_don`(`ngay_hoa_don`, `nguoi_dung_id`, `tong_tien`) 
                VALUE ('".$today."', '" .$_SESSION['nguoi_dung_id']."','".$_SESSION['gio_hang']['tong_tien']."')";
                          
        if($conn->query($sql)){
            $sql_latest = 
                "SELECT * FROM `hoa_don`
                ORDER BY id DESC
                ";
            $ketQuaTruyVan1 = $conn->query($sql_latest);
            if($ketQuaTruyVan1->num_rows > 0){
                while($hoaDon = $ketQuaTruyVan1->fetch_assoc()){
                    $latestId = $hoaDon['id'];                
                }
            }
            foreach($_SESSION['gio_hang']['mat_hang'] as $matHang){
                $sql_chi_tiet = 
                    "INSERT INTO `chi_tiet_hoa_don`
                        (`hoa_don_id`,`sp_id`, `so_luong`, `gia_ban`) 
                    VALUE ('".$latestId."', '" .$matHang['id']."','".$matHang['so_luong']."', '".$matHang['gia_ban']."')";
                
				$sqlslsp = "SELECT * FROM tblsp WHERE sp_id='".$matHang['id']."'";
				$sp=$conn->query($sqlslsp);
				while($item = $sp->fetch_assoc()){
					$slsp=$item['so_luong'];
				}
				if ($slsp>=$matHang['so_luong']){
					$slsp=$slsp-$matHang['so_luong'];
					$sqlslsp = "UPDATE tblsp SET so_luong='".$slsp."' WHERE sp_id='".$matHang['id']."'";
					$conn->query($sqlslsp);					
				}else{
					echo
					"<script>
					alert('Xảy ra lỗi');              
					</script>";
				}
                $conn->query($sql_chi_tiet);
            }
            
            $_SESSION["gio_hang"]["mat_hang"] = array();
            $_SESSION["gio_hang"]["tong_so"] = 0;
            $_SESSION["gio_hang"]["tong_tien"] = 0;
            
            echo
                "<script>
                alert('Thanh toán thành công');
                window.location = 'index.php';
                </script>";
        }
        else {
            echo
                "<script>
                alert('Lỗi khi thanh toán');
                window.location = 'gio_hang.php';
                </script>";
        }        
    }
    else{
        echo
        "<script>
        alert('Bạn chưa mua sản phẩm nào');
        window.location = 'gio_hang.php';
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