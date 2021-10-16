<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            text-align: center;
            margin: 0px auto;
            width: 500px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form action="Baitap8_2.php" method="post">
        <h1>Enter Your Information</h1>
        <p>Fullname <input type="text" name="fullname"></p>
        <p>Address &nbsp; <input type="text" name="address"></p>
        <p>Phone &emsp;&nbsp;<input type="text" name="phone"></p>
        <p>Gender&emsp;<input type="radio" name="gender" value="nam" checked> Nam
                        <input type="radio" name="gender" value="nu"> Nữ
        </p>
        <p> Country &emsp;<select name="country">
            <option value="Việt Nam">Việt Nam</option>
            <option value="Trung Quốc">Trung Quốc</option>
            <option value="Nhật Bản">Nhật Bản</option>
            <option value="Lào">Lào</option>
        </select></p>
        Study &emsp;&nbsp;<input type="checkbox" name="checkbox" value="PHP & MySQL" checked>PHP & MySQL
                            <input type="checkbox" name="checkbox" value="ASP.NET">ASP.NET
                            <input type="checkbox" name="checkbox" value="CCNA">CCNA
                            <input type="checkbox" name="checkbox" value="Security+">Security+
        <br>
        Note &emsp;&nbsp;&nbsp;<textarea name="note" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" name="submit" value="Gửi">
        <input type="reset" name="reset" value="Hủy">
    </form>
</body>
</html>