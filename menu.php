<?php
$db=mysql_connect('us-cdbr-iron-east-04.cleardb.net','b1ad9fd1eb1578','5d896294');
mysql_set_charset('utf8', $db);
if(!$db)  {
  die('Could not connect: '. mysql_error());
}
mysql_select_db("heroku_4d723b66bdd7d40", $db);	
session_start();
error_reporting(0);
$f_name="нэвтрэх";
$pr_img="p1.jpg";
if($_SESSION['user-id']!=NULL) {
	$query=mysql_query("SELECT * FROM `_User` WHERE userId='".$_SESSION['user-id']."'");
	while ($row = mysql_fetch_assoc($query)) {
		$f_name=$row["firstname"];
		if($row["profileImg"]!=NULL) {
			$pr_img=$row["profileImg"];	
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
			<li><span class="simptip-position-bottom simptip-movable" data-tooltip="бичлэг"><a href="movie.php"></a></span></li>
			<li><span class="simptip-position-bottom simptip-movable" data-tooltip="тоглоом"><a href="movie.php"></a></span></li>
			<li><span class="simptip-position-bottom simptip-movable" data-tooltip="суваг"><a href="movie.php"></a></span></li>
			<li><span class="simptip-position-bottom simptip-movable" data-tooltip="мэдээ"><a href="movie.php"></a></span></li>
		</ul>
	</div>
	<div class="col-sm-3 header_right">
	   <ul class="header_right_box">
		<li><img src="<?php echo "images/" .$pr_img; ?>" class="user-profile" alt=""/></li>
		<li><p><a href="login.php"> <?php echo $f_name; ?> </a></p></li>
		<li class="last"><i class="edit"> </i></li>
		<div class="clearfix"> </div>
	   </ul>
	</div>
	<div class="clearfix"> </div>
</div>