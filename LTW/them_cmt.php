<?php 
	if(isset($_POST['Comment'])){
		$sp_id=$_POST['id'];
		$cmtTxt=$_POST['cmt'];
	
		session_start();
		if (isset($_SESSION['id'])){
			$id=$_SESSION['id'];
		}
		else $id=3;
		require("ket_noi.php");

		$format = "INSERT INTO comment(`id_khachhang`,`commentTxt`, `id_sp`) 
			VALUES ('%s','%s','%s')";
		
		$sql = sprintf($format, $id, $cmtTxt, $sp_id);
		//$sql = "INSERT INTO comment(`id_khachhang`,`commentTxt`, `id_sp`) 
		//	VALUES ('" .$id."','" .$cmtTxt."', '" .$sp_id."')";
		if($conn->query($sql)){
			echo "Bình luận thành công";
			echo "
				<script>
				window.location = 'chi_tiet_sp.php?id=".$sp_id."'
				</script>
			";
		}
		 else {
			echo "Không thêm được";
			echo "
				<script>
				window.location = 'chi_tiet_sp.php?id=".$sp_id."'
				</script>
			";
			 }
	
	
	
	
	
	}
	
?>