<html>
    <head>
        <title>Danh sách loại hàng</title>
        <meta charset="utf-8" http-equiv="content-type" />
        <script src="jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="bootstrap/css/style.css" />
    <?php
		require_once("a_header.php");
	?>
	</head>
    <body>
<?php
require_once("ket_noi.php");
$sql = "SELECT * FROM tblloaisp";
$ketQuaTruyVan = $conn->query($sql);
?>
        <div class="container">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Tên loại sản phẩm</th>
                    <th>Thao tác</th>
                </tr>
    <?php
    if($ketQuaTruyVan->num_rows > 0){
        while($loaiHang = $ketQuaTruyVan->fetch_assoc()){

    ?>
            <tr>
                    <td><?php echo $loaiHang['loaisp_id']; ?></td>
                    <td><?php echo $loaiHang['ten_loai_sp']; ?></td>
                    <td>
                        <a class="btn btn-info" href="sua_loai_sp.php?loaisp_id=<?php echo $loaiHang['loaisp_id'];?>">Sửa</a>  
                        <a class="btn btn-danger" href="xoa_loai_sp.php?loaisp_id=<?php echo $loaiHang['loaisp_id'];?>">Xóa</a>
                    </td>
                </tr>    
    <?php  
        }
    }
    ?>
            </table>
            <a class="btn btn-success" href="them_loai_sp.php">Thêm loại sản phẩm</a>
        </div>
    </body>
</html>