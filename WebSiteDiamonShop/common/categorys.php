<div id="sidebar" class="span3">
	<div class="well well-small">
		<ul class="nav nav-list">
			<?php foreach ($categorys as $item) { ?>
				<li><a onclick="window.location.href='../web/productscategory.php?id_category=<?php echo $item['id']; ?>'"><span class="icon-circle-blank"></span><?php echo $item['name'] ?></a></li>
			<?php } ?>
			<li style="border: 0">&nbsp;</li>
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
				<a class="zoomTool" href="#" title="add to cart"><span class="icon-search"></span> QUICK
					VIEW</a> <img src="../template/assets/user/img/bootstrap-ecommerce-templates.png" alt="bootstrap ecommerce templates">
				<div class="caption">
					<h4>
						<a class="defaultBtn" href="#">VIEW</a> <span class="pull-right">$22.00</span>
					</h4>
				</div>
			</div>
		</li>
		<li style="border: 0">&nbsp;</li>
		<li>
			<div class="thumbnail">
				<a class="zoomTool" href="#" title="add to cart"><span class="icon-search"></span> QUICK
					VIEW</a> <img src="../template/assets/user/img/shopping-cart-template.png" alt="shopping cart template">
				<div class="caption">
					<h4>
						<a class="defaultBtn" href="#">VIEW</a> <span class="pull-right">$22.00</span>
					</h4>
				</div>
			</div>
		</li>
		<li style="border: 0">&nbsp;</li>
		<li>
			<div class="thumbnail">
				<a class="zoomTool" href="#" title="add to cart"><span class="icon-search"></span> QUICK
					VIEW</a> <img src="../template/assets/user/img/bootstrap-template.png" alt="bootstrap template">
				<div class="caption">
					<h4>
						<a class="defaultBtn" href="#">VIEW</a> <span class="pull-right">$22.00</span>
					</h4>
				</div>
			</div>
		</li>
	</ul>
</div>