<!DOCTYPE html>
<html lang="en">
<head>
 <title>Danh sách điện thoại</title>
</head>
<body>
<div id="container">
<div id="head">
    <?php
    require_once("header.php");
     ?>
<div id="body">
<?php
require_once("ket_noi.php");
$sql = "SELECT *
        FROM tblsp
        limit 0,7";
        
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
						<div class="panel-heading"><?=$mathang['ten_sp']?></div>
						<div class="panel-body">
							<a href="chi_tiet_sp.php?id=<?=$mathang['sp_id']?>">
							<img src="anh/<?=$mathang['hinh_anh']?>" 
							class="img-responsive" style="width:100%; height: 300px;" alt="Image" />
							</a>
						</div>
						<div class="panel-footer"><?=$mathang['gia_ban']?> VNĐ </div>
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
<div id="footer">
<?php

    require_once("footer.php");
?>
</div>
</div>
</div>
</div>
</body>
</html>