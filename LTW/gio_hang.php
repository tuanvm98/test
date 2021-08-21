
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Giỏ hàng của bạn</title>
  <?php
    require_once("header.php");
  ?>
  
</head>
<body>
<div class="container">
    <div class="row">    
        <div class="col-sm-2"></div>
        <div class="col-sm-8">            
            <table class="table table-striped table-responsive">
                <tr>
                    <th>STT</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th></th>
                </tr>
                <?php
                if(isset($_SESSION['login'])){
				if(isset($_SESSION['gio_hang']) && $_SESSION['gio_hang']['tong_so'] > 0){
                    $i=1;
                    $tongTien=0;
                    foreach($_SESSION['gio_hang']['mat_hang'] as $matHang){
                        $thanhTien = $matHang['so_luong'] * $matHang['gia_ban'];
                        $tongTien += $thanhTien;
                ?>
                <tr>
                    <td><?=$i?></td>
                    <td><a href="chi_tiet_dt.php?id=<?=$matHang['id']?>"><?=$matHang['ten_dt']?></a></td>
                    <td><?=$matHang['gia_ban']?></td>
                    <td><?=$matHang['so_luong']?></td>
                    <td><?=$thanhTien?></td>
                    <th>
                        <a class="btn btn-danger" href="gio_hang_xoa.php?id=<?php echo $matHang['ten_dt'];?>">Xóa</a>
                    </th>
                </tr>
                <?php
                    $i++; 
                    }
                    $_SESSION['gio_hang']['tong_tien']=$tongTien;
                ?>
                <tr>
                    <td colspan="8" class="text-left">
                        Tổng giá trị đơn hàng: <strong class="text-primary"><?=$tongTien?> VNĐ</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="text-center">
                        <a href="thanh_toan_off.php" class="btn btn-info">Thanh toán khi nhận hàng</a>
						<a href="thanh_toan_onl.php" class="btn btn-info">Thanh toán online</a>
                    </td>
                </tr>
                <?php   
                }
                else{
                ?>
                <tr>
                    <td colspan="5">Bạn chưa mua sản phẩm nào</td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>             
        <div class="col-sm-2"></div>
    </div>          
</div><br />
<div class="footer">
<?php

    require_once("footer.php");
?>
</body>
</html>
<?php    
}else{
    echo 
    "<script>
    alert('Bạn cần đăng nhập để mua hàng');
    window.location = 'dang_nhap.php';
    </script>";
}
?>