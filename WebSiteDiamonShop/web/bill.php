<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Thanh toán</title>
</head>

<body>
    <?php include("../bootstrap/bootstrap.php");
    include("../connectDB/registerDB.php");
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
                                <form:form action="checkout" method="POST" modelAttribute="bills" class="form-horizontal">
                                    <h3>Thanh toán đơn hàng</h3>
                                    <div class="control-group">
                                        <label class="control-label">Họ tên <sup>*</sup></label>
                                        <div class="controls">
                                            <input type="text" placeholder=" Field name">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Email <sup>*</sup></label>
                                        <div class="controls">
                                            <input type="text" placeholder=" Field name">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Liên hệ <sup>*</sup></label>
                                        <div class="controls">
                                            <input type="text" placeholder=" Field name">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Địa chỉ <sup>*</sup></label>
                                        <div class="controls">
                                            <textarea></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Ghi chú <sup>*</sup></label>
                                        <div class="controls">
                                            <textarea></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <input type="submit" name="submitAccount" value="Register" class="shopBtn exclusive">
                                        </div>
                                    </div>
                                </form:form>
                            </div>
                        </div>
                        <div class="span1">&nbsp;</div>

                    </div>
                <?php } else { ?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Vui lòng đăng nhập để mua hàng</strong> <a href="register.php" title="">Login</a>
                    </div>
                <?php } ?>
            </div>

        </div>

    </div>
</body>

</html>