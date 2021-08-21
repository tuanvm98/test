<?php
//gan bien $id la id get duoc tu URL
$ten=$_GET['id'];
session_start();

if(isset($_SESSION['gio_hang']))
{
	$flag=0;
	$i=0;
	foreach($_SESSION['gio_hang']['mat_hang'] as $matHang)
	{		
		if ($matHang['ten_dt']==$ten){
			array_splice($_SESSION['gio_hang']['mat_hang'],$i,1);
			$_SESSION['gio_hang']['tong_so']=$_SESSION['gio_hang']['tong_so']-$matHang['so_luong'];
			$flag=1;
			break;
		}
		$i++;		
	}
}

if($flag=1){
    echo"
    <script>
    alert('Xoá thành công')
    window.location='gio_hang.php';
    </script>
    ";
    }
 else   {
    echo"
    <script>
    alert('Không xoá được')
    window.location='gio_hang.php';
    </script>
    ";
 }
?>