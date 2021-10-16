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
            $width = $_POST['width'];
            $height = $_POST['height'];
            if($width <= 0 || $height <= 0 || $width < $height){
                echo "nhập lại chiều dài và chiều rộng";
            }else{
                $dientich = $width * $height;
            }
        }
    ?>
    <form action="" method="POST">
        <table bgcolor="yellow" align="center">
            <tr bgcolor="orange">
                <td colspan="2">DIỆN TÍCH HÌNH CHỮ NHẬT</td>
            </tr>
            <tr>
                <td>Chiều dài: </td>
                <td><input type="text" name="width" placeholder="nhập chiều dài hình chữ nhật" size="30" require></td>
            </tr>
            <tr>
                <td>Chiều rộng: </td>
                <td><input type="text" name="height" placeholder="nhập chiều rộng hình chữ nhật" size="30" require></td>
            </tr>
            <tr>
                <td>Diện tích: </td>
                <td><label for=""></label><input type="text" value="<?php if(isset($dientich)) echo $dientich ?>" readonly></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>