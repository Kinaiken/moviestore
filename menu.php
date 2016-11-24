<?php
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
$f_name="нэвтрэх";
$pr_img="p1.jpg";
$tl_tip="нэвтрэх";
if($_SESSION['user-id']!=NULL) {
	$query="SELECT * FROM `_User` WHERE userId='".$_SESSION['user-id']."'";
	if($result = $con->query($query)) {
		while ($row = $result->fetch_row()) {
			$f_name=$row[2];
			if($row[9]!=NULL) {
				$pr_img=$row[9];	
			}
			$tl_tip="гарах";
		}
	}	
}
?>
<div class="header_top">
	<div class="col-sm-3 logo"><a href="index.php"><img src="images/logo.png" alt=""/></a></div>
	<div class="col-sm-6 nav">
		<ul>
			<li><span class="simptip-position-bottom simptip-movable" data-tooltip="нүүр"><a href="index.php"></a></span></li>
			<li><span class="simptip-position-bottom simptip-movable" data-tooltip="кино"><a href="movie.php"></a></span></li>
			<li><span class="simptip-position-bottom simptip-movable" data-tooltip="бичлэг"><a href="#"></a></span></li>
			<li><span class="simptip-position-bottom simptip-movable" data-tooltip="тоглоом"><a href="#"></a></span></li>
			<li><span class="simptip-position-bottom simptip-movable" data-tooltip="суваг"><a href="#"></a></span></li>
			<li><span class="simptip-position-bottom simptip-movable" data-tooltip="мэдээ"><a href="#"></a></span></li>
		</ul>
	</div>
	<div class="col-sm-3 header_right">
	   <ul class="header_right_box">
		<li><img src="<?php echo "images/" .$pr_img; ?>" class="user-profile" alt=""/></li>
		<li><span class="simptip-position-bottom simptip-movable" data-tooltip="<?php echo $tl_tip; ?>"><p><a href="login.php"> <?php echo $f_name; ?> </a></p></span></li>
		<li class="last"><i class="edit"> </i></li>
		<div class="clearfix"> </div>
	   </ul>
	</div>
	<div class="clearfix"> </div>
</div>