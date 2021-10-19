<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $string = $_POST['string'];
            $arr = explode(",",$string);
            $need_replace = $_POST['need_replace'] +0;
            $replace = $_POST['replace']+0;
            $x = thay_the($arr, $need_replace, $replace);
        }
        function thay_the($arr, $need_replace, $replace){
            for($i=0;$i<count($arr);$i++){
                if($need_replace == $arr[$i]){
                    $arr[$i] = $replace;
                }
            }
            return implode(",",$arr);
        }
    ?>

    <form action="" method="post">
        <table align="center">
            <tr bgcolor="#8B008B">
                <td align="center" colspan="2">THAY THẾ</td>
            </tr>
            <tr bgcolor="#FF00FF">
                <td>Nhập các phần tử: </td>
                <td><input type="text" name="string" value="<?php if(isset($string)) echo $string; ?>"></td>
            </tr>
            <tr bgcolor="#FF00FF">
                <td>Giá trị cần thay thế: </td>
                <td><input type="text" name="need_replace" value="<?php if(isset($need_replace)) echo $need_replace; ?>"></td>
            </tr>
            <tr bgcolor="#FF00FF">
                <td>Giá trị thay thế: </td>
                <td><input type="text" name="replace" value="<?php if(isset($replace)) echo $replace; ?>"></td>
            </tr>
            <tr>
                <td bgcolor="#FF00FF"></td>
                <td bgcolor="#FF00FF"><input bgcolor="#FFFF00" type="submit" name="submit" value="Thay thế"></td>
            </tr>
            <tr>
                <td>Mảng cũ: </td>
                <td><input type="text" value="<?php if(isset($string)) echo $string; ?>" disabled></td>
            </tr>
            <tr>
                <td>Mảng sau khi thay thế: </td>
                <td><input type="text" value="<?php if(isset($x)) echo $x; ?>" disabled></td>
            </tr>
        </table>
    </form>
</body>
</html>