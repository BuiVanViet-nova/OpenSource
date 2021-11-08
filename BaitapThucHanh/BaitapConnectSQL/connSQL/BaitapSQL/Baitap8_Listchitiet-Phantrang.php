<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTSP</title>
    <style>
        .pagination{
            text-align:center;
        }

        img{
            width: 200px;
        }

        table, tr, th, td{
            border :1px solid black;
            border-collapse: collapse;
        }

        table{
            width: 80%;
            margin: 1% auto;
        }

        th{
            color: #b33939;
            background-color: #f8c291;
            font-size: x-large;
            padding: 1%;
        }

        .text-left{
            margin : 10px 0 ;
            text-align: right;
        }
    </style>
</head>
<body>
    
    <?php
        require("../connSQL.php");

        $rowPerPage = 2;
        if(!isset($_GET["page"]))
        {
            $_GET["page"] = 1;
        }

        $offset = ($_GET["page"] - 1) * $rowPerPage;

        $sql = "SELECT s.Ten_sua, hs.Ten_hang_sua, s.Trong_luong, s.Hinh, s.Don_gia, s.TP_Dinh_Duong, s.Loi_ich 
                FROM hang_sua hs JOIN sua s ON hs.Ma_hang_sua = s.Ma_hang_sua LIMIT $offset, $rowPerPage";

        $result = $conn->query($sql);
        $numRows = $result->num_rows;
        $maxPage = ceil($numRows/$rowPerPage);

        if($numRows > 0)
        {
            while($row = $result->fetch_row())
            {
               ?>
               <table>
                <tr>
                    <th colspan ="2"><?php echo $row[0] . " - " . $row[1]?></th>
                </tr>

                <tr>
                    <td><img src="Images/<?php echo $row[3] ?>" alt=""></td>
                    <td>
                        <h4>Thành phần dinh dưỡng: </h4>
                        <div>
                            <?php echo $row[5]?>
                        </div>
                        <h4>Lợi ích: </h4>
                        <div>
                            <?php echo $row[6] ?>
                        </div>
                        <div class="text-left">
                            <b>Trọng lượng: </b>
                            <?php echo $row[2]. " gr" ?>
                            - <b>Đơn giá: </b>
                            <?php echo $row[4] ." VNĐ" ?>
                        </div>
                    </td>
                </tr>
                </table>
               <?php
            }
        }
        else die("No result");

    ?>
    <div class="pagination">
    <?php

    $re = $conn->query("select * from sua");
    $numRows = $re->num_rows;
    $maxPage = ceil($numRows / $rowPerPage);
    //first page
    echo "<a href = '". $_SERVER["PHP_SELF"] ."'?page=1'><< </a>";
    //next page
    if($_GET["page"] < $maxPage)
    {
        echo "<a href = '". $_SERVER["PHP_SELF"] ."?page=".$_GET["page"]+1 ."'>  <  </a>";
    }

    //display page number
    for($i = 1 ; $i <= $maxPage; $i++)
    {
        if($i == $_GET["page"])
        {
            echo "<span>". $i ."  </span>";
        }
        else{
            echo "<a href = '". $_SERVER["PHP_SELF"] ."?page=". $i ."'> $i  </a>";
        }
    }

    //back
    if($_GET["page"] > 1)
    {
        echo "<a href = '". $_SERVER["PHP_SELF"] ."?page=".$_GET["page"]-1 ."'>  >  </a>";
    }

    //last page
    echo "<a href= '" . $_SERVER["PHP_SELF"] . "?page=". $maxPage. "'>  >>  </a>";

    ?>
    </div>
    
</body>
</html>