<?php
	require("../connectDB/connectDB.php");

	$products = getAllProducts();
	$slides = getAllSlide();
	$categorys = getAllCategorys();
	disconnect_db();

?>

<title>Trang chủ</title>
<style>
	#img {
		width: 207px;
		height: 250px;
	}
</style>

<body>

	<!-- 
Body Section 
-->
	<div class="row">
		<div id="sidebar" class="span3">
			<div class="well well-small">
				<ul class="nav nav-list">
					<?php foreach ($categorys as $item) { ?>
						<li><a href="#"><span class="icon-circle-blank"></span><?php echo $item['name'] ?></a></li>
					<?php } ?>
					<li style="border: 0">&nbsp;</li>
					<li><a class="totalInCart" href="cart.html"><strong>Đã
								mua <span class="badge badge-warning pull-right" style="line-height: 18px;">đ</span>
							</strong></a></li>
				</ul>
			</div>

			<div class="well well-small alert alert-warning cntr">
				<h2>50% Discount</h2>
				<p>
					only valid for online order. <br> <br> <a class="defaultBtn" href="#">Click here </a>
				</p>
			</div>
			<div class="well well-small">
				<a href="#"><img src="../template/assets/user/img/paypal.jpg" alt="payment method paypal"></a>
			</div>

			<a class="shopBtn btn-block" href="#">Upcoming products <br>
				<small>Click to view</small></a> <br> <br>
			<ul class="nav nav-list promowrapper">
				<li>
					<div class="thumbnail">
						<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK
							VIEW</a> <img src="../template/assets/user/img/bootstrap-ecommerce-templates.png" alt="bootstrap ecommerce templates">
						<div class="caption">
							<h4>
								<a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span>
							</h4>
						</div>
					</div>
				</li>
				<li style="border: 0">&nbsp;</li>
				<li>
					<div class="thumbnail">
						<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK
							VIEW</a> <img src="../template/assets/user/img/shopping-cart-template.png" alt="shopping cart template">
						<div class="caption">
							<h4>
								<a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span>
							</h4>
						</div>
					</div>
				</li>
				<li style="border: 0">&nbsp;</li>
				<li>
					<div class="thumbnail">
						<a class="zoomTool" href="product_details.html" title="add to cart"><span class="icon-search"></span> QUICK
							VIEW</a> <img src="../template/assets/user/img/bootstrap-template.png" alt="bootstrap template">
						<div class="caption">
							<h4>
								<a class="defaultBtn" href="product_details.html">VIEW</a> <span class="pull-right">$22.00</span>
							</h4>
						</div>
					</div>
				</li>
			</ul>

		</div>
		<div class="span9">
			<div class="well np">
				<div id="myCarousel" class="carousel slide homCar">
					<div class="carousel-inner">
						<?php foreach ($slides as $i => $item) { 
							if($i == 0){
								echo "<div class='item active'>";
							}else{
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
				<h3>
					<a class="btn btn-mini pull-right" href="products.html" title="View more">VIew More<span class="icon-plus"></span></a> Sản
					phẩm nổi bật
				</h3>
				<hr class="soften" />
				<div class="row-fluid">
					<?php if (count($products) > 0) { ?>
						<ul class="thumbnails">
							<?php foreach ($products as $item) {
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
			<div class="well well-small">
				<a class="btn btn-mini pull-right" href="#">Xem thêm <span class="icon-plus"></span></a> Tất cả sản phẩm
			</div>

		</div>
</body>