<?php
$title = 'đăng nhập';
$pathFileStyle = "../filleCss/styleLogin.css";
require '../comom/header.php';
$emailValue    = "";
$passwordValue = "";
if(isset($_POST['submitLogin'])){
	$emailValue    = $_POST['exampleInputEmail'];
	$passwordValue = $_POST['exampleInputPassword']; // md5
	
	
}

?>
<main class="mainLogin">
	<div class="fromLogin">
		<div class="icon-user">
			<img src="../image/iconUser.png" alt="IconUser">
		</div>
		<form  method="POST">
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="text" class="form-control" name="exampleInputEmail" id="exampleInputEmail" placeholder="Enter email">
				<small id="emailHelp" class="form-text"><?php echo $emailValue; ?></small>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" name="exampleInputPassword" id="exampleInputPassword" placeholder="Password">
				<small id="passwordHelp" class="form-text"><?php echo $passwordValue; ?></small>
			</div>
			<div class="btn-login text-center mb-4">
				<button type="submit" class="btn btn-primary" name="submitLogin" id="submitLogin">Đăng nhập</button>
			</div>
			<div class="btn-login text-center d-flex justify-content-between">
				<div>
					<a href="resgister.php">Đăng ký tài khoản</a>
				</div>
				<div>
					<a href="forget.php">Quên mật khẩu</a>
				</div>
			</div>
		</form>
	</div>
</main>
<?php require '../comom/footer.php' ?>

<script src="../filejs/jsFile.js"></script>
</body>

</html>