<head>
    <title>Giỏ hàng</title>
    <!-- Favicons -->
    <link rel="shortcut icon" href="../template/assets/user/ico/favicon.ico">
</head>

<body>
    <?php include("../bootstrap/bootstrap.php");
    include("../connectDB/cartDB.php");
    $cart = (isset($_SESSION['cart'])) ? $_SESSION['cart'] : [];
    disconnect_db(); ?>
    <div class="container">
        <div id="gototop"></div>
        <?php include("../common/header.php"); ?>
        <?php include("../common/navigation.php"); ?>
        <div class="row">
            <div class="span12">
                <ul class="breadcrumb">
                    <li><a href="../decorator/index.php">Home</a> <span class="divider">/</span></li>
                    <li class="active">Check Out</li>
                </ul>
                <div class="well well-small">
                    <h1>
                        Giỏ hàng <small class="pull-right"> ${totalQuantyCart} sản
                            phẩm trong giỏ hàng</small>
                    </h1>
                    <hr class="soften" />

                    <table class="table table-bordered table-condensed">
                        <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Mô tả</th>
                                <th>Giá bán</th>
                                <th>Số lượng</th>
                                <th>Chỉnh sửa</th>
                                <th>Xóa</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($cart as $key => $item){ ?>
                                <tr>
                                    <td><img width="100" src="../template/assets/user/img/<?php echo $item['image'] ?>" alt=""></td>
                                    <td><?php echo $item['title'];  ?></td>
                                    <td>
                                        <?php echo $item['price']; ?>đ
                                    </td>
                                    <td><input type="number" min="0" max="1000" class="span1" style="max-width: 50px" placeholder="1" name="number" size="16" value=""></td>
                                    <td><a href="#" data-id="<?php echo $key ?>" class="btn btn-mini btn-danger edit-cart" type="button"> <span class="icon-edit"></span>
                                        </a></td>   
                                    <td>
                                        <div class="input-append">
                                            <a href="#" class="btn btn-mini btn-danger" type="button"> <span class="icon-remove"></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <?php echo $item['price'] ?>đ 
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                    <br /> <a href="products.html" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Tiếp tục mua </a> <a href="login.html" class="shopBtn btn-large pull-right">Thanh toán <span class="icon-arrow-right"></span></a>

                </div>
            </div>
        </div>
        <div style="width:940px; height:auto" class="copyright">
            <?php include("../common/footer.php") ?>
        </div>
    </div>
    
</body>