<html>
    <head>
        <title>Danh sách top5 sản phẩm bán chạy</title>
        <meta charset="utf-8" http-equiv="content-type" />
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    </head>
    <body>
    <h1>Danh sách 5 sản phẩm bán chạy nhất</h1>
<?php
require('ket_noi.php');
$sql = "SELECT sp.ten_sp,sp.mau, sum(cthd.so_luong) as Tong 
        FROM tblsp AS sp JOIN chi_tiet_hoa_don AS cthd ON sp.sp_id = cthd.sp_id
        group by sp.ten_sp, sp.mau order by  Tong desc limit 0,5 "; 
$ketQuaTruyVan = $conn->query($sql);
//var_dump($ketQuaTruyVan);
?>
        <div class="container">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Tên điện thoại</th>
                    <th>Màu</th>
                    <th>Tổng</th>
                </tr>
        <?php
    if($ketQuaTruyVan->num_rows > 0){
        while($matHang = $ketQuaTruyVan->fetch_assoc()){
    ?>
            <tr>
                    <td><?php echo $matHang['ten_sp']; ?></td>
                    <td><?php echo $matHang['mau']; ?></td>
                    <td><?php echo $matHang['Tong']; ?></td>
                   
            </tr>    
    <?php  
        }
    }
    ?>
            </table>
           
        </div>
    </body>
</html>

