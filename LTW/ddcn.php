<!DOCTYPE html>
<html lang="en">
<head>
 <title>Danh tin công nghệ</title>
 <?php
    require_once("header.php");
 ?>
</head>
<body>
<?php
require_once("ket_noi.php");
$sql = "SELECT t.idtin, t.idnhom, t.tieude, nt.tennhom, t.hinh_anh, t.noi_dung, t.trichdan,nt.tennhom, nt.idnhom
        FROM (tbltintuc AS t JOIN tblnhomtin AS nt ON t.idnhom = nt.idnhom)
        where nt.idnhom =2
        limit 0,6";
$ketquatruyvan = $conn->query($sql);

if($ketquatruyvan->num_rows > 0){
    $i=0;
    while($mathang = $ketquatruyvan->fetch_assoc())
	{
        if($i%3==0)
		{
        ?>
			<div class="container">
				<div class="row">    
        <?php
        }
		?>
					<div class="col-sm-4">
					  <div class="panel panel-primary">
						<div class="panel-heading"><?=$mathang['tieude']?></div>
						<div class="panel-body">
							<a href="chi_tiet_tin.php?id=<?=$mathang['idtin']?>">
							<img src="anh/<?=$mathang['hinh_anh']?>" 
							class="img-responsive" style="width:100%; height: 300px;" alt="Image" />
							</a>
						</div>
						
					  </div>
					</div>     
        <?php
        if($i%3==2)
		{
        ?>
				</div>  
			</div><br />  
        <?php
        }
        $i++;
    }
}
?>
<br/>
<div class="footer">
<?php

    require_once("footer.php");
?>
</body>
</html>