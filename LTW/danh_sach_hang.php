<html>
    <head>
        <title>Danh sách hãng</title>
        <meta charset="utf-8" http-equiv="content-type" />
        <script src="jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <?php
        require_once("a_header.php");
    ?>
	</head>
    <body>
<?php
require_once("ket_noi.php");
$sql = "SELECT * FROM tblhang";
$ketQuaTruyVan = $conn->query($sql);
?>
        <div class="container">
            <table class="table table-striped table-bordered">
                <tr>
                    <th> Hãng ID</th>
                    <th>Tên hãng</th>
                    <th>Thao tác</th>
                </tr>
    <?php
    if($ketQuaTruyVan->num_rows > 0){
        while($loaiHang = $ketQuaTruyVan->fetch_assoc()){

    ?>
            <tr>
                    <td><?php echo $loaiHang['hang_id']; ?></td>
                    <td><?php echo $loaiHang['ten_hang']; ?></td>
                    <td>
                        <a class="btn btn-info" href="sua_hang.php?id=<?php echo $loaiHang['hang_id'];?>">Sửa</a>  
                        <a class="btn btn-danger" href="xoa_hang.php?id=<?php echo $loaiHang['hang_id'];?>">Xóa</a>
                    </td>
                </tr>    
    <?php  
        }
    }
    ?>
            </table>
            <a class="btn btn-success" href="them_hang.php">Thêm hãng</a>
        </div>
    </body>
</html>