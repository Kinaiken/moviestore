<?php include('header.php'); ?>
<body>
<div class="container">
	<div class="container_wrap">
		<?php include('menu.php'); ?>
	     <div class="content">
      	    <div class="register">
				<form> 
					<div class="register-top-grid">
						<h3>Хувийн мэдээлэл</h3>
						<div>
							<span>Нэр<label>*</label></span>
							<input type="text"> 
						</div>
						<div>
							<span>Овог<label>*</label></span>
							<input type="text"> 
						</div>
						<div>
							 <span>Нэвтрэх нэр<label>*</label></span>
							 <input type="text"> 
						</div>
						<div>
							 <span>Е-Шуудан<label>*</label></span>
							 <input type="text"> 
						</div>
						<div class="clearfix"> </div>
						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Мэдээлэл авч байх</label>
						</a>
					</div>
				    <div class="register-bottom-grid">
						<h3>Нэвтрэх мэдээлэл</h3>
						<div>
							<span>Нууц үг<label>*</label></span>
							<input type="password">
						</div>
						<div>
							<span>Нууц үг давтах<label>*</label></span>
							<input type="password">
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
				<div class="clearfix"> </div>
				<div class="register-but">
					<form>
						<input type="submit" value="Бүртгүүлэх">
						<div class="clearfix"> </div>
					</form>
				</div>
		   </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>		
</body>
</html>