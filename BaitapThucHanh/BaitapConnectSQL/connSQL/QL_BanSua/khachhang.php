<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khách hàng</title>
</head>
<body>
    <table align="center" border="true">
        <tr>
            <th>Mã khách hàng</th>
            <th>Tên khách hàng</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
            <th>Email</th>
        </tr>
    
    <?php
        //1. Mở kết nối
        require("../connSQL.php");
        //2. Xây dựng câu truy vấn
        $sql = "select * from khach_hang";
        //3. Thực thi câu truy vấn
        $result = $conn -> query("$sql");
        if(!$result){
            echo "query failed";
        }
        //4. Xử lí kết quả trả về
        if($result -> num_rows != 0){
            while($row = $result -> fetch_array()){ //row là 1 mảng
                echo "<tr>";
                echo "<td>" . $row['Ma_khach_hang'] . "</td>";
                echo "<td>" . $row['Ten_khach_hang'] . "</td>";
                if($row['Phai'] == 0){
                    echo "<td> <img src='boy.png' style='width:70px; height:70px;'/> </td>";
                }else{
                    echo "<td> <img src='girl.png' style='width:70px; height:70px;'/> </td>";
                }
                
                echo "<td>" . $row['Dia_chi'] ."</td>";
                echo "<td>" . $row['Dien_thoai'] ."</td>";
                echo "<td>" . $row['Email'] ."</td>";
                echo "</tr>";
                
            }
        }else{
            echo "null";
        }
        //5. Đóng kết nối
        $conn -> close();
        
    ?>
    </table>
</body>
</html>