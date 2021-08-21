<?php
$id = $_GET ['id'];
$servername="localhost";
$username="root";
$password="";
$dbname="cua_hang_dt";
$conn=new mysqli($servername,$username,$password,$dbname);
mysqli_query($conn, 'set names utf8');
if($conn->connect_error){
    die ("Connection failed: ".$conn->connect_error);
}
$sql = "SELECT * FROM tblhang
        WHERE hang_id = ". $id;
$ketQuaTruyVan = $conn->query($sql);
 if($ketQuaTruyVan->num_rows > 0)
 {
    while($loaiHang = $ketQuaTruyVan->fetch_assoc())
    {
        $tenLoaiHang = $loaiHang['ten_hang'];
        }
 }
?>
<html>
    <head>
        <title>Sửa hãng</title>
        <meta charset="utf-8" http-equiv="content-type" />
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    </head>
    <body>
        <h1>Sửa hãng</h1>
        <form method="post" action="thuc_hien_sua_hang.php">
            <label>Tên hãng </label>
            <input name="ten_hang" type="text" placeholder="<?=$tenLoaiHang?>" />
            <br />
            <input type="hidden" name="id" value="<?=$id?>" />
            <input type="submit" value="Lưu" />
        </form>
    </body>
</html>