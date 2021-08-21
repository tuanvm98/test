<html>
    <head>
        <title>Thanh toán</title>
        <?php
            require_once("header.php");
        ?>
      <script>
     function validateForm() {
		var x1 = document.forms["form-thanh-toan"]["thoigian"].value;
        if (x1 == "") {
            alert("Bạn chưa điền thời gian nhận hàng");
            document.forms["form-thanh-toan"]["thoigian"].focus();
            return false;
        }
      }
      </script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">                
                    <form id="form-thanh-toan" class="form-horizontal" action='tt_thanh_toan.php' method="post" onSubmit="return(validateForm());">
                      <fieldset>
                        <div id="legend">
                          <legend class="">Thanh toán khi nhận hàng</legend>
                        </div>
						<label> Anh </label>
						<input type="radio" name="gt" value="false" />
						<label> Chị </label>
						<input type="radio" name="gt" />
						</br>
						<div class="control-group">
                          <!-- Time -->
                           <label class="control-label" for="thoigian">Thời gian nhận hàng</label>
                          <div class="controls">
                            <input type="date" id="thoigian" name="thoigian" placeholder="Nhập thời gian" class="form-control" >
                          </div>
                        </div>
						</br>
						<div class="control-group">
                          <!-- Button -->
                          <div class="controls">
                            <input class="btn btn-success" value="Thanh toán" type="submit" />
                          </div>
                        </div>
                      </fieldset>
                    </form>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
<div class="footer">
<?php

    require_once("footer.php");
?>
</body>
</html>