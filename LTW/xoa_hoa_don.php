<?php
//gan bien $id la id get duoc tu URL
$id=$_GET['id'];
//thuc hien ket noi CSDL
require("ket_noi.php");
//viet cau tuy van thuc hien xoa ban ghi co id=$id
$sql="delete from `hoa_don` where id = ".$id;
//thuc hien cau truy van
if($conn->query($sql)){
    echo"
    <script>
    alert('Xoá Thành Công')
    window.location='danh_sach_hoa_don.php';
    </script>
    ";
    }
 else   {
    echo "Không xoá du?c";
 }
?>