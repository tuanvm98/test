<?php
$id = $_GET ['id']; // Lay ID cua mat hang can sua tren URL
// Ket noi CSDL
$servername="localhost";
$username="root";
$password="";
$dbname="cua_hang_dt";
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die ("Connection failed: ".$conn->connect_error);
}
mysqli_query($conn, 'set names utf8');
// Ket noi CSDL

// Truy van mat hang co ID trung voi ID vua chon
$sql = "SELECT * FROM tblsp
        WHERE sp_id = ". $id;
$ketQuaTruyVan = $conn->query($sql);
// Truy van mat hang co ID trung voi ID vua chon

// Gan gia tri cho cac bien PHP se su dung de hien thi tren form
if($ketQuaTruyVan->num_rows>0){
    while($matHang= $ketQuaTruyVan->fetch_assoc()){
        $tendienthoai = $matHang['ten_sp'];
        $moTa = $matHang['mo_ta'];
        $mau = $matHang['mau'];
        $hinhAnh= $matHang['hinh_anh'];        
        $giaBan= $matHang['gia_ban'];
        $loaiHangID= $matHang['hang_id'];
        $loaisp= $matHang['loaisp_id'];
        $sl= $matHang['so_luong'];
        $tt= $matHang['tinhtrang'];
    }
}
// Gan gia tri cho cac bien PHP se su dung de hien thi tren form
?>
<html>
    <head>
        <title>Sửa mặt hàng</title>        
        <meta charset="utf-8" http-equiv="content-type" />
        <script src="jquery.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    </head>
    <body>
        <h1>Sửa mặt hàng</h1>
        <form class="form form-horizontal" method="post" action="thuc_hien_sua_sp.php" enctype="multipart/form-data>
            <div class="form-group">
                <label class="control-label col-sm-2">Tên sản phẩm</label>
                <div class="col-sm-10">
                  <input value="<?=$tendienthoai?>" type="text" class="form-control" name="ten_sp" placeholder="Tên sản phẩm"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Mô tả</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="mo_ta"><?=$moTa?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Màu</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="mau"><?=$mau?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Hình ảnh </label>
                <div class="col-sm-10">
						<a href="them_anh.php" > Thêm ảnh</a>
				  <input value="<?=$hinhAnh?>" type="file" class="form-control" name="hinh_anh" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Giá bán </label>
                <div class="col-sm-10">
                  <input value="<?=$giaBan?>" type="number" class="form-control" name="gia_ban" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Số lượng </label>
                <div class="col-sm-10">
                  <input value="<?=$sl?>" type="number" class="form-control" name="so_luong" />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2"> Tình trạng </label>
                <div class="col-sm-10">
                  <input value="<?=$tt?>" type="text" class="form-control" name="tinhtrang" />
                </div>
            </div>
            
            <?php            
            $sql = "SELECT * FROM tblhang";
            $ketQuaTruyVan = $conn->query($sql);
            ?>
            <div class="form-group">
                <label class="control-label col-sm-2">Loại hãng </label>
                <div class="col-sm-10">
                  <select class="form-control" name="hang_id">
                    <option value="0">Chọn loại hãng</option>
                    <?php
                    if($ketQuaTruyVan->num_rows > 0){
                        while($loaiHang = $ketQuaTruyVan->fetch_assoc()){
                            if($loaiHang['hang_id']==$loaiHangID){
                            ?>
                    <option selected="selected" value="<?php echo $loaiHang['hang_id'] ?>"><?php echo $loaiHang['ten_hang']?></option>
                            <?php    
                            }else{
                    ?>
                    <option value="<?php echo $loaiHang['hang_id'] ?>"><?php echo $loaiHang['ten_hang']?></option>
                    <?php
                            }
                        }
                    }
                    ?>
                    </select>
                </div>
            </div>
                   <?php            
            $sql = "SELECT * FROM tblloaisp";
            $ketQuaTruyVan = $conn->query($sql);
            ?>
            <div class="form-group">
                <label class="control-label col-sm-2">Loại sản phẩm </label>
                <div class="col-sm-10">
                  <select class="form-control" name="loaisp_id">
                    <option value="0">Chọn loại sản phẩm</option>
                    <?php
                    if($ketQuaTruyVan->num_rows > 0){
                        while($loaiHang = $ketQuaTruyVan->fetch_assoc()){
                            if($loaiHang['loaisp_id']==$loaisp){
                            ?>
                    <option selected="selected" value="<?php echo $loaiHang['loaisp_id'] ?>"><?php echo $loaiHang['ten_loai_sp']?></option>
                            <?php    
                            }else{
                    ?>
                    <option value="<?php echo $loaiHang['loaisp_id'] ?>"><?php echo $loaiHang['ten_loai_sp']?></option>
                    <?php
                            }
                        }
                    }
                    ?>   
                    </select>
                </div>
            </div>         
                  
            <input type="hidden" name="sp_id" value="<?=$id?>" />
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <input class="btn btn-success" type="submit" value="Lưu" />
                </div>
            </div>
        </form>
    </body>
</html>
