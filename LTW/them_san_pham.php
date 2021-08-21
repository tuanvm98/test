<html>
    <head>
        <title>Thêm sản phẩm</title>
        <meta charset="utf-8" />
        <script src="jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="container">
            <h1>Thêm sản phẩm</h1>
            <form class="form form-horizontal" method="post" action="thuc_hien_them_san_pham.php">
                <div class="form-group">
                    <label class="control-label col-sm-2">Tên sản phẩm </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ten_sp" placeholder="Tên sản phẩm">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Mô tả</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="mo_ta"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Hình ảnh </label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="hinh_anh" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Giá bán </label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="gia_ban" />
                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-sm-2"> Màu </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="mau" />
                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-sm-2">Số lượng </label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="so_luong" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Tình trạng </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tinhtrang" />
                    </div>
                </div>
                <?php
                // Ket noi CSDL
                $servername="localhost";
                $username="root";
                $password="";
                $dbname="cua_hang_dt";
                $conn=new mysqli($servername,$username,$password,$dbname);
                if($conn->connect_error){
                    die ("Connection failed: ".$conn->connect_error);
                }
                
                mysqli_query($conn,'set names utf8');
                // Ket noi CSDL
                
                $sql = "SELECT * FROM tblhang";
                $ketQuaTruyVan = $conn->query($sql);
                ?>
                <div class="form-group">
                    <label class="control-label col-sm-2"> Hãng </label>
                    <div class="col-sm-10">
                      <select class="form-control" name="hang_id">
                        <option value="0">Chọn hãng</option>
                        <?php
                        if($ketQuaTruyVan->num_rows > 0){
                            while($loaiHang = $ketQuaTruyVan->fetch_assoc()){
                        ?>
                        <option value="<?php echo $loaiHang['hang_id'] ?>"><?php echo $loaiHang['ten_hang']?></option>
                        <?php
                            }
                        }
                        ?>
                      </select>
                    </div>
                </div>
                <?php
                $sql = "SELECT * FROM tblloaisp";
                $ketQuaTruyVan = $conn-> query($sql);
                ?>
                <div class="form-group">
                    <label class="control-label col-sm-2">Loại sản phẩm </label>
                    <div class="col-sm-10">
                      <select class="form-control" name="loaisp_id">
                        <option value="0">Chọn loại sản phẩm</option>
                        <?php
                        if($ketQuaTruyVan->num_rows > 0){
                            while($loaisp = $ketQuaTruyVan->fetch_assoc()){
                        ?>
                        <option value="<?php echo $loaisp['loaisp_id'] ?>"><?php echo $loaisp['ten_loai_sp']?></option>
                        <?php
                            }
                        }
                        ?>
                      </select>
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