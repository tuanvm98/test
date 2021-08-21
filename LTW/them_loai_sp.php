<html>
    <head>
        <title>Thêm loại sản phẩm</title>
        <meta charset="utf-8" />
        <script src="jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="container">
            <h1>Thêm loại sản phẩm</h1>
            <form class="form form-horizontal" method="post" action="thuc_hien_them_loai_sp.php">
                <div class="form-group">
                    <label class="control-label col-sm-2">Tên loại sản phẩm </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ten_loai_sp" placeholder="Tên loại sản phẩm">
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