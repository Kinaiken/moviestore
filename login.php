<?php include('header.php'); ?>
<body>
<div class="container">
	<div class="container_wrap">
		<?php include('menu.php'); ?>
		<div class="content">
			<div class="register">
			<div class="col-md-6 login-left">
				<h3>Шинэ хэрэглэгч</h3>
				<p>Хэрвээ та бүртгэлгүй бол шинээр бүртгэл үүсгэж манай сайтыг ашиглах боломжтой.</p>
				<a class="acount-btn" href="register.php">Бүртгэл үүсгэх</a>
			</div>
			<div class="col-md-6 login-right">
				<h3>Бүртгэлтэй хэрэглэгч</h3>
				<p>Хэрэв та манай сайтад бүртгэлтэй бол шууд нэвтэрч болно.</p>
				<form>
					<div>
						<span>Нэвтрэх нэр<label>*</label></span>
						<input type="text"> 
					</div>
					<div>
						<span>Нууц үг<label>*</label></span>
						<input type="password"> 
					</div>
					<a class="forgot" href="#">Нууц үгээ мартсан уу?</a>
					<input type="submit" value="Нэвтрэх">
				</form>
			</div>	
			<div class="clearfix"> </div>
			</div>
		</div>
    </div>
</div>
<?php include('footer.php') ?>	
</body>
</html>