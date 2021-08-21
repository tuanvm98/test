<html>
    <head>
        <title>Danh sách top5 khách hàng mua nhiều</title>
        <meta charset="utf-8" http-equiv="content-type" />
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    </head>
    <body>
    <h1>Danh sách khách hàng mua nhiều nhất</h1>
<?php
require('ket_noi.php');
$sql = "SELECT kh.ten_dang_nhap,kh.ten_nguoi_dung,hd.nguoi_dung_id, sum(hd.tong_tien) as Tongtien 
        FROM tblkh AS kh JOIN hoa_don AS hd ON kh.nguoi_dung_id = hd.nguoi_dung_id
        group by kh.ten_dang_nhap,kh.ten_nguoi_dung, hd.nguoi_dung_id order by  Tongtien desc limit 0,5 "; 
$ketQuaTruyVan = $conn->query($sql);
//var_dump($ketQuaTruyVan);
?>
        <div class="container">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Mã khách hàng</th>
                    <th>Tên đăng nhập</th>
                    <th>Tên khách hàng</th>
                    <th>Tổng tiền đã mua</th>
                </tr>
        <?php
    if($ketQuaTruyVan->num_rows > 0){
        while($matHang = $ketQuaTruyVan->fetch_assoc()){
    ?>
            <tr>
                    <td><?php echo $matHang['nguoi_dung_id']; ?></td>
                    <td><?php echo $matHang['ten_dang_nhap']; ?></td>
                    <td><?php echo $matHang['ten_nguoi_dung']; ?></td>                
                    <td><?php echo $matHang['Tongtien']; ?></td>
                   
            </tr>    
    <?php  
        }
    }
    ?>
            </table>
           
        </div>
    </body>
</html>

