<title>So sánh</title>
<!-- Favicons -->
<link rel="shortcut icon" href="../template/assets/user/ico/favicon.ico">
<!-- 
Body Section 
-->

<body>
    <?php $page= "compair"; ?>
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
            <div class="span9">
                <ul class="breadcrumb">
                    <li><a href="../decorator/index.php">Trang chủ</a> <span class="divider">/</span></li>
                    <li class="active">So sánh</li>
                </ul>
                <div class="well well-small">
                    <h3> So sánh sản phẩm <small class="pull-right"> 2 sản phẩm được so sánh </small></h3>

                    <table id="compairTbl" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tính năng</th>
                                <th>Product1 name </th>
                                <th>Product2 name </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <p class="justify">
                                        Ngày nay, ngành công nghiệp đồ trang sức là một trong những lĩnh vực kinh doanh thành công nhất.
                                        Chúng tôi luôn cập nhật các xu hướng thời trang mới nhất - đó là lý do tại sao
                                        hàng hóa rất được ưa chuộng và chúng tôi có một lượng lớn khách hàng thân thiết trên khắp cả nước.
                                    </p>
                                    <img src="../template/assets/user/img/d.jpg" alt="" />
                                    <form class="form-horizontal qtyFrm">
                                        <h3> $140.00</h3><br />
                                        <div class="btn-group">
                                            <a href="product_details.html" class="defaultBtn btn-large"><span class=" icon-shopping-cart"></span> Add to cart</a>
                                            <a href="product_details.html" class="shopBtn btn-large">VIEW</a>
                                        </div>
                                    </form>
                                </td>
                                <td>
                                    <p class="justify">
                                        Ngày nay, ngành công nghiệp đồ trang sức là một trong những lĩnh vực kinh doanh thành công nhất.
                                        Chúng tôi luôn cập nhật các xu hướng thời trang mới nhất - đó là lý do tại sao
                                        hàng hóa rất được ưa chuộng và chúng tôi có một lượng lớn khách hàng thân thiết trên khắp cả nước.
                                    </p>
                                    <img src="../template/assets/user/img/e.jpg" alt="" />

                                    <form class="form-horizontal qtyFrm">
                                        <h3> $140.00</h3>
                                        <br />
                                        <div class="btn-group">
                                            <a href="product_details.html" class="defaultBtn btn-large"><span class=" icon-shopping-cart"></span> Add to cart</a>
                                            <a href="product_details.html" class="shopBtn btn-large">VIEW</a>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>Height</td>
                                <td>5"</td>
                                <td>15"</td>
                            </tr>
                            <tr>
                                <td>Deepth</td>
                                <td>5"</td>
                                <td>5"</td>
                            </tr>
                            <tr>
                                <td>Size</td>
                                <td>XXL</td>
                                <td>XL</td>
                            </tr>
                            <tr>
                                <td>Width</td>
                                <td>6.5"</td>
                                <td>6"</td>
                            </tr>
                            <tr>
                                <td>Weight</td>
                                <td>0.5kg</td>
                                <td>0.8kg</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="alignR"><a href="../decorator/index.php" class="shopBtn btn-large">Trở về trang chủ</a></div>
                </div>

            </div>
        </div>
        <div style="width:940px; height:auto" class="copyright">
            <?php include("../common/footer.php") ?>
        </div>
    </div>

</body>