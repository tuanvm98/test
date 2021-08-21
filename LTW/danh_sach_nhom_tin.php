<html>
    <head>
        <title>Danh sách nhóm tin</title>
        <meta charset="utf-8" http-equiv="content-type" />
        <script src="jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="bootstrap/css/style.css" />
    </head>
    <body>
<?php
require_once("ket_noi.php");
$sql = "SELECT * FROM tblnhomtin";
$ketQuaTruyVan = $conn->query($sql);
?>
        <div class="container">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Tên loại nhóm tin</th>
                    <th>Thao tác</th>
                </tr>
    <?php
    if($ketQuaTruyVan->num_rows > 0){
        while($loaiHang = $ketQuaTruyVan->fetch_assoc()){

    ?>
            <tr>
                    <td><?php echo $loaiHang['idnhom']; ?></td>
                    <td><?php echo $loaiHang['tennhom']; ?></td>
                    <td>
                        <a class="btn btn-info" href="sua_nhom_tin.php?idnhom=<?php echo $loaiHang['idnhom'];?>">Sửa</a>  
                        <a class="btn btn-danger" href="xoa_nhom_tin.php?idnhom=<?php echo $loaiHang['idnhom'];?>">Xóa</a>
                    </td>
                </tr>    
    <?php  
        }
    }
    ?>
            </table>
            <a class="btn btn-success" href="them_nhom_tin.php">Thêm nhóm tin</a>
        </div>
    </body>
</html>