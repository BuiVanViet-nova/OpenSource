<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Baitap6_2.php" method="post" align="center">
        <h1>PHÉP TÍNH TRÊN HAI SỐ</h1>
        Cho phép tính: 
        <input type="radio" name="calculation" value="cong"> <label for="cong">Cộng</label>
        <input type="radio" name="calculation" value="tru"> <label for="tru">Trừ</label>
        <input type="radio" name="calculation" value="nhan"> <label for="nhan">Nhân</label>
        <input type="radio" name="calculation" value="chia"> <label for="chia">Chia</label>
        <br>
        Số thứ nhất: <input type="text" name="so1"> <br>
        Số thứ hai: &nbsp; <input type="text" name="so2"><br>
        <input type="submit" value="Tính" name="submit" style="margin-top:2px;">
    </form>
</body>
</html>