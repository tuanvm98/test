<html>
    <head>
        <title>Thêm tin</title>
        <meta charset="utf-8" />
        <script src="jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="container">
            <h1>Thêm tin</h1>
            <form class="form form-horizontal" method="post" action="thuc_hien_them_tin.php">
                <div class="form-group">
                    <label class="control-label col-sm-2">Tiêu đề </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tieude">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Trích dẫn</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="trichdan"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">Hình ảnh </label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="hinh_anh" />
                    </div>
                </div>
                
                 <div class="form-group">
                    <label class="control-label col-sm-2"> Nội dung</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="noi_dung" />
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
                
                $sql = "SELECT * FROM tblnhomtin";
                $ketQuaTruyVan = $conn->query($sql);
                ?>
                <div class="form-group">
                    <label class="control-label col-sm-2"> Nhóm tin</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="idnhom">
                        <option value="0">chọn nhóm</option>
                        <?php
                        if($ketQuaTruyVan->num_rows > 0){
                            while($loaiHang = $ketQuaTruyVan->fetch_assoc()){
                        ?>
                        <option value="<?php echo $loaiHang['idnhom'] ?>"><?php echo $loaiHang['tennhom']?></option>
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