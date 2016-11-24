<?php include('header.php'); ?>

<body>
<div class="container">
	<div class="container_wrap">
		<?php include('menu.php'); ?>
	   <div class="content">
      	   <div class="movie_top">
      	        <div class="col-md-9 movie_box">
					<?php 
						if ($_SERVER['REQUEST_METHOD'] === 'GET') {
							if (isset($_GET['q'])) {
							  $movieId  = $_GET['q'];
							}
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
							
							$query = "SELECT * FROM `_Movies` WHERE movieId = '". $movieId ."'";
							$result = $con->query($query);
							$row = $result->fetch_row();							
						}
					?>
					<center><h2><?php echo $row[1]; ?></h2></center></br>
					<div class="grid images_3_of_2">
						<div class="movie_image">
							<span class="movie_rating">5.0</span>
							<div class="poster-light"></div>
							<img src="<?php echo "images/". $row[16]; ?>" class="img-responsive" alt=""/>
						</div>
						<div class="movie_rate">
							<div class="rating_desc"><p>Таны үнэлгээ :</p></div>
							<form action="" class="sky-form">
							 <fieldset>					
							   <section>
								 <div class="rating">
									<input type="radio" name="stars-rating" id="stars-rating-5">
									<label for="stars-rating-5"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-4">
									<label for="stars-rating-4"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-3">
									<label for="stars-rating-3"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-2">
									<label for="stars-rating-2"><i class="icon-star"></i></label>
									<input type="radio" name="stars-rating" id="stars-rating-1">
									<label for="stars-rating-1"><i class="icon-star"></i></label>
								 </div>
							  </section>
							</fieldset>
						   </form>
						   <div class="clearfix"> </div>
						</div>
					</div>
					<div class="desc1 span_3_of_2">
						<p class="movie_option"><strong>Улс: </strong><a href="#">Монгол</a></p>
						<p class="movie_option"><strong>Төрөл: </strong><a href="#">Адал явдал</a>, <a href="#">Инээдэм</a></p>
						<p class="movie_option"><strong>Гарсан он: </strong><?php echo $row[4]; ?></p>
						<p class="movie_option"><strong>Найруулагч: </strong><a href="#">Балжиннямын Амарсайхан</a></p>
						<p class="movie_option"><strong>Жүжигчид: </strong><a href="#">Балжиннямын Амарсайхан</a>, <a href="#">Мондооны Мягмар</a>, <a href="#">Батцэнгэлийн Тэмүүлэн</a>, <a href="#">Цэгмидийн Төмөрхуяг</a>, <a href="#">С.Батзориг</a> <a href="#">...</a></p>
						<p class="movie_option"><strong>Насны хязгаар: </strong>6+</p> 
						<div class="down_btn"><a class="btn1" href="#"><span> </span>Татах&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
						<div class="down_btn"><a class="btn1" href="#"><span> </span>Шууд үзэх</a></div>
					 </div>
					<div class="clearfix"> </div>
					<p class="m_4"><?php echo $row[9]; ?></p>
	   
					<iframe class="trailer" src="<?php echo "https://www.youtube.com/embed/" . $row[7]; ?>" allowfullscreen></iframe>
					
				</div>
                      <div class="col-md-3">
                      	<div class="movie_img"><div class="grid_2">
							<img src="images/pic6.jpg" class="img-responsive" alt="">
							<div class="caption1">
									<ul class="list_5 list_7">
							    		<li><i class="icon5"> </i><p>3,548</p></li>
							    	</ul>
							    	<i class="icon4 icon6 icon7"> </i>
							    	<p class="m_3">Хожлын нүүдэл</p>
							</div>
						    </div>
						   </div>
                      	  <div class="grid_2 col_1">
							<img src="images/pic2.jpg" class="img-responsive" alt="">
							<div class="caption1">
								<ul class="list_3 list_7">
						    		<li><i class="icon5"> </i><p>3,548</p></li>
						    	</ul>
						    	<i class="icon4 icon7"> </i>
						    	<p class="m_3">Хөгжилтэй гэр бүл</p>
							</div>
						   </div>
						    <div class="grid_2 col_1">
							<img src="images/pic9.jpg" class="img-responsive" alt="">
							<div class="caption1">
								<ul class="list_3 list_7">
						    		<li><i class="icon5"> </i><p>3,548</p></li>
						    	</ul>
						    	<i class="icon4 icon7"> </i>
						    	<p class="m_3">Чонон сүлд</p>
							</div>
						   </div>
		               </div> 
                      <div class="clearfix"> </div>
                  </div>
           </div>
    </div>
</div>
<?php include('footer.php'); ?>
</body>
</html>