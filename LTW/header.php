<?php
	if (isset($_COOKIE['permission'])&&($_COOKIE['permission']==md5("admin"))){
		include("a_header.php");
	}
	else {include("g_header.php");}
?>