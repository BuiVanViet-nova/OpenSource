
<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="topNav">
			<div class="container">
				<div class="alignR">
					<div class="pull-left socialNw">
						<a href="#"><span class="icon-twitter"></span></a> <a href="#"><span
							class="icon-facebook"></span></a> <a href="#"><span
							class="icon-youtube"></span></a> <a href="#"><span
							class="icon-tumblr"></span></a>
					</div>
					<a class="active" href="../decorator/index.php"> <span class="icon-home"></span>
						Home
					</a>
					<?php if(isset($_SESSION['admin'])){ ?>
						<a href="#"><span class="icon-user"></span><?php echo $_SESSION['admin']['display_name']; ?></a>
						<a href="../connectDB/DeleteSession.php"><span class="icon-edit"></span>Đăng xuất</a>
						<a href="../web/register.php"><span class="icon-edit"></span>Đăng nhập</a>
					<?php } ?>

					<?php if(isset($_SESSION['username'])) { ?>
						<a href="#"><span class="icon-user"></span><?php echo $_SESSION["username"]["display_name"]; ?></a>
					
						<a href="../connectDB/DeleteSession.php"><span class="icon-edit"></span>Đăng xuất</a>
					<?php } ?>

					<?php if(!isset($_SESSION['username']) && !isset($_SESSION['admin'])) { ?>
						<a href="../web/register.php"><span class="icon-edit"></span>Đăng nhập</a>
					<?php }?>
					<a href="../web/contact.php"><span class="icon-envelope"></span>
						Liên hệ</a> <a href="../web/cart.php"><span
						class="icon-shopping-cart"></span> Giỏ hàng <span
						class="badge badge-warning"></span></a>
				</div>
			</div>
		</div>
	</div>

<header id="header">
	<div class="row">
		<div class="span4">
			<h1>
				<a class="logo" href="../decorator/index.php"><span>Twitter Bootstrap
						ecommerce template</span> <img
					src="../template/assets/user/img/logo-bootstrap-shoping-cart.png"
					alt="bootstrap sexy shop"> </a>
			</h1>
		</div>
		<div class="span4">
			<div class="offerNoteWrapper">
				<h1 class="dotmark">
					<i class="icon-cut"></i> Twitter Bootstrap shopping cart HTML
					template is available @ $14
				</h1>
			</div>
		</div>
		<div class="span4 alignR">
			<p>
				<br> <strong> Support (24/7) : 0800 1234 678 </strong><br>
				<br>
			</p>

			<span class="btn btn-mini"><span
				class="icon-shopping-cart"></span></span> <span
				class="btn btn-mini">$</span> <span class="btn btn-mini">&pound;</span>
			<span class="btn btn-mini">&euro;</span>
		</div>
	</div>
</header>
