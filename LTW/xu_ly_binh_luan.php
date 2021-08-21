<?php
$name = $_POST['tac_gia'];
$description =$_POST['email'];
$price = $_POST['noi_dung'];

require("database.php");

$con = new database();
$sql = "INSERT INTO tblbinhluan(`tac_gia`,  `email`,`noi_dung`)
         values(";
$sql .= "'".$name."',";
$sql .= "'".$description."',";
$sql .= "'".$price."')";


$insert = $con->execute_query($sql);
if($insert) //Nếu insert thành công, Hiện ra thông báo và load lại trang productList
{
    echo " <meta charset='utf-8' /> <script>alert('Bình luận thành công !')</script>";
    echo "<script>window.location.href='binhluan.php'</script>";
    
}
else //Nếu insert thất bại, Hiện ra thông báo và load lại trang productList
{
    echo " <meta charset='utf-8' /> <script>alert('Bình luận thành công !')</script>";
    echo "<script>window.location.href='binhluan.php'</script>";
}
?>