<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 100px;
        }

        table, tr, th, td{
            border :1px solid black;
            border-collapse: collapse;
        }

        table{
            width: fit-content;
            margin: 1% auto;
        }

        th{
            color: #b33939;
            background-color: #f8c291;
            font-size: x-large;
            padding: 1%;
        }

        tr{
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th colspan="2">THÔNG TIN CÁC SẢN PHẨM</th>
        </tr>

        <?php
        require("../connSQL.php");

        $sql = "SELECT s.Ten_sua, hs.Ten_hang_sua, ls.Ten_loai, s.Trong_luong, s.Hinh, s.Don_gia 
                FROM hang_sua hs JOIN sua s ON hs.Ma_hang_sua = s.Ma_hang_sua
                JOIN loai_sua ls ON s.Ma_loai_sua = ls.Ma_loai_sua LIMIT 1,3;";

        $result = $conn->query($sql);
        if(!$result) die("Query failed");

        if($result->num_rows != 0)
        {
            while($row = $result->fetch_row())
            {
                ?>
                <tr>
                    <td><img src="Images/<?php echo $row[4] ?>" alt=""></td>
                    <td>
                        <h4><?php echo $row[0] ?></h4>
                        Nhà sản xuất: <?php echo $row[1] ?>
                        <br>
                        <?php echo $row[2] ?> - <?php echo $row[3] ?> gr - <?php echo $row[5] ?> VND
                    </td>
                </tr>
                <?php
            }
        }
        else echo "No result";

        $conn->close();
        ?>
    </table>
</body>
</html>