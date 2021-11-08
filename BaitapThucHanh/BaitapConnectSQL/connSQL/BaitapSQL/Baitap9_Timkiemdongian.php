<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TimKiemDonGian</title>
    <style>
        .container {
            width: 100%;
        }

        .header {
            background-color: #f3a683;
            text-align: center;
            color: #ff4757;
            width: 80%;
            margin: 0 auto;
        }

        .search {
            background-color: #f3a683;
            text-align: center;
            color: #ff4757;
            width: 80%;
            margin: 0 auto;
        }

        .main-content {
            background-color: #f7f1e3;
            width: 80%;
            margin: 0 auto;
        }

        img {
            width: 200px;
        }

        table,
        tr,
        th,
        td {
            border: 3px solid brown;
            border-collapse: collapse;
        }

        table {
            width: 75%;
            margin: 0 auto;
        }

        th {
            color: #b33939;
            background-color: #f8c291;
            font-size: x-large;
            padding: 1%;
        }

        .text-right {
            text-align: right;
        }

        span {
            font-size: large;
            font-weight: bolder;
            color: brown;
        }

        .result {
            text-align: center;
            padding: 1% 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>TÌM KIẾM THÔNG TIN SỮA</h1>
        </div>
        <div class="search">
            <form action="" method="POST">
                <span>Tên sữa: </span>
                <input type="text" name="search" placeholder="Nhập vào tên sữa" value="<?php echo isset($_POST["search"]) ? $_POST["search"] : ""; ?>">
                <input type="submit" name="submit" value="Tìm kiếm">
            </form>
        </div>
        <div class="main-content">
            <div class="result">
                <?php if (isset($_POST["submit"])) {
                    $search = $_POST["search"];
                    require("../connSQL.php");

                    $sql = "SELECT s.Ten_sua, hs.Ten_hang_sua, s.Trong_luong, s.Hinh, s.Don_gia, s.TP_Dinh_Duong, s.Loi_ich 
                            FROM hang_sua hs JOIN sua s ON hs.Ma_hang_sua = s.Ma_hang_sua WHERE s.Ten_sua LIKE '%$search%'";

                    $result = $conn->query($sql);
                    $numRows = $result->num_rows;

                    if ($numRows > 0) { ?>
                        <h3>Có <?php echo $numRows ?> sản phẩm được tìm thấy</h3>
                    <?php
                    } else {
                        echo "Không có sản phẩm nào trùng với từ khóa bạn tìm kiếm";
                    }

                    ?>
                    </div>
            <div class="wrapper">
                <table>
                    <?php
                    if ($numRows > 0) {
                        while ($row = $result->fetch_row()) {
                    ?>
                            <tr>
                                <th colspan="2"><?php echo $row[0] . " - " . $row[1] ?></th>
                            </tr>

                            <tr>
                                <td><img src="Images/<?php echo $row[3] ?>" alt=""></td>
                                <td>
                                    <h4>Thành phần dinh dưỡng: </h4>
                                    <div>
                                        <?php echo $row[5] ?>
                                    </div>
                                    <h4>Lợi ích: </h4>
                                    <div>
                                        <?php echo $row[6] ?>
                                    </div>
                                    <div class="text-right">
                                        <b>Trọng lượng: </b>
                                        <?php echo $row[2] . " gr" ?>
                                        - <b>Đơn giá: </b>
                                        <?php echo $row[4] . " VNĐ" ?>
                                    </div>
                                </td>
                            </tr>
                    <?php
                        }
                    } else die

                    ?>
                </table>
            <?php } ?>
            </div>

        </div>
    </div>


</body>

</html>