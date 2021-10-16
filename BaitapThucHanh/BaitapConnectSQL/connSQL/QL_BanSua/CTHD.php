<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết hóa đơn</title>
</head>
<body>
    <table align="center" border="true">
        <tr>
            <th>Số hóa đơn</th>
            <th>Mã sữa</th>
            <th>Số lượng</th>
            <th>Đơn giá</th>
        </tr>
    
    <?php
        //1. Mở kết nối
        require("../connSQL.php");
        //2. Xây dựng câu truy vấn
        $sql = "select * from ct_hoadon";
        //3. Thực thi câu truy vấn
        $result = $conn -> query("$sql");
        if(!$result){
            echo "query failed";
        }
        //4. Xử lí kết quả trả về
        if($result -> num_rows != 0){
            while($row = $result -> fetch_array()){ //row là 1 mảng
                if($row['Don_gia'] >= 50000){
                    echo "<tr>";
                    echo "<td>" . $row['So_hoa_don'] . "</td>";
                    echo "<td>" . $row['Ma_sua'] . "</td>";
                    echo "<td>" . $row['So_luong'] . "</td>";
                    echo "<td>" . $row['Don_gia'] ."</td>";
                    echo "</tr>";
                }
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