<?php
class database //Khai báo lớp database
{
	var $connection = null; 
 
    function connect()
    {
        require("ket_noi.php"); //Nhúng file config.php để lấy các thông tin cấu hình máy chủ
        if($this->connection == null)
        {
            $this->connection = mysqli_connect($servername,$username,$password,$dbname);
            if(!$this->connection)
    		{
    			die("Trang web dang bảo trì, vui lòng quay lại sau !");
    		}
            else    mysqli_query($this->connection,'set names utf8'); //Làm việc với unicode
        }
    }
    
    function disconnect()
    {
        mysqli_close($this->connection); //Đóng kết nối
        $this->connection = null;  //Giải phóng thuộc tính connection
    }
    
    function select_all_query($sql) //Trả về mảng KQ nếu thành công, ngược lại trả về false
    {
        
        if($sql != '') //Kiểm tra sự tồn tại của chuỗi truy vấn
        {
            $this->connect(); //Mở kết nối
            $list = mysqli_query($this->connection,$sql); //Thực hiện truy vấn lấy ra dữ liệu
            $result = array(); //Khởi tạo biến kết quả (mảng kết quả)
            if( mysqli_num_rows($list) > 0) //Nếu số hàng lấy ra > 0 thì gán kết quả
            {
                //Lặp lần lượt các phần tử của mảng dữ liệu
                while($row = mysqli_fetch_array($list,MYSQLI_ASSOC))
                {
                    $result[] = $row; //Gán từng bản ghi vào biến kết quả
                }            
                $this->disconnect(); //Đóng kết nối
                return $result; //Trả về kết quả
                
            }
            else
            {
                return false;
            }
        }
        }    
           

    
    function select_query($sql)
    {
        if($sql != '')
        {
            $this->connect();
            $list = mysqli_query($this->connection,$sql);
            $result = array();
            if(mysqli_num_rows($list) > 0)
            {
                while($row = mysqli_fetch_array($list,MYSQLI_ASSOC))
                {
                    $result[] = $row;
                }            
                $this->disconnect();
                return $result[0];
            }
            else
            {
                return false;
            }
        }
    }
    
    function execute_query($sql) //Trả về true nếu truy vấn thành công, ngược lại là false
    {
        if($sql != '')
        {
            $this->connect();
            $execute = mysqli_query($this->connection,$sql);
            if($execute)
            {
                $this->disconnect();
                return true;
            }
            else
            {
                $this->disconnect();
                return false;
            }
            
        }
    }
    
 function EncodeSpecialChar($content) {  //insert table
	$content = trim($content);
	$content = addslashes($content);
	$content = htmlspecialchars($content);
	return $content;
}   

}
?>