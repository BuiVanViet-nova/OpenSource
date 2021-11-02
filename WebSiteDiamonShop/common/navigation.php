<style>
	.search {
		border: 1px solid #CACACA;
		color: #777777;
	}
</style>
<!--
		Navigation Bar Section 
		-->
<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
			<a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
			</a>
			<div class="nav-collapse">
				<ul class="nav">
					<li class="active"><a href="../decorator/index.php">Trang chủ</a></li>
					<li><a href="https://github.com/BuiVanViet-nova/OpenSource/tree/master/BaitapThucHanh" target="_blank">Bài tập</a></li>
					<li><a href="../web/about_me.php">Thông tin cá nhân</a></li>
					<li><a href="../web/cart.php">Giỏ hàng</a></li>
					<li><a href="../web/contact.php">Liên hệ</a></li>
					<li><a href="../web/compair.php">So sánh</a></li>
				</ul>
				<form action="../web/search.php" method="GET" class="navbar-search pull-left">
					<input type="text" value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : ''; ?>" name="keyword" placeholder="Search" class="search-query span2">
					<input type="submit" name="search" value="Tìm kiếm" class="search" />
				</form>

			</div>
		</div>
	</div>
</div>