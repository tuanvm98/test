<?php
// Gan bien $id la id get duoc tu URL
$id = $_GET['id'];
// Thuc hien ket noi CSDL
require("ket_noi.php");
// Viet cau truy van thuc hien xoa ban ghi co id = $id
$sql = "DELETE FROM `tblkh` WHERE nguoi_dung_id = ".$id;
// Thuc hien cau truy van

if($conn->query($sql)){
    echo "Xóa thành công";
    echo "
    <script>
        window.location = 'danh_sach_khach_hang.php'
    </script>
    ";
}
else {
    echo"Không xóa được";
}
?>