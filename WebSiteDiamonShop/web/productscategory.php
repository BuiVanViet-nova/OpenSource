<head>
    <title>Sản phẩm</title>
    <style>
        #img {
            width: 207px;
            height: 250px;
        }
        #defaultBtn{
            line-height: 100px;
        }
    </style>
    <!-- Favicons -->
    <link rel="shortcut icon"
	href="../template/assets/user/ico/favicon.ico">
</head>

<body>
    <?php include("../bootstrap/bootstrap.php");
    include("../connectDB/registerDB.php");
    $categorys = getAllCategorys();
    $productsByIDCategory = isset($_GET['id_category']) ? $_GET['id_category'] : "0";    //id là id của url
    $listProduct = getProductByIDCategory($productsByIDCategory);
    disconnect_db();
    ?>
    <div class="container">
        <div id="gototop"></div>
        <?php include("../common/header.php");?>
        <?php include("../common/navigation.php"); ?>
        <div class="row">
            <?php include("../common/categorys.php"); ?>
            <div class="row">
                <span style="margin-left: 25px;">Danh sách sản phẩm</span> <select class="pull-right">
                    <option>A-Z</option>
                    <option>Cao - thấp</option>
                </select>
                <br>
                <br>
                    <div class="row-fluid">
                    <?php if (count($listProduct) > 0) { ?>
                        <ul class="thumbnails">
                            <?php foreach ($listProduct as $item) {
                                echo "<li class='span4' style='margin-left:20px;width:220px; height:377px'>"; ?>
                                <div class="thumbnail">
                                    <a class="zoomTool" style="cursor:pointer" onclick="window.location.href='../web/detail.php?id_product=<?php echo $item['id']; ?>'" title="add to cart"><span class="icon-search"></span> QUICK
                                        VIEW</a> <a href="#"><img onclick="window.location.href='../web/detail.php?id_product=<?php echo $item['id']; ?>'" id="img" src="../template/assets/user/img/<?php echo $item['img'] ?>" alt=""></a>
                                    <div class="caption">
                                        <h5><?php echo $item['name'] ?></h5>
                                        <h4>
											<a class="defaultBtn" href="../template/assets/user/img/<?php echo $item['img'] ?>" title="Click to view"><span class="icon-zoom-in"></span></a>
											<a id="shopBtn" class="shopBtn" href="../connectDB/cartDB.php?id=<?php echo $item['id'] ?>" title="add to cart"><span class="icon-plus" style="margin-top: 100px;"></span></a> 
                                            <?php if(isset($_SESSION['admin'])) { ?>
										    <a style="width: 20px;height: 32px; border-radius:2px" class="btn btn-mini btn-danger edit-cart" title="edit" type="button"> <span style="line-height: 30px;" class="icon-edit icon-2x"></span></a>
										    <?php } ?>
                                            <span class="pull-right"><?php echo number_format($item['price']); ?>đ</span>
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