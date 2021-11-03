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
        //thêm mới giỏ hàng
        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]['quanlity'] +=1;
        }else{
            $_SESSION['cart'][$id] = $item;
        }
        
        //Xóa sản phẩm khỏi giỏ hàng
        $action = (isset($_GET['action'])) ? $_GET['action'] : 'add';
        if($action == 'delete'){
            unset($_SESSION['cart'][$id]);
        }
        var_dump($action);
        header('location: ../web/cart.php');
        
    }
    
    
?>