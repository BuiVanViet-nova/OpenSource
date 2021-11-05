
<title>Trang chủ</title>

<style>
	
	#img {
		width: 207px;
		height: 250px;
	}
	.pagination {
	display: flex;
	justify-content: center;
	}

	.pagination a {
		color: black;
		float: left;
		padding: 8px 16px;
		text-decoration: none;
		transition: background-color .3s;
		border: 1px solid #ddd;
	}

	.pagination a.active {
		background-color: #4CAF50;
		color: white;
		border: 1px solid #4CAF50;
	}

	.pagination a:hover:not(.active) {
		background-color: #ddd;
	}
</style>
<!-- Favicons -->
<link rel="shortcut icon" href="../template/assets/user/ico/favicon.ico">

<body>

	<!-- 
Body Section 
-->
	<div class="row">
		<?php include("../common/categorys.php"); ?>
		<div class="span9">
			<div class="well np">
				<div id="myCarousel" class="carousel slide homCar">
					<div class="carousel-inner">
						<?php foreach ($slides as $i => $item) {
							if ($i == 0) {
								echo "<div class='item active'>";
							} else {
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
			<h3>Sản phẩm nổi bật
			</h3>
			<hr class="soften" />
			<div class="row-fluid">
				<?php
					connect_db();
					global $conn;
					$rowsPerPage=9; //số mẩu tin trên mỗi trang
							if (!isset($_GET['page']))
							{ 
								$_GET['page'] = 1;
							}
						//vị trí của mẩu tin đầu tiên trên mỗi trang
						$offset =(($_GET['page']-1)*$rowsPerPage);
						// Chuan bi cau truy van & Thuc thi cau truy van
						$query = "SELECT * FROM products LIMIT $offset ,$rowsPerPage";
						$result = $conn->query($query);
						$products1 = [];
						if($result){
							//lặp từng kết quả sql trả về
							while($row = $result->fetch_assoc()){
								//đưa dữ liệu sản phẩm vào mảng products
								$products1[] = $row;
							}
						}
						$re = mysqli_query($conn, 'select * from products');
						//tổng số mẩu tin cần hiển thị
						$numRows = mysqli_num_rows($re);
						//tổng số trang
						$maxPage = floor($numRows/$rowsPerPage) + 1;
				?>
				<?php if (count($products1) > 0) { ?>
					<ul class="thumbnails">
						<?php foreach ($products1 as $item) {
							echo "<li class='span4' style='margin-left:6px;width:220px; height:377px' >"; ?>
							<!-- <li class="span4"> -->
							<div class="thumbnail">
								<a class="zoomTool" style="cursor:pointer" onclick="window.location.href='../web/detail.php?id_product=<?php echo $item['id']; ?>'"><span class="icon-search"></span>
									QUICK VIEW</a> <a style="cursor:pointer" onclick="window.location.href='../web/detail.php?id_product=<?php echo $item['id']; ?>'"><img id="img" src="../template/assets/user/img/<?php echo $item['img'] ?>" alt=""></a>
								<div class="caption">
									<h5><?php echo $item['name'] ?></h5>
									<h4>
										<a class="defaultBtn" href="../template/assets/user/img/<?php echo $item['img'] ?>" title="Click to view"><span style="font-size: 16px;" class="icon-zoom-in"></span></a>
										<a class="shopBtn" href="../connectDB/cartDB.php?id=<?php echo $item['id']; ?>" title="add to cart"><span class="icon-plus"></span></a> 
										<?php if(isset($_SESSION['admin'])) { ?>
										<a onclick="window.location.href='../web/editProduct.php?id_product=<?php echo $item['id']; ?>'" style="width: 20px;height: 32px; border-radius:2px" class="btn btn-mini btn-danger edit-cart" title="edit" type="button"> <span style="line-height: 30px;" class="icon-edit icon-2x"></span></a>
										<?php } ?>
										<span class="pull-right"> <?php echo number_format($item['price']); ?>đ
									</h4>
								</div>
							</div>
							</li>
						<?php } ?>
					</ul>
					<ul class="pagination"><?php //tạo link tương ứng tới các trang
						//gắn thêm nút Back
						
						if($_GET['page']>1)
						{
							
							echo "<a href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']-1).">Back</a>";}
							for ($i=1 ; $i<=$maxPage ; $i++) //tạo link tương ứng tới các trang
							{ 
								if ($i == $_GET['page'])
									echo "<b style='color: green'>Trang".$i."</b>"; //trang hiện tại sẽ được bôi đậm
								else {
									echo "<a href=" .$_SERVER['PHP_SELF']."?page=".$i.">".$i."</a> ";
									
								}
							}
							if($_GET['page']<$maxPage){
								//gắn thêm nút Next
								echo "<a href=". $_SERVER['PHP_SELF']."?page=".($_GET['page']+1).">Next</a>";
							}
							?>
							</ul>
				<?php } ?>
			</div>
		</div>
	</div>
</body>