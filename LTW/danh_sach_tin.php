<html>
    <head>
        <title>Danh sách tin</title>
        <meta charset="utf-8" http-equiv="content-type" />
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    </head>
    <body>
<?php
require('ket_noi.php');
$sql = "SELECT t.idtin, t.idnhom, t.tieude, nt.tennhom, t.hinh_anh, t.noi_dung, t.trichdan,nt.tennhom, nt.idnhom
        FROM (tbltintuc AS t JOIN tblnhomtin AS nt ON t.idnhom = nt.idnhom)
        ORDER BY t.idtin"; 
$ketQuaTruyVan = $conn->query($sql);
//var_dump($ketQuaTruyVan);
?>
        <div class="container">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Tên nhóm tin</th>
                <th>Trích dẫn</th>
                    
                     <th>Hình ảnh</th>
                    <th>Nội dung</th>
                    <th>Thao tác</th>
                </tr>
        <?php
    if($ketQuaTruyVan->num_rows > 0){
        while($matHang = $ketQuaTruyVan->fetch_assoc()){
    ?>
            <tr>
                    <td><?php echo $matHang['idtin']; ?></td>
                    <td><?php echo $matHang['tieude']; ?></td>
                    <td><?php echo $matHang['tennhom']; ?></td>
                   
                    <td><?php echo $matHang['trichdan']; ?></td>
                    
                     
                    <td><?php echo $matHang['hinh_anh']; ?></td>
                    <td><?php echo $matHang['noi_dung']; ?></td>
                   
                    
                    <td>
                        <a class="btn btn-info" href="sua_tin.php?id=<?php echo $matHang['idtin'];?>">Sửa</a>  
                        <a class="btn btn-danger" href="xoa_tin.php?id=<?php echo $matHang['idtin'];?>">Xóa</a>
                    </td>
                </tr>    
    <?php  
        }
    }
    ?>

            </table>
            <a class="btn btn-success" href="them_tin.php">Thêm tin</a>
        </div>
    </body>
</html>

