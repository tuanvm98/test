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
$sql = "SELECT * FROM tbltintuc
        WHERE idtin = ". $id;
$ketQuaTruyVan = $conn->query($sql);
// Truy van mat hang co ID trung voi ID vua chon

// Gan gia tri cho cac bien PHP se su dung de hien thi tren form
if($ketQuaTruyVan->num_rows>0){
    while($matHang= $ketQuaTruyVan->fetch_assoc()){
        $tendienthoai = $matHang['tieude'];
        $moTa = $matHang['trichdan'];
        $mau = $matHang['noi_dung'];
        $hinhAnh= $matHang['hinh_anh'];        
        
        $loaiHangID= $matHang['idnhom'];
        
    }
}
// Gan gia tri cho cac bien PHP se su dung de hien thi tren form
?>
<html>
    <head>
        <title>Sửa tin</title>        
        <meta charset="utf-8" http-equiv="content-type" />
        <script src="jquery.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    </head>
    <body>
        <h1>Sửa tin</h1>
        <form class="form form-horizontal" method="post" action="thuc_hien_sua_tin.php">
            <div class="form-group">
                <label class="control-label col-sm-2">Tiêu đề</label>
                <div class="col-sm-10">
                  <input value="<?=$tendienthoai?>" type="text" class="form-control" name="tieude" placeholder="Tiêu đề"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Trích dẫn</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="trichdan"><?=$moTa?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Nội dung</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="noi_dung"><?=$mau?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Hình ảnh </label>
                <div class="col-sm-10">
                  <input value="<?=$hinhAnh?>" type="file" class="form-control" name="hinh_anh" />
                </div>
            </div>
            
            
            <?php            
            $sql = "SELECT * FROM tblnhomtin";
            $ketQuaTruyVan = $conn->query($sql);
            ?>
            <div class="form-group">
                <label class="control-label col-sm-2">Nhóm tin </label>
                <div class="col-sm-10">
                  <select class="form-control" name="idnhom">
                    <option value="0">Chọn loại hãng</option>
                    <?php
                    if($ketQuaTruyVan->num_rows > 0){
                        while($loaiHang = $ketQuaTruyVan->fetch_assoc()){
                            if($loaiHang['hang_id']==$loaiHangID){
                            ?>
                    <option selected="selected" value="<?php echo $loaiHang['idnhom'] ?>"><?php echo $loaiHang['tennhom']?></option>
                            <?php    
                            }else{
                    ?>
                    <option value="<?php echo $loaiHang['idnhom'] ?>"><?php echo $loaiHang['tennhom']?></option>
                    <?php
                            }
                        }
                    }
                    ?>
                    </select>
                </div>
            </div>
                   
                    </select>
                </div>
            </div>         
                  
            <input type="hidden" name="idtin" value="<?=$id?>" />
            <div class="form-group">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <input class="btn btn-success" type="submit" value="Lưu" />
                </div>
            </div>
        </form>
    </body>
</html>
