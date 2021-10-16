<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sữa</title>
</head>
<body>
    <!--PHẦN HIỂN THỊ THÔNG TIN-->
    <div>
        <?php
            //1.Mở kết nối
            require("../connSQL.php");
            //PHẦN XỬ LÝ PHP
            //phân trang
            $rowsPerPage = 5; // số sản phẩm trên 1 trang
            if(!isset($_GET['page'])){
                $_GET['page']=1;
            }
            //vị trí của mẫu tin đầu tiên trên mỗi trang
            $offset = ($_GET['page']-1)*$rowsPerPage;
            //lấy $rowsPerPage mẫu tin, bắt đầu từ vị trí $offset
            $query = " Select * from sua LIMIT $offset, $rowsPerPage";
            $result = $conn->query("$query");
            //Tổng số mẫu tin cần hiển thị
            $numRows = mysqli_num_rows($result);
            //Tính tổng số trang
            $maxPage = ceil($numRows/$rowsPerPage);
            
        ?>

        <?php
            
            //2. Xây dựng câu query
            $sql = "select Ma_sua, Ten_sua, Trong_luong, Don_gia from sua";
            $result = $conn ->query("$sql");
            echo "<p align='center'><font size='5'> Thông tin sữa </font></p>";
            echo "<table align='center' width='700px' border='1' cellpadding = '2'
                    style='border-collapse:collapse'>";
            echo " <tr> <th width='50'> STT </th>
                        <th width='50'> Mã sữa </th>
                        <th width='50'> Tên sữa </th>
                        <th width='50'> Trọng lượng </th> </tr>";
            if($result -> num_rows != 0){
                $stt = 1;
                while($row = $result -> fetch_row()){
                    echo "<tr>";
                    echo "<td>$stt</td>";
                    echo "<td>$row[0]</td>";
                    echo "<td>$row[1]</td>";
                    echo "<td>$row[2]</td>";
                    echo "</tr>";
                    $stt++;
                }
            }
        ?>
    </div>

    <!--PHẦN HIỂN THỊ PHÂN TRANG-->
    <div class="pagination">
        <?php
            //điều kiện hiển thị nút back thì currentPage > 1
            if ( $_GET ['page'] > 1){ 
                echo "<a href =" . $_SERVER ['PHP_SELF']."? page =".( $_GET ['page'] -1) .">Back </a>";
            }
            for ($i =1 ; $i <= $maxPage ; $i ++){   //nút back
                if ($i == $_GET ['page'])
                    echo "<b> Trang". $i. "</b>";
                else
                    echo "<a href =" . $_SERVER ['PHP_SELF']."? page =".$i.">Trang ".$i." </a>";
            }

            //Lặp khoảng giữa
            for($i =1; $i<$maxPage;$i++){
                if($i == $_GET['page']){
                    echo "<b>Trang ".$i."</b> ";
                }else{
                    echo "<a href=" .$_SERVER['PHP_SELF']. "?page=" .$i.">Trang" .$i. "</a>";
                }
            }

            //điều kiện hiển thị nút next thì currentPage < totalPage
            if ( $_GET ['page'] < $maxPage ){ 
                echo "<a href =". $_SERVER ['PHP_SELF']."? page =".( $_GET ['page']+1) .">Next </a>";
            }
        ?>
    </div>
    
</body>
</html>