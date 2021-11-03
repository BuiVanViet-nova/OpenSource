<title>Thông tin cá nhân</title>
<!-- Favicons -->
<link rel="shortcut icon" href="../template/assets/user/ico/favicon.ico">
<!-- 
Body Section 
-->

<body>
    <?php include("../bootstrap/bootstrap.php");
    include("../connectDB/registerDB.php");
    $info = getInfo();
    $categorys = getAllCategorys();
    disconnect_db();
    ?>
    <div class="container">
        <div id="gototop"></div>
        <?php include("../common/header.php"); ?>
        <?php include("../common/navigation.php"); ?>
        <div class="row">
            <?php include("../common/categorys.php"); ?>
            <div class="span8">
                <h1>Thông tin cá nhân</h1>
                <table class="table">
                    <tr>
                        <td>Tên: </td>
                        <td><?php echo $info['name'] ?></td>
                    </tr>
                    <tr>
                        <td>Sở thích: </td>
                        <td><?php echo $info['hobby'] ?></td>
                    </tr>
                    <tr>
                        <td>Tuổi: </td>
                        <td><?php echo $info['age'] ?></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại: </td>
                        <td><?php echo $info['phone'] ?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ: </td>
                        <td><?php echo $info['address'] ?></td>
                    </tr>
                    <tr>
                        <td>Khóa: </td>
                        <td><?php echo $info['khoa'] ?></td>
                    </tr>
                    <tr>
                        <td>Lớp: </td>
                        <td><?php echo $info['lop'] ?></td>
                    </tr>
                    <tr>
                        <td>Giới thiệu: </td>
                        <td><?php echo $info['content'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="width:940px; height:auto" class="copyright">
            <?php include("../common/footer.php") ?>
            </div>
    </div>
    
</body>