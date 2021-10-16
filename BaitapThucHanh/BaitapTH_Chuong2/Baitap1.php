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
        <table align="center" bgcolor ="#a9a9a9">
            <tr>
                <td>Nhập số tự nhiên n: </td>
                <td><input type="text" name="n"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Thực hiện"></td>
            </tr>
            <tr>
                <td>Mảng phát sinh: </td>
                <td><input type="text" value="<?php if(isset($arr2)) echo "$arr2"; ?>" disabled></td>
            </tr>
            <tr>
                <td>Đếm số chẵn: </td>
                <td><input type="text" value="<?php if(isset($dem)) echo "$dem"; ?>" disabled></td>
            </tr>
            <tr>
                <td>Đếm số bé hơn 100: </td>
                <td><input type="text" value="<?php if(isset($dem1)) echo "$dem1"; ?>" disabled></td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST['submit'])){
            $n = $_POST['n'];
            if(is_numeric($n) && $n > 0 && is_int($n+0)){
                echo "n là số nguyên dương <br>";
                $arr = [];
                for($i=1;$i<=$n;$i++){
                    $arr[$i] = rand(-200,200);
                    echo "$arr[$i]" ."<br>";
                }
                $arr1 = implode(",",$arr);
                $arr2 = explode(",",$arr1);
                print_r($arr2);
                echo "<br>" .$arr1 ."<br>";
                echo "Câu c:" ."<br>";
                $totalData = count($arr2);
                $dem = 0;
                for($i=0;$i<$totalData; $i++){
                    if($arr2[$i] %2 == 0){
                        $dem++;
                    }
                }
                echo "$dem";
                echo "<br> Câu d:" ."<br>";
                $dem1 = 0;
                for($i=0;$i<$totalData; $i++){
                    if($arr2[$i] <100){
                        $dem1++;
                    }
                }
                echo "$dem1";
            }else{
                echo "null";
            }
        }
    ?>
</body>
</html>