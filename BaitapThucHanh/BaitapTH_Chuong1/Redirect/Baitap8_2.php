<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['fullname'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $country = $_POST['country'];
            $study = $_POST['checkbox'];
            $note = $_POST['note'];
            if(empty($name) || empty($address) || empty($phone) || empty($gender) || empty($country) || empty($study) || empty($note)){
                echo "Bạn đã nhập thiếu.";
                echo "<a type='button' href='Baitap8_1.php'>Quay lại</a> >";
            }else{
                echo "Bạn đã nhập thành công, dưới đây là thông tin bạn đã nhập <br>" ;
                echo "$name" . "<br>"; 
                echo "$address" . "<br>";
                echo "$phone" ."<br>";
                echo "$gender". "<br>";
                echo "$country" . "<br>";
                echo "$study" . "<br>";
                echo "$note" ."<br>";
            }
        }
    ?>
</body>
</html>