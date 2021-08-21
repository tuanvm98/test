<?php
    require_once("database.php");
	require_once("a_header.php");
?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script>
        function checkForm()
        {
             var username = document.forms['register']["tac_gia"].value;
             var email = document.forms['register']["email"].value;
             var ghichu = document.forms['register']["noi_dung"].value;
             
             if(username == '')
             {
                alert('Bạn phải nhập Họ tên');
                document.forms["register"]["tac-gia"].focus();
                return false;
             }
             else if(email == '')
             {
                alert('Bạn phải nhập email');
                document.forms["register"]["email"].focus();
                return false;
             }
              else if(ghichu == '')
             {
                alert('Bạn phải nhập noi_dung');
                document.forms["register"]["noi_dung"].focus();
                return false;
             }
             else return true;
          
        }
    
        </script>
<html>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
   <div class="main">
   <div class="left">
            <div class="vertical">
                 <ul>
                    <li><span>Loại sản phẩm</span></li>
                    <?php
                        $con = new database();
                        $sql = "SELECT * FROM tblloaisp";
                        $productTypes = $con->select_all_query($sql);
                         foreach($productTypes as $type) { ?>
                        <li><a href="danh_sach_sp.php?productTypeId=<?=$type['loaisp_id']?>"><?=$type['ten_loai_sp']?></a></li>            
                    <?php } ?>
                </ul>
            </div> <!-- đóng div vertical-->
        </div> <!-- Đóng div left-->
        <div class="center">
            
              
           <form method="post" name="register" action="xu_ly_binh_luan.php" onSubmit="return checkForm()">
           <h1>Thêm bình luận</h1>
            <div class="col-sm-12">
                <label class="control-label" for="input-name">Họ &amp; Tên:</label>
                <input type="text" name="tac_gia" value="" id="input-name" class="form-control"/>
              </div>
            
            <div class="col-sm-12">
                <label class="control-label" for="input-name">Email:</label>
                <input type="email" name="email" value="" id="input-name" class="form-control"/>
              </div>
              
            <div class="form-group required">
              <div class="col-sm-12">
                <label class="control-label" for="input-review">Nội dung:</label>
                <textarea name="noi_dung" rows="5" id="input-review" class="form-control"></textarea>
              </div>
            </div>
                <div class="pull-right">
                <td><input class="gui" type="submit" value="Gửi" /></td>
              </div>
              <br />
              <br />
            <h3>Bình luận khác:</h3>
        <?php
    				//require_once("database.php");
    				$conn = mysqli_connect("mysql.hostinger.vn","u138753818_mobi","lananhcb","u138753818_mobi") or die("That bai");
    				mysqli_query($conn,"SET NAMES utf8");
    				require_once("a_header.php");
    				$sql="SELECT * FROM tblbinhluan";
    				$query=mysqli_query($conn,$sql);
    				while($row=mysqli_fetch_array($query))
    				{
    			?>
                    <div id="fb-comments">
                        <p><?php echo $row["noi_dung"];?></p>
                    </div>
                    <div id="messageMeta">
                        <p> Tác giả: <a href="chitietsp.php"><?php echo $row["tac_gia"];?></a></p>
                    </div>
                    <div class="fb-comments" data-href="http://localhost/cnx/binhluan.php" data-width="993" data-numposts="5"></div>
                    
    				<?php
                    }
                    ?>  
                    
                    <h1>Trả lời bình luận</h1>
            
                <label class="control-label" for="input-review">Nội dung:</label>
                <textarea name="noi_dung" rows="5" id="input-review" class="form-control"></textarea>
                <div class="pull-right">
                <td><input class="gui" type="submit" value="Gửi" /></td>
              </div>
              </div>
            </div>
                
                    </form>
                    
        </div>
        </div>
    
    
<div class="footer"style="text-align:  center;">
       <?php
			require_once("footer.php");
		?>
   </div>
    
</body>
</html>