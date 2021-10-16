<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<table align="center" bgcolor="#a9a9a9">
    <?php
        if(isset($_POST['submit'])){
            $mang = $_POST['mang'];
            $arr = implode(",",explode(",",$mang)) ;
            $number = $_POST['number'];
            $number = $number + 0;
        }
        function vitri($number,$arr){
            $totalData = count(explode(",",$arr));
            for($i=1;$i<=$totalData;$i++){
                if(($arr[$i]) == $number){
                    echo "tìm thấy $number tại vị trí thứ $i của mảng";
                }
            }
        }
    ?>

    <th colspan="3" style="text-transform: uppercase" bgcolor="	#FF00FF">
        TÌM KIẾM
    </th>
    <tr>
        <td>Nhập mảng: </td>
        <td> <input type="text" name="mang" value="<?php if(isset($mang)) echo "$mang"; ?>" placeholder="nhập mảng" size="35"> </td>
    </tr>
    <tr>
        <td>Nhập số cần tìm: </td>
        <td> <input type="text" name="number" value="<?php if(isset($number)) echo "$number"; ?>" placeholder="nhập số cần tìm" size="15"> </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input bgcolor="lightblue" type="submit" name="submit" value="Tìm kiếm">
        </td>
        <td></td>
    </tr>
    <tr>
        <td>Mảng: </td>
        <td><input type="text" size="35" value="<?php if(isset($arr)) echo "$arr"; ?>" disabled></td>
    </tr>
    <tr>
        <td>Kết quả tìm kiếm:</td>
        <td><input style="color: red;" type="text" value="<?php if(isset($number)) vitri($number,$arr); ?>" size="35" disabled></td>
    </tr>
</table>
</form>
</body>
</html>