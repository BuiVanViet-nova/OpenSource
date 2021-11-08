<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Kiếm Nâng Cao</title>
    <style>
        * {
            margin: 0 0;
            padding: 0 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 1%;
            text-align: center;
            background-color: #f7f1e3;
        }

        h1 {
            background-color: #f3a683;
            color: #ff4757;
        }

        .sel {
            background-color: white;
            margin: 1% 0;
            padding: 1% 0;
        }

        .te {
            background-color: white;
            margin: 1% 0;
            padding: 1% 0;
        }

        .find {
            margin: 2% 1% 0;
        }

        th {
            color: #b33939;
            background-color: #f8c291;
            font-size: x-large;
            padding: 1%;
        }

        table, tr, th, td {
            border: 1px solid black;
        }

        table {
            width: 100%;
            border: 3px solid brown;
        }

        td {
            padding: 1% 0;
        }
    </style>
</head>

<body>
    <?php require("../connSQL.php"); ?>
    <section class="header">
        <div class="container">
            <h1>TÌM KIẾM THÔNG TIN SỮA</h1>
        </div>
    </section>
    <section class="milk-search">
        <div class=container>
            <form action="" method="post">
                <div class="sel">
                    Loại sữa:
                    <select name="kind">
                        <?php
                        $sql = "select * from loai_sua";
                        $res = $conn->query($sql);
                        if (!$res) die("Query Fail");
                        $count = $res->num_rows;
                        if ($count > 0) {
                            while ($row = $res->fetch_assoc()) {
                                $Ma_loai_sua = $row["Ma_loai_sua"];
                                $Ten_loai = $row["Ten_loai"];

                        ?>
                                <option value="<?php echo $Ma_loai_sua ?>"><?php echo $Ten_loai ?></option>
                        <?php
                            }
                        } else die("No Kind");
                        ?>
                    </select>

                    Hãng sữa:
                    <select name="brand">
                        <?php
                        $sql2 = "select * from hang_sua";
                        $res2 = $conn->query($sql2);
                        if (!$res2) die("Query Fail");
                        $count2 = $res2->num_rows;
                        if ($count2 > 0) {
                            while ($row2 = $res2->fetch_assoc()) {
                                $Ma_hang_sua = $row2["Ma_hang_sua"];
                                $Ten_hang_sua = $row2["Ten_hang_sua"];

                        ?>
                                <option value="<?php echo $Ma_hang_sua ?>"><?php echo $Ten_hang_sua ?></option>
                        <?php
                            }
                        } else die("No Brand");

                        ?>
                    </select>
                </div>

                <div class="te">
                    Tên sữa: <input type="text" name="search" placeholder="Nhập tên sữa..." value="<?php echo isset($_POST['search']) ? $_POST["search"] : ''; ?>">
                    <input type="submit" name="submit" value="Tìm kiếm">
                </div>
            </form>
        </div>
    </section>
    <section class="main">
        <div class="container">
            <div class="result">
                <?php
                if (isset($_POST["submit"])) {
                    $search = $_POST["search"];
                    $Ma_hang_sua = $_POST["brand"];
                    $Ma_loai_sua = $_POST["kind"];

                    $sql3 = "select s.Ten_sua,s.Ma_hang_sua, hs.Ten_hang_sua, s.Ma_loai_sua ,s.Trong_luong, s.Hinh, s.Don_gia, s.TP_Dinh_Duong, s.Loi_ich \n"

                        . "from hang_sua hs\n"

                        . "join sua s on hs.Ma_hang_sua = s.Ma_hang_sua\n"
                        . "where s.Ten_sua LIKE '%$search%' and s.Ma_hang_sua ='$Ma_hang_sua' and s.Ma_loai_sua = '$Ma_loai_sua'";

                    $res3 = $conn->query($sql3);
                    if (!$res3) die("Query Fail");
                    $numRows = $res3->num_rows;

                    if ($numRows > 0) {
                ?>
                        <h3>Có <?php echo $numRows ?> sản phẩm được tìm thấy</h3>
                    <?php
                    } else {
                        echo "Không có sản phẩm nào phù hợp yêu cầu";
                    }

                    ?>
            </div>
            <div class="find">
                <table>
                    <?php

                    if ($numRows > 0) {
                        while ($row3 = $res3->fetch_assoc()) {
                    ?>
                            <tr>
                                <th colspan="2"><?php echo $row3['Ten_sua'] . " - " . $row3['Ten_hang_sua'] ?></th>
                            </tr>

                            <tr>
                                <td><img src="Images/<?php echo $row3['Hinh'] ?>" alt=""></td>
                                <td>
                                    <h4>Thành phần dinh dưỡng: </h4>
                                    <div>
                                        <?php echo $row3['TP_Dinh_Duong'] ?>
                                    </div>
                                    <h4>Lợi ích: </h4>
                                    <div>
                                        <?php echo $row3['Loi_ich'] ?>
                                    </div>
                                    <div class="text-right">
                                        <b>Trọng lượng: </b>
                                        <?php echo $row3['Trong_luong'] . " gr" ?>
                                        - <b>Đơn giá: </b>
                                        <?php echo $row3['Don_gia'] . " VNĐ" ?>
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
    </section>
</body>

</html>