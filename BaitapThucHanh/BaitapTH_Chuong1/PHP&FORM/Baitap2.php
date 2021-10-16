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
            $radius = $_POST['radius'];
            if($radius > 0){
                $dientich = pi() * pow($radius,2);
                $chuvi = 2*pi()*$radius;
            }else{
            echo "nhập lại bán kính";
            }
        }
    ?>
    <form action="" method="POST">
        <table bgcolor="yellow" align="center">
            <tr bgcolor="orange">
                <td colspan="2">DIỆN TÍCH VÀ CHU VI HÌNH TRÒN</td>
            </tr>
            <tr>
                <td>Bán kính: </td>
                <td><input type="text" name="radius" placeholder="nhập bán kính hình tròn" size="30" value="<?php if(isset($radius)) echo $radius ?>" require></td>
            </tr>
            <tr>
                <td>Diện tích: </td>
                <td><input type="text" value="<?php if(isset($dientich)) echo $dientich ?>" readonly></td>
            </tr>
            <tr>
                <td>Chu vi: </td>
                <td><input type="text" value="<?php if(isset($chuvi)) echo $chuvi ?>" size="30" readonly></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>