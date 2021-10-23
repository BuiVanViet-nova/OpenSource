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
            $mang_can=array("Quý", "Giáp", "Ất", "Bình", "Đinh", "Mậu", "Kỷ", "Canh", "Tâm", "Nhâm");
            $mang_chi=array("Hợi", "Tý", "Sửu", "Dần", "Mẹo", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
            $mang_hinh=array("hoi.jpg","ty.jpg","suu.jpg","dan.jpg","meo.jpg","thin.jpg","ti.jpg","ngo.jpg","mui.jpg","than.jpg","dau.jpg","tuat.jpg");
            $nam_dl = $_POST['nam'];
            if(is_numeric($nam_dl) && is_int($nam_dl+0)){
                $nam = $nam_dl-3;
                $can = $nam%10; // có 10 thiên can
                $chi = $nam%12; //có 12 địa chi
                $nam_al = $mang_can[$can];
                $nam_al = $nam_al . " ". $mang_chi[$chi];
                $hinh = $mang_hinh[$chi];
                $hinh_anh = "<img width='250px' height='200px' src='12_congiap/$hinh'>";
            }
        }
    ?>

    <form  action="" method="post">
        <table bgcolor="#00CCFF" align="center" style="border:1px solid black;">
            <tr bgcolor="blue" >
                <td colspan="3"><h2 align="center" style="color:white">TÍNH NĂM ÂM LỊCH</h2></td>
            </tr>
            <tr>
                <td style="font-size: 20px; color:#0066CC">Năm dương lịch</td>
                <td></td>
                <td style="font-size: 20px; color:#0066CC">Năm âm lịch</td>
            </tr>
            <tr>
                <td><input type="text" name="nam" value="<?php if(isset($nam_dl)) echo $nam_dl; ?>"></td>
                <td><input type="submit" name="submit" value="=>"></td>
                <td><input type="text" value="<?php if(isset($nam_al)) echo $nam_al; ?>" disabled></td>
            </tr>
            <tr>
                <td align="center" colspan="3"><?php if(isset($hinh_anh)) echo $hinh_anh; ?></td>
            </tr>
        </table>
    </form>
</body>
</html>