<html>
    <head>
        <title>Đăng ký tài khoản</title>
        
        <?php
            require_once("header.php");
        ?>
      <script>
     function validateForm() {
        var x1 = document.forms["form-dang-ky"]["ten_nguoi_dung"].value;
        if (x1 == "") {
            alert("Bạn chưa điền tên đăng nhập");
            document.forms["form-dang-ky"]["ten_nguoi_dung"].focus();
            return false;
        }
        var x2 = document.forms["form-dang-ky"]["ten_dang_nhap"].value;
        if (x2 == "") {
            alert("Bạn chưa điền tên đăng nhập");
            document.forms["form-dang-ky"]["ten_dang_nhap"].focus();
            return false;
        }
         var x7 = document.forms["form-dang-ky"]["sdt"].value;
        if (x7 == "") {
            alert("Bạn chưa điền số điện thoại");
            document.forms["form-dang-ky"]["sdt"].focus();
            return false;
        }    
        var x3 = document.forms["form-dang-ky"]["email"].value;
        if (x3 == "") {
            alert("Bạn chưa điền email");
            document.forms["form-dang-ky"]["email"].focus();
            return false;
        }
        var x4 = document.forms["form-dang-ky"]["mat_khau"].value;
        if (x4 == "" || x5.length < 6) {
            alert("Mật khẩu không hợp lệ");
            document.forms["form-dang-ky"]["mat_khau"].focus();
            return false;
        }
        var x5 = document.forms["form-dang-ky"]["nhap_lai_mat_khau"].value;
        if (x5 != x5) {
            alert("Mật khẩu không khớp");
            document.forms["form-dang-ky"]["nhap_lai_mat_khau"].focus();
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
                    <form id="form-dang-ky" class="form-horizontal" action='thuc_hien_dang_ky.php' method="post" onSubmit="return(validateForm());">
                      <fieldset>
                        <div id="legend">
                          <legend class="">Ðăng ký tài khoản</legend>
                        </div>
                        <div class="control-group">
                         <!-- Họ tên -->
                        <label class="control-label" for="ten_nguoi_dung">Tên khách hàng</label>
                          <div class="controls">
                            <input type="text" id="ten_nguoi_dung" name="ten_nguoi_dung" placeholder="" class="form-control">
                            <p class="help-block">Vui lòng điền tên của bạn</p>
                          </div>
                        </div>
                     
                        <div class="control-group">
                          <!-- tên đăng nhập -->
                          <label class="control-label" for="ten_dang_nhap">Tên đăng nhập</label>
                          <div class="controls">
                            <input type="text" id="ten_dang_nhap" name="ten_dang_nhap" placeholder="" class="form-control">
                            <p class="help-block">Tên đăng nhập có thể là số hoặc chữ không bao gồm khoảng trống</p>
                          </div>
                        </div>
                     
                        <div class="control-group">
                         <!-- sdt -->
                        <label class="control-label" for="sdt">Số điện thoại</label>
                          <div class="controls">
                            <input type="text" id="sdt" name="sdt" placeholder="Nhập số điện thoại" class="form-control" >
                         
                          </div>
                        </div>  
                        <div class="control-group">
                          <!-- E-mail -->
                           <label class="control-label" for="email">Email</label>
                          <div class="controls">
                            <input type="text" id="email" name="email" placeholder="Nhập email" class="form-control" >
                          
                          </div>
                        </div>
                        <div class="control-group">
                          <!-- Password-->
                          <label class="control-label" for="password">Mật khẩu</label>
                          <div class="controls">
                            <input type="password" id="mat_khau" name="mat_khau" placeholder="" class="form-control">
                            <p class="help-block">Mật khẩu bao gồm ít nhất 4 ký tự</p>
                          </div>
                        </div>
                     
                        <div class="control-group">
                          <!-- Password -->
                          <label class="control-label" for="password_confirm">Nhập lại mật khẩu</label>
                          <div class="controls">
                            <input type="password" id="nhap_lai_mat_khau" name="nhap_lai_mat_khau" placeholder="" class="form-control">
                            <p class="help-block">Vui lòng nhập lại mật khẩu</p>
                          </div>
                        </div>
                     
                        <div class="control-group">
                          <!-- Button -->
                          <div class="controls">
                            <input class="btn btn-success" value="Ðăng ký" type="submit" />
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