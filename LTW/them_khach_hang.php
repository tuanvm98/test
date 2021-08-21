<html>
    <head>
        <title>Thêm khách hàng</title>
        <meta charset="utf-8" />
       <script src="jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="container">
            <h1>Thêm khách hàng</h1>
            <form class="form form-horizontal" method="post" action="thuc_hien_them_khach_hang.php">
                <div class="form-group">
                    <label class="control-label col-sm-2">Họ tên </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ten_nguoi_dung" placeholder="Họ tên khách hàng">
                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-sm-2"> Tên đăng nhập </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ten_dang_nhap" placeholder="Tên đăng nhập">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Mật khẩu</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="mat_khau" />
                      <p class="help-block">Mật khẩu bao gồm ít nhất 4 ký tự</p>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-sm-2">Số điện thoại </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="sdt" placeholder="Số điện thoại">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">email </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="email" placeholder="Email" />
                    </div>
                </div>
                        

                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                    <input class="btn btn-success" type="submit" value="Lưu" />
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>