<?php include("registerDB.php");
    if(isset($_SESSION['username'])){
        $cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
        $user = $_SESSION['username'];
        if(isset($_POST['name'])){
            $id_user = $user['id'];
            $note = $_POST['note'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];

            $query = "INSERT INTO `orders`(`user_id`, `note`, `address`, `phone`) VALUES ('$id_user','$note', '$address','$phone')";
            $result = $conn->query($query);
            if($result){
                $id_order = mysqli_insert_id($conn);
                foreach($cart as $item ){
                    mysqli_query($conn,"INSERT INTO `order_detail`(`id_order`, `id_product`, `quanlity`, `price`) VALUES ('$id_order','$item[id]','$item[quanlity]','$item[price]')");
                }
                unset($_SESSION['cart']);
                header("Location: ../decorator/index.php");
            }
        }
    }
    
    
?>