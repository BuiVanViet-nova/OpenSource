<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 100px;
        }

        table,
        tr,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table {
            width: fit-content;
            margin: 1% auto;
        }

        th {
            color: #b33939;
            background-color: #f8c291;
            font-size: x-large;
            padding: 1%;
        }

        tr {
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th colspan="5">THÔNG TIN CÁC SẢN PHẨM</th>
        </tr>

        <?php
        require("../connSQL.php");
        $sql = "select Ten_sua, Trong_luong, Don_gia, Hinh from sua LIMIT 10";

        $result = $conn->query($sql);
        $dem = 0;
        if ($result->num_rows != 0) {

            while ($row = $result->fetch_row()) {
                $dem++;
                if ($dem == 1) {
        ?>
                    <tr>
                        <td>
                            <img src="" alt="">
                            <?php
                            echo $row[0] . "<br>" . $row[1] . " gr - " . $row[2] . " VNĐ" . "<br>";
                            echo "<img src='Images/$row[3]'>";
                            ?>
                        </td>
                    <?php
                } elseif ($dem == 2 || $dem == 3 || $dem == 4) {
                    ?>
                        <td>
                            <?php
                            echo $row[0] . "<br>" . $row[1] . " gr - " . $row[2] . " VNĐ" . "<br>";
                            echo "<img src='Images/$row[3]'>";
                            ?>
                        </td>
                    <?php
                } elseif ($dem == 5) {
                    ?>
                        <td>
                            <?php
                            echo $row[0] . "<br>" . $row[1] . " gr - " . $row[2] . " VNĐ" . "<br>";
                            echo "<img src='Images/$row[3]'>";
                            ?>
                        </td>
                    </tr>
        <?php
                    $dem = 0;
                }
            }
        } else echo "No result";

        $conn->close();
        ?>
    </table>
</body>

</html>