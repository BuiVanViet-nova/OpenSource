<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    
    <link rel="shortcut icon"
	href="../template/assets/user/ico/favicon.ico">
    <title>Đăng ký tài khoản</title>
</head>

<body>
    <?php include("../bootstrap/bootstrap.php");
    include("../connectDB/registerDB.php");
    $categorys = getAllCategorys();
    disconnect_db(); ?>
    <div class="container">
        <div id="gototop"></div>
        <?php include("../common/header.php"); ?>
        <?php include("../common/navigation.php"); ?>
        <div class="row">
            <?php include("../common/categorys.php"); ?>
            <div class="span9">
                <ul class="breadcrumb">
                    <li><a href="index.html">Trang chủ</a> <span class="divider">/</span></li>
                    <li class="active">Người dùng</li>
                </ul>
                <h3>Người dùng</h3>
                <hr class="soft" />

                <div class="row">
                    <div class="span4">
                        <div class="well">
                            <h5>ĐĂNG KÝ TÀI KHOẢN</h5>

                            <br />
                            <form action="../connectDB/registerDB.php" method="POST">
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Email</label>
                                    <div class="controls">
                                        <input type="email" class="span3" placeholder="Mời nhập email" name="username" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Mật khẩu</label>
                                    <div class="controls">
                                        <input type="password" class="span3" placeholder="Mời nhập mật khẩu" name="password" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Nhập lại mật khẩu</label>
                                    <div class="controls">
                                        <input type="password" class="span3" placeholder="Mời nhập lại mật khẩu" name="repassword" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Họ và tên</label>
                                    <div class="controls">
                                        <input type="text" class="span3" placeholder="Mời nhập họ và tên" name="display_name" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Địa chỉ</label>
                                    <div class="controls">
                                        <input type="text" class="span3" placeholder="Mời nhập địa chỉ" name="address" />
                                    </div>
                                </div>
                                <div class="controls">
                                    <button type="submit" name="register" class="btn block">Đăng ký thành viên</button>
                                    <button type="reset" name="reset" class="btn block">Làm mới</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="span1">&nbsp;</div>
                    <div class="span4">
                        <div class="well">
                            <h5>ĐĂNG NHẬP HỆ THỐNG</h5>
                            <form action="../connectDB/registerDB.php" method="POST">
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Tài khoản</label>
                                    <div class="controls">
                                        <input type="text" class="span3" placeholder="Email hoặc tên tài khoản" name="username" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Mật khẩu</label>
                                    <div class="controls">
                                        <input type="password" class="span3" placeholder="Mời nhập mật khẩu" name="password" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="login" class="defaultBtn">Đăng nhập</button>
                                        <a href="#">Quên mật khẩu?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>