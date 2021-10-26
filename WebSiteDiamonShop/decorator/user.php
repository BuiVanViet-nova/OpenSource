<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Trang chủ</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Bootstrap styles -->
<link href="../template/assets/user/css/bootstrap.css"
	rel="stylesheet" />
<!-- Customize styles -->
<link href="../template/assets/user/style.css"
	rel="stylesheet" />
<!-- font awesome styles -->
<link
	href="../template/assets/user/font-awesome/css/font-awesome.css"
	rel="stylesheet">

<!-- Favicons -->
<link rel="shortcut icon"
	href="../template/assets/user/ico/favicon.ico">
</head>
<body>
	<!-- 
	Upper Header Section 
-->
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
					<a class="active" href="index.html"> <span class="icon-home"></span>
						Home
					</a>
					<a href="#"><span class="icon-user"></span>TÊN NGƯỜI DÙNG</a>
					<a href="../dang-xuat'/>"><span class="icon-edit"></span>Đăng
							xuất</a>
					<a href="#"><span class="icon-edit"></span>Đăng
							ký</a>
					<a href="contact.html"><span class="icon-envelope"></span>
						Contact us</a> <a href="../gio-hang'/>"><span
						class="icon-shopping-cart"></span> (?)Sản phẩm - <span
						class="badge badge-warning"><fmt:formatNumber type="number"
								groupingUsed="true" value="" />đ</span></a>
				</div>
			</div>
		</div>
	</div>

	<!--
Lower Header Section 
-->
	<div class="container">
		<div id="gototop"></div>
        <?php include("../common/header.php") ?>

		<?php include("../web/index.php") ?>
	</div>

	<!-- /container -->

	<div class="copyright">
	<?php include("../common/footer.php") ?>
	</div>

	

	<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="../template/assets/user/js/jquery.js'/>"></script>
	<script
		src="../template/assets/user/js/bootstrap.min.js'/>"></script>
	<script
		src="../template/assets/user/js/jquery.easing-1.3.min.js'/>"></script>
	<script
		src="../template/assets/user/js/jquery.scrollTo-1.4.3.1-min.js'/>"></script>
	<script src="../template/assets/user/js/shop.js'/>"></script>
	

	
</body>
</html>