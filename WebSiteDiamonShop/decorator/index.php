<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Trang chủ</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon"
	href="../template/assets/user/ico/favicon.ico">
</head>
<body>
	<?php $page='index'; ?>
	<?php
	require("../connectDB/registerDB.php");
	
	
	$products = getAllProducts();
	$slides = getAllSlide();
	$categorys = getAllCategorys();
	disconnect_db();

	?>


	<?php include("../bootstrap/bootstrap.php"); ?>
	<!-- 
	Upper Header Section 
-->
	
	<!--
Lower Header Section 
-->
	<div class="container">
		<div id="gototop"></div>
        <?php include("../common/header.php") ?>
		<?php include("../common/navigation.php"); ?>

		<?php include("../web/content.php") ?>
	</div>

	<!-- /container -->

	
	<div style="width:940px; height:auto" class="copyright">
	<?php include("../common/footer.php") ?>
	</div>

	

	<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
	<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>