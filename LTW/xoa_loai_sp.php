<?php
//gan bien $id la id get duoc tu URL
$id=$_GET['loaisp_id'];
//thuc hien ket noi CSDL
require("ket_noi.php");
//viet cau tuy van thuc hien xoa ban ghi co id=$id
$sql="delete from `tblloaisp` where loaisp_id = ".$id;
//thuc hien cau truy van
if($conn->query($sql)){
    echo"
    <script>
    alert('Xoá Thành Công')
    window.location='danh_sach_sp.php';
    </script>
    ";
    }
 else   {
    echo "Không xoá được";
 }
?>