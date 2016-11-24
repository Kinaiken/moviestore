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
	
	error_reporting(1);
	
	$limit = 8;
	$start = 0;
	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		if (isset($_GET['q'])) {
		  $page  = $_GET['q'];
		} 
		else { 
		  $page = 1; 
		}
		$start = ($page - 1)  * $limit;
		$query = "SELECT movieId, title, imgSmallUrl, year(yearOfRelease) as year, timeDuration FROM `_Movies` WHERE imgSmallUrl IS NOT NULL LIMIT " . $start . ", " . $limit;

		if($result = $con->query($query)) {
			$i = 0;
			while($row = $result->fetch_row()) {
				$i = $i + 1;
				if ($i <= 2) {
					$loc = 'left';
				}
				else {
					$loc = 'right';
					if($i == 4) {
						$i = 0;
					}
				}
				getMovies($loc, $row[0], $row[1], $row[2], $row[3], $row[4]);
			};
		}	    
	
	}

	function getMovies($loc, $id, $title, $img, $year, $time) {
		echo
		"<div class='movie movie-test movie-test-dark movie-test-" . $loc . "'>
			<div class='movie__images'>
				<a href='single.php?q=". $id ."' class='movie-beta__link'>
					<img alt='' src='images/". $img ."' class='img-responsive' alt=''/>
				</a>
			</div>
			<div class='movie__info'>
				<a href='single.php?q=". $id ."' class='movie__title'>". $title ."</a>
				<p class='movie__time'>". $time . " мин&nbsp;&nbsp;|&nbsp;&nbsp;". $year ." он </p>
				<p class='movie__option'><a href='#'>адал явдалт</a> | <a href='#'>инээдэм</a></p>
				<ul class='list_6'>
					<li><i class='icon1'> </i><p>2,548</p></li>
					<li><i class='icon3'> </i><p>546</p></li>
					<li>Үнэлгээ : &nbsp;&nbsp;<p><img src='images/rating1.png' alt=''></p></li>
					<div class='clearfix'> </div>
				</ul>
			 </div>
			<div class='clearfix'> </div>
		</div>";                          
	}
?>