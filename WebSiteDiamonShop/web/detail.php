<head>
	<meta charset="UTF-8">
	<title>Chi tiết sản phẩm</title>
	<style type="text/css">
		.product-content {
			overflow-x: hidden;
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
	$product_id = isset($_GET['id_product']) ? $_GET['id_product'] : "0";	//id là id của url
	$product = getProduct($product_id);
	foreach ($product as $index => $item) {
		if ($index == "id_category")
			$productConn = getProductsConnect($item);
	}
	disconnect_db();
	?>
	<div class="container">
		<div id="gototop"></div>
		<?php include("../common/header.php"); ?>
		<?php include("../common/navigation.php"); ?>
		<!-- 
Body Section 
-->

		<div class="row product-content">
			<?php include("../common/categorys.php"); ?>
			<div class="span9">
				<ul class="breadcrumb">
					<li><a href="../decorator/index.php">Trang chủ</a> <span class="divider">/</span></li>
					<li class="active">Chi tiết sản phẩm</li>
				</ul>
				<div class="well well-small">
					<div class="row-fluid">
						<div class="span5">
							<div id="myCarousel" class="carousel slide cntr">
								<div class="carousel-inner">

									<div class="item active">
										<a href="#"> <img src="../template/assets/user/img/<?php echo $product['img']; ?>" alt="" style="width: 100%"></a>
									</div>

								</div>
								<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a> <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
							</div>
						</div>
						<div class="span7">
							<h3><?php echo $product['name'] ?></h3>
							<hr class="soft" />

							<form class="form-horizontal qtyFrm" method="get" action="">
								<div class="control-group">
									<label class="control-label">Số lượng</span></label>
									<div class="controls">
										<input type="number" min="1" value="1" class="span6">
									</div>
								</div>

								<div class="control-group">
								<label class="control-label"><span>Ngày nhập</span></label>
									<div class="controls">
										<input type="text" value="<?php echo $product['created_date'] ?>" readonly>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label"><span>Giá</span></label>
									<div class="controls">
										<input type="text" value="<?php echo $product['price'] ?>" readonly>
									</div>
								</div>
								<h4><?php echo $product['title'] ?></h4>
								<a type="button" href="../connectDB/cartDB.php?id=<?php echo $product['id']; ?>" class="shopBtn">
									<span class=" icon-shopping-cart"></span> Thêm giỏ hàng
								</a>
							</form>
						</div>
					</div>
					<hr class="softn clr" />


					<ul id="productDetail" class="nav nav-tabs">
						<li class="active"><a href="#home" data-toggle="tab">Chi
								tiết sản phẩm </a></li>
						<li class=""><a href="#profile" data-toggle="tab">Sản phẩm
								liên quan</a></li>

					</ul>
					<div id="myTabContent" class="tab-content tabWrapper">
						<div class="tab-pane fade active in" id="home">
							<?php echo $product['details'] ?></div>
						<div class="tab-pane fade" id="profile">
							<?php foreach ($productConn as $item) { ?>
								<div class="row-fluid">
									<div class="span2">
										<img src="../template/assets/user/img/<?php echo $item['img'] ?>" alt="">
									</div>
									<div class="span6">
										<h5><?php echo $item['name'] ?></h5>
										<p><?php echo $item['title'] ?></p>
									</div>
									<div class="span4 alignR">
										<form class="form-horizontal qtyFrm">
											<h3>
												<?php echo $item['price'] ?>đ
											</h3>

											<div class="btn-group">
												<a href="cart.php?id=<?php echo $item['id']; ?>" class="defaultBtn"><span class=" icon-shopping-cart"></span> Thêm giỏ hàng</a>
												<a style="cursor:pointer" href="detail.php?id_product=<?php echo $item['id']; ?>" class="shopBtn">Chi tiết</a>
											</div>
										</form>
									</div>
								</div>
								<hr class="soft" />
							<?php } ?>

						</div>

					</div>

				</div>
			</div>
		</div>
		<!-- Body wrapper -->
		<div style="width:940px; height:auto" class="copyright">
			<?php include("../common/footer.php") ?>
		</div>
	</div>
</body>