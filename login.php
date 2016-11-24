<?php include('header.php'); 
$server = 'us-cdbr-iron-east-04.cleardb.net';
$my_user = 'b1ad9fd1eb1578';
$my_db = "heroku_4d723b66bdd7d40";
$pass = "5d896294";
$con = new mysqli($server, $my_user, $pass, $my_db);
mysqli_set_charset($con, "utf8");
if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}						
session_start();
error_reporting(0);
$_SESSION['user-id']=NULL;
?>
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
				<form method="POST">
					<div>
						<span>Нэвтрэх нэр<label>*</label></span>
						<input type="text" name="username"> 
					</div>
					<div>
						<span>Нууц үг<label>*</label></span>
						<input type="password" name="password"> 
					</div>
					<a class="forgot" href="#">Нууц үгээ мартсан уу?</a>
					<input type="submit" value="Нэвтрэх" name="login">
				</form>
				<?php
			    	if($_POST['login']) {
	        			$username=$_POST['username'];
			    		$password=md5(md5($_POST['password']));
			          	$query="SELECT * FROM `_User` WHERE username='".$username."' AND password='".$password."'";
						$result = $con->query($query);
						$row = $result->fetch_row();	
				        $_SESSION['user-id']=$row[0];			
				        if ($_SESSION['user-id']!=NULL) { 
							$parent = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
							$url = "Location: " .substr($parent, 0, strrpos($parent, '/')) ."/index.php";
							header($url);
				    	}
	                    else {
		       	?>
	            			<div class="error">Уучлаарай таны хаяг бүртгэлгүй байна!!!!</div>
		        <?php
	                	}
				    }
			    ?>
			</div>	
			<div class="clearfix"> </div>
			</div>
		</div>
    </div>
</div>
<?php include('footer.php') ?>	
</body>
</html>