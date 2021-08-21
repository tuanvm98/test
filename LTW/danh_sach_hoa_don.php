<html>
    <head>
        <title>Danh sách hóa đơn</title>
        <meta charset="utf-8" http-equiv="content-type" />
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    </head>
    <body>
<?php
require("ket_noi.php");
$sql = "SELECT * FROM hoa_don
         ORDER BY tong_tien DESC";
$ketQuaTruyVan = $conn->query($sql);
?>
        <div class="container">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Mã hóa đơn</th>
                    <th>Ngày hóa đơn</th>
                    <th>Mã khách hàng</th>
                    <th>Tổng tiền</th>   
                    <th>Thao tác</th>
                   
                </tr>
    <?php
    if($ketQuaTruyVan->num_rows > 0){
while($KH = $ketQuaTruyVan->fetch_assoc()){
?>
                    <tr>
                        <td><?php echo $KH['id']; ?></td>
                        <td><?php echo $KH['ngay_hoa_don']; ?></td>
                        <td><?php echo $KH['nguoi_dung_id']; ?></td>
                        <td><?php echo $KH['tong_tien']; ?></td>     
                    <td>
                        
                        <a class="btn btn-danger" href="xoa_hoa_don.php?id=<?php echo $KH['id'];?>">Xóa</a>
                    </td>   
                   
                </tr>    
    <?php  

        }
    }
    ?>
            </table>
            <a class="btn btn-success" href="them_hoa_don.php">Thêm </a>
          
               
        </div>
    </body>
</html>
