<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span {
            background-color: #55efc4;
            padding: 10px;
            color: #636e72;
            text-decoration: none;
            font-weight: bold;
            margin: 0 1%;
        }

        h2 {
            text-align: center;
        }

        table,
        tr,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            width: 500px;
            padding: 1%;
            text-align: center;
        }

        table {
            margin: 2% auto;
        }

        th {
            color: #b33939;
            font-size: large;
        }

        tr:nth-child(odd) {
            background-color: #f8c291;
        }

        tr:nth-child(even) {
            color: #c44569;
        }

        .btn-primary {
            border: 1px solid black;
            padding: 5px;
            color: black;
            text-decoration: none;
            font-weight: bold;
            margin: 0 1%;
        }

        #mid {
            width: 65%;
            margin: 0 auto;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php
    require("../connSQL.php");

    $rowPerPage = 5;
    if (!isset($_GET["page"])) {
        $_GET["page"] = 1;
    }

    $offset = ($_GET["page"] - 1) * $rowPerPage;
    $query = "SELECT s.Ten_sua, h.Ten_hang_sua, l.Ten_loai, s.Trong_luong, s.Don_gia 
        FROM ((sua AS s INNER JOIN hang_sua AS h ON s.Ma_hang_sua = h.Ma_hang_sua)
        INNER JOIN loai_sua AS l ON s.Ma_loai_sua = l.Ma_loai_sua) LIMIT $offset, $rowPerPage";
    $result = $conn->query($query);
    $numRows = $result->num_rows;

    $maxPage = ceil($numRows / $rowPerPage);

    if ($numRows != 0) {
        echo "<h2>THÔNG TIN VỀ SỮA</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Tên sữa</th>";
        echo "<th>Tên hãng sữa</th>";
        echo "<th>Tên loại</th>";
        echo "<th>Trọng lượng</th>";
        echo "<th>Đơn giá</th>";
        echo "</tr>";

        while ($row = $result->fetch_row()) {
            echo "<tr>";
            echo "<td>" . $row[0] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td>" . $row[2] . " </td>";
            echo "<td>" . $row[3] . " gram</td>";
            echo "<td>" . $row[4] . " VNĐ</td>";
            echo "</tr>";
        }
        echo "</table>";

        $re = $conn->query("select * from sua");
        $numRows = $re->num_rows;
        $maxPage = ceil($numRows / $rowPerPage);

        echo "<div id='mid'>";
        //first page
        echo "<a href = '" . $_SERVER["PHP_SELF"] . "'?page=1' class ='btn-primary'>First</a>";
        //next page
        if ($_GET["page"] < $maxPage) {
            echo "<a href = '" . $_SERVER["PHP_SELF"] . "?page=" . $_GET["page"] + 1 . "' class ='btn-primary'>Next</a>";
        }

        //display page number
        for ($i = 1; $i <= $maxPage; $i++) {
            if ($i == $_GET["page"]) {
                echo "<span>" . $i . "</span>";
            } else {
                echo "<a href = '" . $_SERVER["PHP_SELF"] . "?page=" . $i . "' class ='btn-primary'> $i</a>";
            }
        }

        //back
        if ($_GET["page"] > 1) {
            echo "<a href = '" . $_SERVER["PHP_SELF"] . "?page=" . $_GET["page"] - 1 . "' class ='btn-primary'>Back</a>";
        }

        //last page
        echo "<a href= '" . $_SERVER["PHP_SELF"] . "?page=" . $maxPage . "' class='btn-primary'>Last</a>";

        echo "</div>";
    } else echo "No result";
    ?>

</body>

</html>