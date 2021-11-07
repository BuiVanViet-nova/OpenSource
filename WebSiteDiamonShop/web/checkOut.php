<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../template/assets/user/ico/favicon.ico">
    <title>Thanh toán</title>
</head>

<body>
    <?php include("../bootstrap/bootstrap.php");
    include("../connectDB/check_outDB.php");
    $categorys = getAllCategorys();
    disconnect_db();
    ?>
    <div class="container">
        <div id="gototop"></div>
        <?php include("../common/header.php"); ?>
        <?php include("../common/navigation.php"); ?>
        <div class="row">
            <?php include("../common/categorys.php"); ?>
            <div class="span9">
                <?php if (isset($_SESSION['username'])) { ?>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Trang chủ</a> <span class="divider">/</span></li>
                        <li class="active">Người dùng</li>
                    </ul>
                    <h3>Người dùng</h3>
                    <hr class="soft" />

                    <div class="row">
                        <div class="span4">
                            <div class="well">
                                <br />
                                <form action="../connectDB/check_outDB.php" method="POST" modelAttribute="bills" class="form-horizontal">
                                    <h3>Thanh toán đơn hàng</h3>
                                    <div class="control-group">
                                        <label class="control-label">Họ tên <sup>*</sup></label>
                                        <div class="controls">
                                            <input type="text" name="name"  value="<?php if(isset($_SESSION['username'])) echo $_SESSION['username']['display_name'] ?>"  placeholder=" Field name">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Email <sup>*</sup></label>
                                        <div class="controls">
                                            <input type="text" name="email"  value="<?php if(isset($_SESSION['username'])) echo $_SESSION['username']['email'] ?>" placeholder=" Field name">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Số ĐT <sup>*</sup></label>
                                        <div class="controls">
                                            <input type="text" name="phone" placeholder=" Số điện thoại">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Địa chỉ <sup>*</sup></label>
                                        <div class="controls">
                                            <textarea name="address" ><?php if(isset($_SESSION['username'])) echo $_SESSION['username']['address'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Ghi chú <sup>*</sup></label>
                                        <div class="controls">
                                            <textarea name="note"></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <input type="submit" name="submitAccount" value="Đặt hàng" class="shopBtn exclusive">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="span1">&nbsp;</div>

                    </div>
                <?php } else { ?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Vui lòng đăng nhập để mua hàng</strong> <a href="register.php?action1=checkOut" title="">Login</a>
                    </div>
                <?php } ?>
            </div>

        </div>
        <div style="width:940px; height:auto" class="copyright">
            <?php include("../common/footer.php") ?>
            </div>
    </div>
</body>

</html>