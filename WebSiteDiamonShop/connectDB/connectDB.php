<?php 
    //biến toàn cục
    global $conn;

    function connect_db(){
        global $conn;
        //1, Kết nối cơ sở dữ liệu kiểu thủ tục
        $servername = 'localhost:3308';
        $username = 'root';
        $password = '';
        $dbname = 'diamond_shop';
        //mở kết nối
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn, charset: "UTF-8");
        //check connect
        if($conn -> connect_error){
            die("connect is failed: " .$conn->connect_error);
        }
    }
    // connect_db();

    //ngắt kết nối
    function disconnect_db(){
        global $conn;
        if($conn){
            $conn->close();
        }
    }

    
    function getAllSlide(){
        global $conn;
        //hàm kết nối
        connect_db();

        //query
        $query = "SELECT * FROM `slides`";

        //result: lưu danh sách sản phẩm trả về
        $result = $conn -> query($query);
        $slides = [];
        if($result){
            //lặp từng kết quả sql trả về
            while($row = $result->fetch_assoc()){
                //đưa dữ liệu sản phẩm vào mảng products
                $slides[] = $row;
            }
        }
        return $slides;
    }

    //lấy tất cả categorys
    function getAllCategorys(){
        global $conn;
        //hàm kết nối
        connect_db();

        //query
        $query = "SELECT * FROM `categorys`";

        //result: lưu danh sách sản phẩm trả về
        $result = $conn -> query($query);
        $categorys = [];
        if($result){
            //lặp từng kết quả sql trả về
            while($row = $result->fetch_assoc()){
                //đưa dữ liệu sản phẩm vào mảng products
                $categorys[] = $row;
            }
        }
        return $categorys;
    }

    //lấy tất cả sản phẩm
    function getAllProducts(){
        global $conn;
        //hàm kết nối
        connect_db();

        //query
        $query = "SELECT * FROM `products`";

        //result: lưu danh sách sản phẩm trả về
        $result = $conn -> query($query);
        
        $products = [];
        if($result){
            //lặp từng kết quả sql trả về
            while($row = $result->fetch_assoc()){
                //đưa dữ liệu sản phẩm vào mảng products
                $products[] = $row;
            }
        }
        return $products;
    }

    //lấy 1 sản phẩm
    function getProduct($product_id){
        global $conn;

        //hàm kết nối
        connect_db();

        $query = "SELECT * FROM `products` WHERE id = ($product_id)";

        //thực hiện câu truy vấn
        $result = $conn -> query($query);

        $product = [];
        if($result){
            $row = $result->fetch_assoc();
            $product = $row;
        }

        return $product;
    }

    function getProductByIDCategory($id){
        global $conn;

        //hàm kết nối
        connect_db();
        $sql = "SELECT * FROM `products` WHERE id_category = $id";
        $result = $conn -> query($sql);

        $productByIDCategory = [];
        if($result){
            while($row = $result->fetch_assoc()){
                $productByIDCategory[] = $row;
            }
        }

        return $productByIDCategory;
    }

    

    function addProduct(){
        
    }

?>