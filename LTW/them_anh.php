
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="bootstrap/css/style.css" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body>

<form action="thuc_hien_them_anh.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload" onchange="changed()">
    <input type="submit" value="Upload Image" name="submit" id="submit">
</form>

<script>
	function changed(){
		var a = $this.val();
		alert(a);
		
	}
	$(function(){
  $('#fileToUpload').change(function(){
    var url = $(this).val();
	var extension= url.split('.').pop();
	var img = ["jpg", "png", "jpeg"];
	var i;
	var kt=0;
	for (i=0;i<3;i++){
		if (extension==img[i]){
			kt=1;
		}
	}
	if (kt==0) {
		$( "#submit" ).hide();
		alert("Không phải file ảnh");
	}else {
		$( "#submit" ).show();
	}
  });

});
</script>



</body>
</html>
