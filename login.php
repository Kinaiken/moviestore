<?php include('header.php'); 
$db=mysql_connect('us-cdbr-iron-east-04.cleardb.net','b1ad9fd1eb1578','5d896294');
if(!$db)  {
  die('Could not connect: '. mysql_error());
}
mysql_select_db("heroku_4d723b66bdd7d40", $db);
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
			    		$password=$_POST['password'];
			          	$query=mysql_query("SELECT * FROM `_User` WHERE username='".$username."' AND password='".$password."'");
				        $_SESSION['user-id']=mysql_fetch_assoc($query)['userId'];			
				        if ($_SESSION['user-id']!=NULL) { 
				        	header('location:/moviestore/index.php'); 
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