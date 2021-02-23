<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php echo $title ?></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="../filleCss/style.css">
	<link rel="stylesheet" href=<?php echo $pathFileStyle ?>>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<header class="header">
		<div class="container">
			<div class="left-container">
				<h3>
					LOGO
				</h3>
			</div>
			<div class="menu-bar">
				<button class="btn" id="icon-bar">
					<i class="fas fa-bars"></i>
				</button>
			</div>
			<div class="mid-container">
				<ul class="main-menu" id="myMainMenu">
					<li class="main-menu-li "><a class="menu" href="index.php">Trang chủ</a></li>
					<li class="main-menu-li">
						<a class="menu" href="thoitrangcaocap.php">Thời trang cao cấp</a>
						<ul class="sub-menu">
							<div class="left-sub-menu">
								<div class="sub-menu-image">
									<img src="https://storage.googleapis.com/cdn.nhanh.vn/store2/69300/menu/19259_1587110080_tho%CC%9B%CC%80i%20trang%20cao%20ca%CC%82%CC%81p%20mobile.jpg" alt="">
								</div>
							</div>
							<div class="right-sub-menu">
								<div class="row">
									<div class="col-md-4 col-12">
										<li><a href="">Váy / Dresses</a></li>
										<li><a href="">Áo mùa hè / Summer Tops</a></li>
										<li><a href="">Đồ len/ Knitwears</a></li>
									</div>
									<div class="col-md-4 col-12">
										<li><a href="">Quần / Pants</a></li>
										<li><a href="">Đồ thể thao/ Sport</a></li>
									</div>
									<div class="col-md-4 col-12">
										<li><a href="">Áo mùa đông/ Winter Tops</a></li>
										<li><a href="">Giày / Shoes</a></li>
									</div>
								</div>
							</div>
						</ul>
					</li>
					<li class="main-menu-li">
						<a class="menu" href="#">Thời trang nữ</a>
						<ul class="sub-menu">
							<div class="left-sub-menu">
								<div class="sub-menu-image">
									<img src="https://storage.googleapis.com/cdn.nhanh.vn/store2/69300/menu/19259_1587110080_tho%CC%9B%CC%80i%20trang%20cao%20ca%CC%82%CC%81p%20mobile.jpg" alt="">
								</div>
							</div>
							<div class="right-sub-menu">
								<div class="row">
									<div class="col-md-4 col-12">
										<li><a href="">Váy / Dresses</a></li>
										<li><a href="">Áo mùa hè / Summer Tops</a></li>
										<li><a href="">Đồ len/ Knitwears</a></li>
									</div>
									<div class="col-md-4 col-12">
										<li><a href="">Quần / Pants</a></li>
										<li><a href="">Đồ thể thao/ Sport</a></li>
									</div>
									<div class="col-md-4 col-12">
										<li><a href="">Áo mùa đông/ Winter Tops</a></li>
										<li><a href="">Giày / Shoes</a></li>
									</div>
								</div>
							</div>
						</ul>
					</li>
					<li class="main-menu-li">
						<a class="menu" href="#">Thời trang trẻ em</a>
						<ul class="sub-menu">
							<div class="left-sub-menu">
								<div class="sub-menu-image">
									<img src="https://storage.googleapis.com/cdn.nhanh.vn/store2/69300/menu/19259_1587110080_tho%CC%9B%CC%80i%20trang%20cao%20ca%CC%82%CC%81p%20mobile.jpg" alt="">
								</div>
							</div>
							<div class="right-sub-menu">
								<div class="row">
									<div class="col-md-4 col-12">
										<li><a href="">Đồ sơ sinh / New born</a></li>
									</div>
									<div class="col-md-4 col-12">
										<li><a href="">Trẻ em nam / Boy</a></li>
									</div>
									<div class="col-md-4 col-12">
										<li><a href="">Trẻ em nữ / Girl</a></li>
									</div>
								</div>
							</div>
						</ul>
					</li>
					<li class="main-menu-li" >
						<a class="menu" onclick="addOutline(this)" href="news.php">Tin tức</a>
					</li>
					<div class="menu-btn-moblie-s mb-3">
						<a href="login.php" class="btn-user-mobile">Đăng nhâp</a>
						<a href="resgister.php" class="btn-user-mobile">Đăng kí</a>
					</div>
				</ul>
				<div class="menu-icon">
					<i class="fas fa-search"></i>
					<div class="cart">
						<i class="far fa-shopping-cart"></i>
						<div class="number-cart">
							1
						</div>
					</div>
					<div class="heart">
						<i class="far fa-heart"></i>
						<div class="number-heart">
							1
						</div>
					</div>
					
				</div>
			</div>
			<div class="right-container">
				<div class="menu-btn">
					<a href="login.php" class="btn-user">Đăng nhâp</a>
					<a href="resgister.php"class="btn-user">Đăng kí</a>
				</div>
			</div>
		</div>
	</header>