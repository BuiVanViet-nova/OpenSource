<?php
    include("cartDB.php");
    // session_start();
    // connect_db();
    // global $conn;
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
        if($username == null || $password == null || $display_name == null){
            echo "<script language='javascript'>
                                alert('vui lòng nhập đầy đủ thông tin!');
                                window.open('../web/register.php','_self', 1);
							</script>
						";
            return;
        }
        if($password != $repassword){
            echo "<script language='javascript'>
                                alert('Mật khẩu nhập lại không hợp lệ!');
                                window.open('../web/register.php','_self', 1);
							</script>
						";
            // echo "<script> alert('Mật khẩu nhập lại không hợp lệ!')</script>";
            // header("location:../web/register.php");
        }else if($conn->query($query) == TRUE){
            echo "<script>alert('Đăng ký thành công');
                    window.open('../web/register.php','_self', 1);
                    </script>";
            // header("location:../web/register.php");
        }
    }

    if(isset($_POST['login']) && isset($_POST['username']) && isset($_POST['password'])){
        unset($_SESSION['username']);
        unset($_SESSION['admin']);
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM `users` WHERE username='$username' and password = '$password'";
        $result = $conn->query($query);
        if($row = $result->fetch_row() > 0){
            $_SESSION['username'] = $username;
            // echo "<script language='javascript'> alert('thành công'); </script>";
            header("location: ../decorator/index.php");
            
        }else{
            echo "<script language='javascript'>
                                window.open('../web/register.php','_self', 1);
								alert('email hoặc password nhập sai');
							</script>
						";
        }
        $query2 = "SELECT * FROM `admin` WHERE admin_name='$username' and admin_password = '$password'";
        $result2 = $conn->query($query2);
        if($row = $result2->fetch_row() > 0){
            $_SESSION['admin'] = 'admin@gmail.com';
            // echo "<script language='javascript'> alert('thành công'); </script>";
            header("location: ../decorator/index.php");
            
        }else{
            echo "<script language='javascript'>
                                window.open('../web/register.php','_self', 1);
								alert('email hoặc password nhập sai');
							</script>
						";
        }

        
    }



?>