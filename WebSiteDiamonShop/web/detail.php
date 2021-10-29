<head>
	<meta charset="UTF-8">
	<title>Chi tiết sản phẩm</title>
	<style type="text/css">
		.product-content {
			overflow-x: hidden;
		}
	</style>
</head>

<body>
	<?php include("../bootstrap/bootstrap.php");
		include("../connectDB/connectDB.php");
		$categorys = getAllCategorys();
		$product_id = isset( $_GET['id']) ? $_GET['id'] : "0";	//id là id của url
		$product = getProduct($product_id);
		disconnect_db();
	?>
	<div class="container">
		<div id="gototop"></div>
		<?php include("../common/header.php"); ?>
		<!-- 
Body Section 
-->

		<div class="row product-content">
		<?php include("../common/categorys.php"); ?>
			<div class="span9">
				<ul class="breadcrumb">
					<li><a href="index.html">Trang chủ</a> <span class="divider">/</span></li>
					<li><a href="products.html">Sản phẩm</a> <span class="divider">/</span></li>
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
									<label class="control-label"><span>Màu sắc</span></label>
									<div class="controls">
										<select class="span11">
											<option>Đỏ</option>
											<option>Đen</option>
											<option>Vàng</option>
											<option>Trắng</option>
										</select>
									</div>
								</div>
								<h4><?php echo $product['title'] ?></h4>
								<button type="submit" class="shopBtn">
									<span class=" icon-shopping-cart"></span> Thêm giỏ hàng
								</button>
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
							
							<div class="row-fluid">
								<div class="span2">
									<img src="../template/assets/user/img/${item.img }" alt="">
								</div>
								<div class="span6">
									<h5>${item.name }</h5>
									<p>${item.title }</p>
								</div>
								<div class="span4 alignR">
									<form class="form-horizontal qtyFrm">
										<h3>
											đ
										</h3>

										<div class="btn-group">
											<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a> <a href="product_details.html" class="shopBtn">VIEW</a>
										</div>
									</form>
								</div>
							</div>
							<hr class="soft" />


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