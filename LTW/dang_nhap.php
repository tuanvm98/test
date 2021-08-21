<html>
    <head>
        <title>Đăng nhập</title>
        <?php
            require_once("header.php");
        ?>
      <script>
      function validateForm() {
        var x1 = document.forms["form-dang-nhap"]["ten_dang_nhap"].value;
        if (x1 == "") {
            alert("Bạn chưa điền tên đăng nhập");
            document.forms["form-dang-nhap"]["ten_dang_nhap"].focus();
            return false;
        }
        
        var x2 = document.forms["form-dang-nhap"]["mat_khau"].value;
        if (x2 == "" || x2.length < 4) {
            alert("Mật khẩu không hợp lệ");
            document.forms["form-dang-nhap"]["mat_khau"].focus();
            return false;
        }
                        
      }
      </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">                
                    <form id="form-dang-nhap" class="form-horizontal" action='thuc_hien_dang_nhap.php' method="post" onsubmit="return(validateForm());">
                      <fieldset>
                        <div id="legend">
                          <legend class="">Đăng nhập</legend>
                        </div>
                        <form name="dangnhap" action="thuc_hien_dang_nhap.php" method="POST"  class="form-inline">
						<div class="control-group">
                          <!-- Username -->
                          <label class="control-label" for="username">Tên đăng nhập</label>
                          <div class="controls">
                            <input type="text" id="ten_dang_nhap" name="ten_dang_nhap" placeholder="" class="form-control">                            
                          </div>
                        </div>
                     
                        <div class="control-group">
                          <!-- Password-->
                          <label class="control-label" for="password">Mật khẩu</label>
                          <div class="controls">
                            <input type="password" id="mat_khau" name="mat_khau" placeholder="" class="form-control">                            
                          </div>
                        </div><br />
                     
                        <div class="control-group">
                          <!-- Button -->
                          <div class="controls">
                            <input class="btn btn-success" value="Đăng nhập" type="submit" />
                          </div>
                        </div>
						</form>
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