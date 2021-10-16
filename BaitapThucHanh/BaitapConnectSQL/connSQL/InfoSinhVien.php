<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập thông tin sinh viên</title>
    <style>
        table{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form align="center" action="" method="POST">
        <table align="center">
            <h3>Nhập thông tin SV</h3>
            <tr>
                <td>Tên: </td>
                <td><input type="text" name="ten"></td>
            </tr>
            <tr>
                <td>Họ: </td>
                <td><input type="text" name="ho"></td>
            </tr>
            <tr>
                <td>Địa chỉ: </td>
                <td><input type="text" name="diachi"></td>
            </tr>
            <tr> 
                <td>Khóa: </td>
                <td><select name="khoa" id="">
                    <option value="57">57</option>
                    <option value="58">58</option>
                    <option value="59">59</option>
                    <option value="60">60</option>
                </select></td>
                <td>Lớp: </td>
                <td><select name="lop" id="">
                    <option value="CNTT1">CNTT1</option>
                    <option value="CNTT2">CNTT2</option>
                    <option value="CNTT3">CNTT3</option>
                    <option value="CNTT4">CNTT4</option>
                </select></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="gui" value="Gửi">
                    <input type="submit" name="xoa" value="Xóa">
                    <input type="button" name="ketqua" value="Xem kết quả">
                </td>
            </tr>
        </table>
    </form>

    <?php
        //1, Kết nối cơ sở dữ liệu kiểu thủ tục
        //1, Kết nối cơ sở dữ liệu kiểu thủ tục
        $servername = 'localhost:3308';
        $username = 'root';
        $password = '';
        $dbname = 'ql';
        //mở kết nối
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, charset: "UTF-8");
        //check connect
        if($conn -> connect_error){
            die("connect is failed: " .$conn->connect_error);
        }
        //Khởi tạo
        $ten = "";
        $ho = "";
        $diachi="";
        $lop = "";
        $khoa ="";
        if(isset($_POST['gui'])){
            if(isset($_POST['ten'])) {$ten=$_POST['ten'];}
            if(isset($_POST['ho'])) {$ho=$_POST['ho'];}
            if(isset($_POST['diachi'])) {$diachi=$_POST['diachi'];}
            if(isset($_POST['khoa'])) {$khoa=$_POST['khoa'];}
            if(isset($_POST['lop'])) {$lop=$_POST['lop'];}
            //2. Xây dựng câu truy vấn
            $sql = "INSERT INTO `sv`(`ten`, `ho`, `dia_chi`, `lop`, `khoa`) VALUES ('$ten','$ho','$diachi','$lop','$khoa')";
            //check
            if($conn -> query("$sql") == TRUE){
                echo "thêm dữ liệu thành công";
            }else{
                echo "ERROR" . $conn->error;
            }
        }
        
        //5. Đóng kết nối
        $conn -> close();
    ?>
</body>
</html>