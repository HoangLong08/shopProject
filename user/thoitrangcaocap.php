<?php
$title = 'trang chủ';
$pathFileStyle = "../filleCss/styleThoiTrangCaoCap.css";
require '../comom/header.php';
?>
	<main class="main">
		<section>
		<div class="title-new-product">
				<div class="left-new-product">
					SẢN PHÂM NỔI BẬT
				</div>
				<div class="left-new-product">
					<a href="#">Xem tất cả</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12 col-12">
					<div class="card">
						<div class="image">
							<img class="card-img-top" src="https://storage.googleapis.com/cdn.nhanh.vn/store2/69300/bn/sb_1586790675_105.jpg" alt="Card image">
							<div class="hover">
								<button class="btn btn-primary">xem thêm</button>
								<button class="btn btn-primary">thêm vào giỏ</button>
							</div>
						</div>
						<div class="card-body">
							<p class="card-text text-left border-bottom">Aó khoác kaki be</p>
							<p class="card-text text-right"> 120.000</p>
							<div class="d-flex justify-content-between mt-2">
								<button class="btn btn-primary">
									Mua ngay
								</button>
								<button class="btn btn-primary">
									<i class="fas fa-heart"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php require '../comom/footer.php' ?>

<script src="../filejs/jsFile.js"></script>
</body>

</html>