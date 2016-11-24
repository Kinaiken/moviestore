<?php include('header.php'); ?>
<script src="js/jquery.validate.min.js"></script>
<script>  
$(function() {
	$("#register-form").validate({
		errorElement: 'span',
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },
		rules: {
			firstname: {
				required: true,
				minlength: 2
			},
			lastname: "required",
			username: {
				required: true,
				minlength: 3
			},
			email: {
				required: true,
				email: true
			},
			password: {
				required: true,
				minlength: 5
			},
			password_again: {
				equalTo: "#password"
			},
			agree: "required"
		},
		messages: {
			firstname: {
				required: "Нэрээ оруулна уу!",
				minlength: "Хамгийн багадаа 2н тэмдэгт байх ёстой!"
			},
			lastname: "Овогоо оруулна уу!",
			username: { 
				required: "Нэвтрэх нэрээ оруулна уу!",
				minlength: "Хамгийн багадаа 3н тэмдэгт байх ёстой!"
			},
			password: {
				required: "Нууц үгээ оруулна уу!",
				minlength: "Хамгийн багадаа 5н тэмдэгт байх ёстой!"
			},
			password_again: {
				equalTo: "Нууц үгээ давтан оруулна уу!"
			},
			email: {
				required: "Е-Шуудангаа оруулна уу!",
				email: "Таны е-шуудан буруу байна!"
			},
			agree: "Бидний нөхцөлийг хангана уу!"
		},
		submitHandler: function(form) {
			form.submit();
			return true;
		}
	});
});
</script>
<body>
<div class="container">
	<div class="container_wrap">
		<?php include('menu.php'); ?>
	    <div class="content">
      	    <div class="register">
				<form method="post" id="register-form">  
					<div class="register-top-grid">
						<h3>Хувийн мэдээлэл</h3>
						<div style="width:100%;">
							<div>
								<span>Нэр<label>*</label></span>
								<input type="text" id="firstname" name="firstname"> 
							</div>
							<div>
								<span>Овог<label>*</label></span>
								<input type="text" id="lastname" name="lastname"> 
							</div>
						</div>
						<div style="width:100%;">
							<div>
								 <span>Нэвтрэх нэр<label>*</label></span>
								 <input type="text" id="username" name="username"> 
							</div>
							<div>
								 <span>Е-Шуудан<label>*</label></span>
								 <input type="text" id="email" name="email"> 
							</div>
						</div>
						<div class="clearfix"> </div>
						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Мэдээлэл авч байх</label>
						</a>
					</div>
				    <div class="register-bottom-grid">
						<h3>Нэвтрэх мэдээлэл</h3>
						<div style="width:100%;">
							<div>
								<span>Нууц үг<label>*</label></span>
								<input type="password" id="password" name="password">
							</div>
							<div>
								<span>Нууц үг давтах<label>*</label></span>
								<input type="password" id="password_again" name="password_again">
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				<div class="clearfix"> </div>
				<div class="register-but">
		
						<input type="submit" name="submit" value="Бүртгүүлэх">
						<div class="clearfix"> </div>
				</div>
				</form>	
				<?php 
					if(isset($_POST['submit'])) {
						$firstname = $_POST['firstname'];
						$lastname = $_POST['lastname'];
						$username = $_POST['username'];
						$email = $_POST['email'];
						$password = md5(md5($_POST['password']));
						
						$server = 'us-cdbr-iron-east-04.cleardb.net';
						$my_user = 'b1ad9fd1eb1578';
						$my_db = "heroku_4d723b66bdd7d40";
						$pass = "5d896294";
						
						$con = new mysqli($server, $my_user, $pass, $my_db);
						mysqli_set_charset($con, "utf8");
						if ($con->connect_error) {
							die("Connection failed: " . $con->connect_error);
						}
						$query="INSERT INTO `_User`(username, firstname, lastname, email, password) VALUES('$username', '$firstname', '$lastname', '$email', '$password')";
						if(!$result = $con->query($query)) {
							die('There was an error running the query [' . $db->error . ']');
							echo "<div class='error'>Уучлаарай бүртгэл амжилтгүй боллоо!!!!</div>";
						}
						else {
							echo "<div class='error'>Таны бүртгэл амжилттай боллоо! <a href='login.php' style='color:#df1f26;'>нэвтрэх</a></div>";
						}
						mysqli_close($con);
					}	
				?>				
			</div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>		
</body>
</html>