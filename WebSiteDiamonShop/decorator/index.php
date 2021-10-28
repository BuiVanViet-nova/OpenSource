<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Trang chủ</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
</head>
<body>
	<?php include("../bootstrap/bootstrap.php"); ?>
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

		<?php include("../web/content.php") ?>
	</div>

	<!-- /container -->

	<div class="copyright">
	<?php include("../common/footer.php") ?>
	</div>

	

	<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
	<!-- Placed at the end of the document so the pages load faster -->
	
	

	
</body>
</html>