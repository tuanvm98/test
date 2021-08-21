<?php
$id = $_GET ['loaisp_id'];
$servername="localhost";
$username="root";
$password="";
$dbname="cua_hang_dt";
$conn=new mysqli($servername,$username,$password,$dbname);
mysqli_query($conn, 'set names utf8');
if($conn->connect_error){
    die ("Connection failed: ".$conn->connect_error);
}
$sql = "SELECT * FROM tblloaisp
        WHERE loaisp_id = ". $id;
$ketQuaTruyVan = $conn->query($sql);

if($ketQuaTruyVan->num_rows>0){
    while($loaiHang= $ketQuaTruyVan->fetch_assoc()){
        $tenLoaiHang = $loaiHang['ten_loai_sp'];
    }
}
?>
<html>
    <head>
        <title>Sửa loại sản phẩm</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Sửa loại sản phẩm</h1>
        <form method="post" action="thuc_hien_sua_loai_sp.php">
            <label>Tên loại sản phẩm </label>
            <input name="ten_loai_sp" type="text" placeholder="<?=$tenLoaiHang?>" />
            <br />
            <input type="hidden" name="loaisp_id" value="<?=$id?>" />
            <input type="submit" value="Lưu" />
        </form>
    </body>
</html>