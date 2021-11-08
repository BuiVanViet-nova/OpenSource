<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3 style="text-transform: uppercase;" align="center">Thông tin hãng sữa</h3>
    <table align="center" border="true"> 
        <tr>
            <th>Mã HS</th>
            <th>Tên hãng sữa</th>
            <th>Địa chỉ</th>
            <th> Điện thoại</th>
            <th>Email</th>
        </tr>
    
    <?php
        require("../connSQL.php");
        $query = "select * from hang_sua";
        $result = $conn -> query($query);
        if(!$result) echo "Query failed: " .$conn->error;
        while($row = $result->fetch_array()){   //lấy cả địa chỉ
            echo "<tr>";
            // echo "<td>" .$row['Ma_hang_sua'] . "</td>";
            // echo "<td>" .$row['Ten_hang_sua'] . "</td>";
            // echo "<td>" .$row['Dia_chi'] . "</td>";
            // echo "<td>" .$row['Dien_thoai'] . "</td>";
            // echo "<td>" .$row['Email'] . "</td>";

            for($i=0;$i<$result->field_count;$i++){
                echo "<td>" .$row[$i] . "</td>";
            }

            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>