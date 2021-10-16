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
            $toan = $_POST['toan'];
            $ly = $_POST['ly'];
            $hoa = $_POST['hoa'];
            $diemchuan = $_POST['diemchuan'];
            if($ly >= 0 && $hoa >= 0 && $toan >=0){
                $tongdiem = $toan + $ly + $hoa;
                if($tongdiem <= $diemchuan || $toan == 0 || $ly == 0 || $hoa == 0){
                    echo "Rớt";
                }else{
                    echo "Đậu";
                }
            }else{
                echo "nhập lại";
            }
           
        }
        
    ?>
    
    <form action="" method="POST">
        <table bgcolor="#FFCCFF" align="center">
            <tr bgcolor="#CC3366">
                <td colspan="2" align="center">KẾT QUẢ THI ĐẠI HỌC</td>
            </tr>
            <tr>
                <td>Toán: </td>
                <td><input type="text" name="toan" value="<?php if(isset($toan)) echo $toan; ?>" require></td>
            </tr>
            <tr>
                <td>Lý: </td>
                <td><input type="text" name="ly" value="<?php if(isset($ly)) echo $ly; ?> " require></td>
            </tr>
            <tr>
                <td>Hóa: </td>
                <td><input type="text" name="hoa" value="<?php if(isset($hoa)) echo $hoa; ?>" require ></td>
            </tr>
            <tr>
                <td>Điểm chuẩn: </td>
                <td><input type="text" name="diemchuan" value="20" readonly></td>
            </tr>
            <tr>
                <td>Tổng điểm: </td>
                <td><input type="text" value="<?php if(isset($tongdiem)) echo $tongdiem; ?>" readonly></td>
            </tr>
            <tr>
                <td>Kết quả thi: </td>
                <td><input type="text" value="" readonly></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Xem kết quả"></td>
            </tr>
        </table>
    </form>
</body>
</html>