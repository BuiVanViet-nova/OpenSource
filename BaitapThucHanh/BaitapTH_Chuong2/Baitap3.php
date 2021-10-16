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
            $n = $_POST['soluong'];
            $arr = random_value($n);
            $arr1 = implode(",",$arr);
            $max = FindMax($arr);
            $min = FindMin($arr);
            $sum = Sum_Value($arr);
        }

        function random_value($n){
            $arr = [];
            for($i=0;$i<$n;$i++){
                $arr[$i] = rand(1,20);
            }
            return $arr;
        }
        function FindMin($arr){
            $totalData = count($arr);
            $min = $arr[0];
            for($i=1;$i<$totalData;$i++){
                if($min > $arr[$i]){
                    $min = $arr[$i];
                }
            }
            return $min;
        }
        function FindMax($arr){
            $totalData = count($arr);
            $max = $arr[0];
            for($i=1;$i<$totalData;$i++){
                if($max < $arr[$i]){
                    $max = $arr[$i];
                }
            }
            return $max;
        }
      
        function Sum_Value($arr)
        {
            $tong = 0;
            foreach ($arr as $value) {
                $tong += $value;
            }
            return $tong;
        }
    ?>
<form action="" method="post">
<table align="center" bgcolor="#a9a9a9">
    <th colspan="3" style="text-transform: uppercase" bgcolor="	#FF00FF">
        PHÁT SINH MẢNG VÀ TÍNH TOÁN
    </th>
    <tr>
        <td>Nhập số phần tử: </td>
        <td> <input type="text" name="soluong" placeholder="nhập số phần tử" size="35"> </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input bgcolor="#FFFF66" type="submit" name="submit" value="Phát sinh và tính toán">
        </td>
        <td></td>
    </tr>
    <tr>
        <td>Mảng: </td>
        <td><input type="text" size="40" value="<?php if(isset($arr1)) echo "$arr1"?>" disabled></td>
    </tr>
    <tr>
        <td>GTLN (MAX) trong mảng:</td>
        <td><input type="text" value="<?php if(isset($max)) echo "$max";?>" disabled></td>
    </tr>
    <tr>
        <td>GTNN (MIN) trong mảng:</td>
        <td>
        <input type="text" value="<?php if(isset($min)) echo "$min";?>" disabled></td>
    </tr>
    <tr> 
        <td>Tổng mảng: </td>
        <td><input type="text" value="<?php if(isset($sum)) echo "$sum";?>" disabled></td>
    </tr>
</table>
</form>
</body>
</html>