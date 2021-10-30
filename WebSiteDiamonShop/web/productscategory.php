<head>
    <title>Sản phẩm</title>
    <style>
        #img {
            width: 207px;
            height: 250px;
        }
    </style>
</head>

<body>
    <?php include("../bootstrap/bootstrap.php");
    include("../connectDB/connectDB.php");
    $categorys = getAllCategorys();
    $productsByIDCategory = isset($_GET['id']) ? $_GET['id'] : "0";    //id là id của url
    $listProduct = getProductByIDCategory($productsByIDCategory);
    disconnect_db();
    ?>
    <div class="container">
        <div id="gototop"></div>
        <?php include("../common/header.php");
        ?>
        <div class="row">
            <?php include("../common/categorys.php"); ?>
            <div class="row">
                <span style="margin-left: 25px;">Danh sách sản phẩm</span> <select class="pull-right">
                    <option>A-Z</option>
                    <option>Cao - thấp</option>
                </select>
                <br>
                <br>

                <?php if (count($listProduct) > 0) { ?>
                    <div class="row-fluid">
                        <ul class="thumbnails">
                            <?php foreach ($listProduct as $item) {
                                echo "<li class='span4' style='margin-left:20px;width:217px; height:377px' >"; ?>
                                <div class="thumbnail">
                                    <a class="zoomTool" style="cursor:pointer" onclick="window.location.href='../web/detail.php?id=<?php echo $item['id']; ?>'" title="add to cart"><span class="icon-search"></span> QUICK
                                        VIEW</a> <a href="#"><img onclick="window.location.href='../web/detail.php?id=<?php echo $item['id']; ?>'" id="img" src="../template/assets/user/img/<?php echo $item['img'] ?>" alt=""></a>
                                    <div class="caption">
                                        <h5><?php echo $item['name'] ?></h5>
                                        <h4>
											<a class="defaultBtn" href="product_details.html" title="Click to view"><span class="icon-zoom-in"></span></a>
											<a class="shopBtn" href="#" title="add to cart"><span class="icon-plus" style="margin-top: 100px;"></span></a> <span class="pull-right">đ
											</span>
										</h4>
                                    </div>
                                </div>
                                </li>
                            <?php } ?>
                        <?php } ?>

                    </div>
            </div>
            <div style="width:940px; height:auto" class="copyright">
                <?php include("../common/footer.php") ?>
            </div>
        </div>
    </div>
</body>