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
            $start = $_POST['start'];
            $end = $_POST['end'];
            
            //trong giờ hợp lệ
            if($start >= 10 && $start <24 && $end > 10 && $end <=24){
                if($start < $end){
                    //start và end <= 17
                    if($start <= 17 && $end <=17){
                        $tien = ($end - $start) * 20000;
                    }
                    //start và end >= 17
                    elseif($start >=17 && $end >=17){
                        $tien = ($end - $start) * 45000;
                    }
                    //start <=17 và end >=17
                    else{
                        $tientruoc17 = (17-$start) * 20000;
                        $tiensau17 = ($end - 17) * 45000;
                        $tien = $tientruoc17 + $tiensau17;
                    }
                }elseif($start > $end){
                    $message = "giờ bắt đầu phải nhỏ hơn giờ kết thúc";
                }
            }
            //ngoài giờ hợp lệ
            else{
                $message = "giờ ngủ nghỉ";
            }
        }
    ?>
    <form action="" method="POST">
        <table bgcolor="#0099CC" align="center">
            <tr bgcolor="#006699">
                <td colspan="2">TÍNH TIỀN CA RA Ô CƠ</td>
            </tr>
            <tr>
                <td>Giờ bắt đầu: </td>
                <td><input type="text" name="start" value="<?php if(isset($start)) echo $start; ?>" require> (h)</td>
            </tr>
            <tr>
                <td>Giờ kết thúc: </td>
                <td><input type="text" name="end" value="<?php if(isset($end)) echo $end; ?>" require> (h)</td>
            </tr>
            <tr>
                <td>Tiền thanh toán: </td>
                <td><input type="text" value="<?php if(isset($tien)) echo $tien; ?>" readonly> VNĐ</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Tính tiền"></td>
            </tr>
        </table>
        <h1 bgcolor="#0099CC" align="center"><?php if(isset($message)) echo $message ?></h1>
    </form>
</body>
</html>