<?php 
    include("connectDB.php");
    connect_db();
    session_start();
    global $conn;
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = $conn -> query("SELECT * FROM `products` WHERE id = '$id'");
        $product = [];
        if($query){
            $product = $query->fetch_assoc();
        }
        $item = [
            'id' => $product['id'],
            'name' => $product['name'],
            'title' => $product['title'],
            'image' => $product['img'],
            'price' => $product['price'],
            'quanlity' => 1

        ];

        $_SESSION['cart'][$id] = $item;
        header('location: ../web/cart.php');
    }
    
?>