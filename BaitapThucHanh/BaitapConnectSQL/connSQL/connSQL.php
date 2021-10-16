<?php 
    //1, Kết nối cơ sở dữ liệu kiểu thủ tục
    $servername = 'localhost:3308';
    $username = 'root';
    $password = '';
    $dbname = 'test_qlbansua';
    //mở kết nối
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, charset: "UTF-8");
    //check connect
    if($conn -> connect_error){
        die("connect is failed: " .$conn->connect_error);
    }
?>