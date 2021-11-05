<?php include("registerDB.php");
    $rowsPerPage =5; // So mau tin tren mot trang , trong truong hop nay cho bang 5
        if (!isset($_GET ['page'])){
            $_GET ['page'] = 1;
        }
    // Vi tri cua mau tin dau tien tren moi trang
    $offset =( $_GET['page'] -1) * $rowsPerPage ;
    // Lay $rowsPerPage mau tin , bat dau tu vi tri $offset
    $query =" SELECT * FROM `products` LIMIT $offset , $rowsPerPage";
    $result = $conn->query($query);
    // Tong so mau tin can hien thi
    $numRows = mysqli_num_rows ($result);
    // Tinh tong so trang
    $maxPage = ceil( $numRows / $rowsPerPage );

    for ($i =1 ; $i <= $maxPage ; $i ++){
        if ($i == $_GET ['page']){
            echo '<b> Trang'.$i. '</b>';
        }else
            echo "<a href =" . $_SERVER ['PHP_SELF']. "? page = ".$i.">Trang ".$i." </a>";
    }
?>