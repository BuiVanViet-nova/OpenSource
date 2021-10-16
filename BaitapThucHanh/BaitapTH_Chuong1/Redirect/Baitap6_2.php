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
        $so1 = $_POST['so1'];
        $so2 = $_POST['so2'];
        $calculation = $_POST['calculation'];
        if(isset($calculation)){
            if($calculation == "cong")
                $ketqua = $so1 + $so2;
            elseif($calculation == "tru")
                $ketqua = $so1 - $so2;
            elseif($calculation == "nhan")
                $ketqua = $so1 * $so2;
            elseif($calculation == "chia" && $so2 == 0){
                $ketqua = "không chia được cho 0";
            }else{
                $ketqua = $so1 / $so2;
            }
        }
            
    ?>
    <form action="Baitap6_1.php" method="post" align="center">
        <h1>PHÉP TÍNH TRÊN HAI SỐ</h1>
        Cho phép tính: 
        <input type="radio" name="calculation" value="cong" <?php if(!empty($calculation) && $calculation =="cong") echo "checked = 'checked'" ?>> <label for="cong">Cộng</label>
        <input type="radio" name="calculation" value="tru" <?php if(!empty($calculation) && $calculation =="tru") echo "checked = 'checked'" ?>> <label for="tru">Trừ</label>
        <input type="radio" name="calculation" value="nhan" <?php if(!empty($calculation) && $calculation =="nhan") echo "checked = 'checked'" ?>> <label for="nhan">Nhân</label>
        <input type="radio" name="calculation" value="chia" <?php if(!empty($calculation) && $calculation =="chia") echo "checked = 'checked'" ?>> <label for="chia">Chia</label>
        <br>
        Số thứ nhất: <input type="text" name="so1"> <br>
        Số thứ hai: &nbsp; <input type="text" name="so2"><br>
        Kết quả: &nbsp; &nbsp; <input type="text" value="<?php if(isset($ketqua)) echo $ketqua; ?>" style="margin-left:7px ;"><br>
        <input type="submit" value="Quay lại trang trước" name="submit" style="margin-top:2px;">
    </form>
</body>
</html>