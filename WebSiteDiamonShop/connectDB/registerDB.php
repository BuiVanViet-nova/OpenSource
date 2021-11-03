<?php
    include("connectDB.php");
    connect_db();
    global $conn;
    if(isset($_POST['reset'])){
        $_POST['username'] = $_POST['password'] = $_POST['repassword'] = $_POST['display_name'] = $_POST['address'] = '';
    }

    if(isset($_POST['register']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repassword']) && isset($_POST['display_name'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $display_name = $_POST['display_name'];
        $address = $_POST['address'];
        $query = "INSERT INTO `users`(`username`, `password`, `display_name`, `address`) VALUES ('$username','$password','$display_name','$address')";
        
        //check
        if($password != $repassword){
            echo "<script> alert('Mật khẩu nhập lại không hợp lệ!')</script>";
            header("location:../web/register.php");
        }else if($conn->query($query) == TRUE){
            echo "<script>alert('Thêm dữ liệu thành công')</script>";
            header("location:../web/register.php");
        }
    }

    if(isset($_POST['login']) && isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM `users` WHERE username='".$username."' and password = '".$password."';";
        $result = $conn->query($query);
        if($result == TRUE){
            header("location:../decorator/index.php");
        }else{
            echo "email hoặc password nhập sai";
        }
        $user = [];
        if($result){
            $row = $result->fetch_assoc();
            $user = $row;
        }

        var_dump($user);
        
    }

?>