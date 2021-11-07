<?php include("registerDB.php");
    $id_category = "";
    $sizeProduct = "";
    $nameProduct = "";
    $imgProduct = "";
    $priceProduct = "";
    $titleProduct = "";
    $detailProduct = "";
    $dateProduct = "";
    if(isset($_GET['addProduct'])){
        if(isset($_GET['id_category'])) {$id_category=$_GET['id_category'];}
        if(isset($_GET['sizeProduct'])) {$sizeProduct=$_GET['sizeProduct'];}
        if(isset($_GET['nameProduct'])) {$nameProduct=$_GET['nameProduct'];}
        if(isset($_GET['imgProduct'])) {$imgProduct=$_GET['imgProduct'];}
        if(isset($_GET['priceProduct'])) {$priceProduct=$_GET['priceProduct'];}
        if(isset($_GET['titleProduct'])) {$titleProduct=$_GET['titleProduct'];}
        if(isset($_GET['detailProduct'])) {$detailProduct=$_GET['detailProduct'];}
        if(isset($_GET['dateProduct'])) {$dateProduct=$_GET['dateProduct'];}
        $query="INSERT INTO `products`(`id_category`, `sizes`, `name`, `img`, `price`, `title`, `details`, `created_date`, `updated_date`) 
            VALUES ('$id_category','$sizeProduct','$nameProduct','$imgProduct','$priceProduct','$titleProduct','$detailProduct','$dateProduct','')";
    
        //check
        if(empty($nameProduct) || empty($imgProduct) || empty($priceProduct) || empty($titleProduct) || empty($detailProduct)){
            echo "<script>alert('Vui lòng nhập đầy đủ thông tin');
            window.open('../web/addProduct.php','_self', 1);
            </script>";
        }
        else if($conn -> query($query) == TRUE){
            echo "<script>alert('Thêm dữ liệu thành công');
            window.open('../web/addProduct.php','_self', 1);
            </script>";
        }
    }
    
    if(isset($_GET['editProduct'])){
        if(isset($_GET['id_product'])) {$id=$_GET['id_product'];}
        if(isset($_GET['id_category'])) {$id_category=$_GET['id_category'];}
        if(isset($_GET['sizeProduct'])) {$sizeProduct=$_GET['sizeProduct'];}
        if(isset($_GET['nameProduct'])) {$nameProduct=$_GET['nameProduct'];}

        if(isset($_FILES['imgProduct'])){
            $file = $_FILES['imgProduct'];
            $file_name = $file['name'];
            if($file['type'] == 'imgProduct/jpeg' || $file['type'] == "imgProduct/jpg" || $file['type'] == "imgProduct/png"){
                move_uploaded_file($file['tmp_name'], 'uploads/'.$file_name);
            }else{
                echo "Không đúng định dạng";
                $file_name = "";
            }
        }
        if(isset($_GET['priceProduct'])) {$priceProduct=$_GET['priceProduct'];}
        if(isset($_GET['titleProduct'])) {$titleProduct=$_GET['titleProduct'];}
        if(isset($_GET['detailProduct'])) {$detailProduct=$_GET['detailProduct'];}
        if(isset($_GET['created_dateProduct'])) {$created_dateProduct=$_GET['created_dateProduct'];}
        if(isset($_GET['updated_dateProduct'])) {$updated_dateProduct=$_GET['updated_dateProduct'];}
        $query="UPDATE `products` SET `id_category`=$id_category,`sizes`='$sizeProduct',`name`='$nameProduct',    
                `img`='$imgProduct',`price`=$priceProduct,`title`='$titleProduct',`details`='$detailProduct',
                `updated_date`='$updated_dateProduct' WHERE `id` = $id ";
    
        //check
        if(empty($nameProduct) || empty($imgProduct) || empty($priceProduct) || empty($titleProduct) || empty($detailProduct)){
            echo "<script>alert('Vui lòng nhập đầy đủ thông tin');
            window.open('../web/addProduct.php','_self', 1);
            </script>";
        }else if($conn -> query($query) == TRUE){
            echo "<script>alert('Chỉnh sửa dữ liệu thành công');
            window.open('../decorator/index.php','_self', 1);
            </script>";
        }
    }

    if(isset($_GET['deleteProduct'])){
        if(isset($_GET['id_product'])) {$id=$_GET['id_product'];}
        $query = "DELETE FROM `products` WHERE id = $id";
        //check
        if($conn -> query($query) == TRUE){
            echo "<script>alert('Xóa dữ liệu thành công');
            window.open('../decorator/index.php','_self', 1);
            </script>";
        }else{
            echo "<script>alert('Error');
            window.open('../decorator/index.php','_self', 1);
            </script>";
        }
    }

?>