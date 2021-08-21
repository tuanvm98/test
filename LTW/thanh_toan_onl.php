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
        {
		var x2 = document.forms["form-thanh-toan"]["the"].value;
        if (x2 == "") {
            alert("Bạn chưa chọn loại thẻ thanh toán");
            document.forms["form-thanh-toan"]["the"].focus();
            return false;
        }
        {
		var x3 = document.forms["form-thanh-toan"]["chuthe"].value;
        if (x3 == "") {
            alert("Bạn chưa điền họ tên chủ thẻ");
            document.forms["form-thanh-toan"]["chuthe"].focus();
            return false;
        }
        {
		var x4 = document.forms["form-thanh-toan"]["sothe"].value;
        if (x4 == "") {
            alert("Bạn chưa điền số thẻ");
            document.forms["form-thanh-toan"]["sothe"].focus();
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
                          <legend class="">Thanh toán online</legend>
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
                        <div class="control-group">
                            <label class="control-label" for="the">Loại thẻ </label>
                        <div class="control">
                            <select class="form-control" name="the">
                                <option value="0">Chọn loại thẻ</option>
                                <option value="1">VIETCOMBANK</option>
                                <option value="2">ĐÔNG Á BANK</option>
                                <option value="3">VIETTINBANK</option>
                                <option value="4">TECHCOMBANK</option>
                                <option value="5">AGRIBANK</option>
                                <option value="6">EXIMBANK</option>
                                <option value="7">ACB</option>
                                <option value="8">MARITIMEBANK</option>
                                <option value="9">VIB</option>
                                <option value="10">MB</option>
                                <option value="11">VPBANK</option></option>
                                <option value="12">OCEAN BANK</option>
                                <option value="13">HD BANK</option>
                                <option value="14">VIET A BANK</option>
                                <option value="15">NCB</option>
                                <option value="16">ABBANK</option>
                                <option value="17">GPBANK</option>
                                <option value="18">Ngân Hàng Nam Á</option>
                                <option value="19">SAIGON BANK</option>
                                <option value="20">PG BANK</option>
                                <option value="21">OCB</option>
                                <option value="22">SHB</option>
                                <option value="23">TPBANK</option>
                                <option value="24">BAC A BANK</option>
                                <option value="25">SEA BANK</option>
                                <option value="26">LIEN VIET POST BANK</option>
                                <option value="27">BAO VIET BANK</option>
                             </select>
                        </div>
                        </div>
						<div class="control-group">
						<label class="control-label" for="chuthe">Họ và tên chủ thẻ</label>
                          <div class="controls">
                            <input type="date" id="chuthe" name="chuthe" placeholder="Họ và tên chủ thẻ" class="form-control" >
                          </div>
                        </div>
                        <div class="control-group">
						<label class="control-label" for="sothe">Số thẻ</label>
                          <div class="controls">
                            <input type="numberic" id="sothe" name="sothe" placeholder="Nhập số thẻ" class="form-control" >
                          </div>
                        </div>
						<br/>
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