<title>Trang chủ</title>
<!-- Favicons -->
<link rel="shortcut icon"
	href="../template/assets/user/ico/favicon.ico">
<style>
    #img {
        width: 207px;
        height: 250px;
    }
</style>

<body>
    <?php
    include("../bootstrap/bootstrap.php");
    require("../connectDB/registerDB.php");
    if(isset($_GET['keyword'])){
        $search = $_GET['keyword'];
        $arrSearch = Search($search);
    }
    $slides = getAllSlide();
    $categorys = getAllCategorys();
    disconnect_db();

    ?>

    <!-- 
Body Section 
-->
    <div class="container">
    <div id="gototop"></div>
    <?php include("../common/header.php"); ?>
	<?php include("../common/navigation.php"); ?>
        <div class="row">
            <?php include("../common/categorys.php"); ?>
            <div class="span9">
                <div class="well np">
                    <div id="myCarousel" class="carousel slide homCar">
                        <div class="carousel-inner">
                            <?php foreach ($slides as $i => $item) {
                                if ($i == 0) {
                                    echo "<div class='item active'>";
                                } else {
                                    echo "<div class='item'>";
                                }
                            ?>
                                <img style="width: 100%" src="../template/assets/user/img/slides/<?php echo $item['img'] ?>" alt="bootstrap ecommerce templates">
                                <div class="carousel-caption">
                                    <h4><?php echo $item['caption'] ?></h4>
                                    <br>
                                    <p>
                                        <span><?php echo $item['content'] ?></span>
                                    </p>
                                </div>
                        </div>
                    <?php } ?>

                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a> <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
                </div>
            </div>
            <!--
		Featured Products
		-->
            <div class="well well-small">
                <h3>Sản phẩm nổi bật
                </h3>
                <hr class="soften" />
                <div class="row-fluid">
                    <?php if (count($arrSearch) > 0) { ?>
                        <ul class="thumbnails">
                            <?php foreach ($arrSearch as $item) {
                                echo "<li class='span4' style='margin-left:6px;width:217px; height:377px' >"; ?>
                                <!-- <li class="span4"> -->
                                <div class="thumbnail">
                                    <a class="zoomTool" style="cursor:pointer" onclick="window.location.href='../web/detail.php?id=<?php echo $item['id']; ?>'"><span class="icon-search"></span>
                                        QUICK VIEW</a> <a style="cursor:pointer" onclick="window.location.href='../web/detail.php?id=<?php echo $item['id']; ?>'"><img id="img" src="../template/assets/user/img/<?php echo $item['img'] ?>" alt=""></a>
                                    <div class="caption">
                                        <h5><?php echo $item['name'] ?></h5>
                                        <h4>
                                            <a class="defaultBtn" href="product_details.html" title="Click to view"><span class="icon-zoom-in"></span></a>
                                            <a class="shopBtn" href="#" title="add to cart"><span class="icon-plus"></span></a> <span class="pull-right">đ
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                                </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>
            <hr>
        </div>
        <div style="width:940px; height:auto" class="copyright">
            <?php include("../common/footer.php") ?>
            </div>
    </div>
</body>