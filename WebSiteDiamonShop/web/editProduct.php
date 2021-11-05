<head>
	<meta charset="UTF-8">
	<title>Sửa sản phẩm</title>
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
	include("../connectDB/productDB.php");
	$categorys = getAllCategorys();
    $product_id = isset($_GET['id_product']) ? $_GET['id_product'] : "0";	//id là id của url
	$product = getProduct($product_id);
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
					<li class="active">Chỉnh sửa sản phẩm</li>
				</ul>
				<div class="well well-small">
					<div class="row-fluid">
						<div class="span7">
							<h3>Sản phẩm chỉnh sửa</h3>
							<hr class="soft" />

							<form class="form-horizontal qtyFrm" method="GET" action="../connectDB/productDB.php">
                                <div class="control-group">
									<label class="control-label"><span>ID</span></label>
									<div class="controls">
										<input style="height: 30px;" type="text" name="id_product" value="<?php echo $product['id']; ?>" readonly >
									</div>
								</div>

								<div class="control-group">
									<label class="control-label"><span>Thể loại</span></label>
									<div class="controls">
                                    <select name="id_category" class="span11">
                                        <option value="1">Đồng hồ</option>
                                        <option value="2">Vòng tay</option>
                                        <option value="3">Nhẫn</option>
                                        <option value="4">Dây chuyền</option>
                                    </select>
									</div>
								</div>

								<div class="control-group">
								    <label class="control-label"><span>Kích cỡ</span></label>
									<div class="controls">
                                        <select name="sizeProduct" class="span11">
                                            <option value="X">X</option>
                                            <option value="L">L</option>
                                            <option value="M">M</option>
                                            <option value="X,L,M">X,L,M</option>
                                        </select>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label"><span>Tên</span></label>
									<div class="controls">
										<input style="height: 30px;" type="text" name="nameProduct" value="<?php echo $product['name'] ?>">
									</div>
								</div>
                                <div class="control-group">
									<label class="control-label"><span>Hình ảnh</span></label>
									<div class="controls">
										<input style="height: 30px;" type="text" name="imgProduct" value="<?php echo $product['img'] ?>">
									</div>
								</div>
                                <div class="control-group">
									<label class="control-label"><span>Giá</span></label>
									<div class="controls">
										<input style="height: 30px;" type="text" name="priceProduct" value="<?php echo $product['price'] ?>">
									</div>
								</div>
                                <div class="control-group">
									<label class="control-label"><span>Tiêu đề</span></label>
									<div class="controls">
										<input style="height: 30px;" type="text" name="titleProduct" value="<?php echo $product['title'] ?>">
									</div>
								</div>
                                <div class="control-group">
									<label class="control-label"><span>Nội dung</span></label>
									<div class="controls">
										<input style="height: 30px;" type="text" name="detailProduct" value="<?php echo $product['details'] ?>">
									</div>
								</div>
                                <div class="control-group">
									<label class="control-label"><span>Ngày nhập khẩu</span></label>
									<div class="controls">
                                        <?php $date = date('Y-m-d H:i:s')?>
										<input style="height: 30px;" type="text" name="dateProduct" value="<?php echo $date; ?>" readonly>
									</div>
								</div>
                                <div class="control-group">
									<label class="control-label"><span>Ngày cập nhật</span></label>
									<div class="controls">
                                        <?php $date = date('Y-m-d H:i:s')?>
										<input style="height: 30px;" type="text" name="dateProduct" value="<?php echo $date; ?>" readonly>
									</div>
								</div>
								<button type="submit" name="editProduct" class="shopBtn"><span class="icon-shopping-cart"></span> Chỉnh sửa</button>
							</form>
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