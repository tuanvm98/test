<html>
    <head>
        <title>Danh sách điện thoại</title>
        <meta charset="utf-8" http-equiv="content-type" />
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <?php
        require_once("a_header.php");
    ?>
	</head>
    <body>
<?php
require('ket_noi.php');
$sql = "SELECT dt.sp_id, dt.hang_id, dt.ten_sp, lh.ten_hang, dt.hinh_anh, dt.mo_ta, dt.mau, dt.gia_ban,dt.so_luong, dt.tinhtrang, l.ten_loai_sp, lh.hang_id
        FROM (tblsp AS dt JOIN tblhang AS lh ON dt.hang_id = lh.hang_id) JOIN tblloaisp as l on dt.loaisp_id=l.loaisp_id
        ORDER BY dt.sp_id"; 
$ketQuaTruyVan = $conn->query($sql);
//var_dump($ketQuaTruyVan);
?>
        <div class="container">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Tên điện thoại</th>
                    <th>Tên hãng</th>
                    <th>Loại sản phẩm</th>
                    <th>Màu</th>
                    <th>Giá bán</th>
                    <th>Số lượng</th>
                    <th>Tình trạng</th>
                    <th>Hình ảnh</th>
                    <th>Mô tả</th>
                    <th>Thao tác</th>
                </tr>
        <?php
    if($ketQuaTruyVan->num_rows > 0){
        while($matHang = $ketQuaTruyVan->fetch_assoc()){
    ?>
            <tr>
                    <td><?php echo $matHang['sp_id']; ?></td>
                    <td><?php echo $matHang['ten_sp']; ?></td>
                    <td><?php echo $matHang['ten_hang']; ?></td>
                    <td><?php echo $matHang['ten_loai_sp']; ?></td>
                    <td><?php echo $matHang['mau']; ?></td>
                    <td><?php echo $matHang['gia_ban']; ?></td>
                    <td><?php echo $matHang['so_luong']; ?></td>
                    <td><?php echo $matHang['tinhtrang']; ?></td>
                    <td><?php echo $matHang['hinh_anh']; ?></td>
                    <td><?php echo $matHang['mo_ta']; ?></td>
                   
                    
                    <td>
                        <a class="btn btn-info" href="sua_sp.php?id=<?php echo $matHang['sp_id'];?>">Sửa</a>  
                        <a class="btn btn-danger" href="xoa_sp.php?id=<?php echo $matHang['sp_id'];?>">Xóa</a>
                    </td>
                </tr>    
    <?php  
        }
    }
    ?>

            </table>
            <a class="btn btn-success" href="them_san_pham.php">Thêm sản phẩm</a>
        </div>
    </body>
	<?php
        require_once("footer.php");
    ?>
</html>

