<html>
    <head>
        <title>Danh sách khách hàng</title>
        <meta charset="utf-8" http-equiv="content-type" />
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="bootstrap/css/style.css" />
    <?php
		require_once("a_header.php");
	?>
	
	</head>
    <body>
<?php
require("ket_noi.php");
$sql = "SELECT * FROM tblkh";
$ketQuaTruyVan = $conn->query($sql);
?>
        <div class="container">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Mã KH</th>
                    <th>Họ tên</th>
                    <th>Tên đăng nhập</th>
                    <th>Số điện thoại</th>    
                    <th>Email</th>
                     <th>Mật khẩu</th>
                    <th>Thao tác</th>
                   
                </tr>
    <?php
    if($ketQuaTruyVan->num_rows > 0){
while($KH = $ketQuaTruyVan->fetch_assoc()){
?>
                    <tr>
                        <td><?php echo $KH['nguoi_dung_id']; ?></td>
                        <td><?php echo $KH['ten_nguoi_dung']; ?></td>
                        <td><?php echo $KH['ten_dang_nhap']; ?></td>
                        <td><?php echo $KH['sdt']; ?></td>
                        <td><?php echo $KH['email']; ?></td>  
                        <td><?php echo $KH['mat_khau']; ?></td>     
                    <td>
                        
                        <a class="btn btn-danger" href="xoa_khach_hang.php?id=<?php echo $KH['nguoi_dung_id'];?>">Xóa</a>
                    </td>   
                   
                </tr>    
    <?php  

        }
    }
    ?>
            </table>
            <a class="btn btn-success" href="them_khach_hang.php">Thêm </a>
          
               
        </div>
    </body>
</html>
