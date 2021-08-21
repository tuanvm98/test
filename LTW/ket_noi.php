<?php
$servername="localhost";
$username="root";
$password="";
$dbname="cua_hang_dt";
$conn=new mysqli($servername,$username,$password,$dbname);
mysqli_query($conn, 'set names utf8');
if($conn->connect_error){
    die ("Connection failed: ".$conn->connect_error);
}
?>