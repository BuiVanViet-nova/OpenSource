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
            $chuho = $_POST['name'];
            $chisocu = $_POST['old'];
            $chisomoi = $_POST['new'];
            $dongia = $_POST['price'];
            if(isset($chisocu) && isset($chisomoi) ){
                $totalPrice = ($chisomoi - $chisocu) * $dongia;
            }
        }
        
    ?>
    
    <form action="" method="POST">
        <table bgcolor="yellow" align="center">
            <tr bgcolor="orange">
                <td colspan="2">THANH TOÁN TIỀN ĐIỆN</td>
            </tr>
            <tr>
                <td>Tên chủ hộ: </td>
                <td><input type="text" name="name" size="30" value="<?php if(isset($chuho)) echo $chuho; ?>" require></td>
            </tr>
            <tr>
                <td>Chỉ số cũ: </td>
                <td><input type="text" name="old" value="<?php if(isset($chisocu)) echo $chisocu; ?>">(Kw)</td>
            </tr>
            <tr>
                <td>Chỉ số mới: </td>
                <td><input type="text" name="new" value="<?php if(isset($chisomoi)) echo $chisomoi; ?>" >(Kw)</td>
            </tr>
            <tr>
                <td>Đơn giá: </td>
                <td><input type="text" name="price" value="2000" readonly> (VNĐ)</td>
            </tr>
            <tr>
                <td>Số tiền thanh toán: </td>
                <td><input type="text" value="<?php if(isset($totalPrice)) echo $totalPrice; ?>" disabled> (VNĐ)</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Tính"></td>
            </tr>
        </table>
    </form>
</body>
</html>