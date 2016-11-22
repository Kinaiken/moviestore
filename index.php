<?php include('header.php'); ?>
<body>
<div class="container">
	<div class="container_wrap">
		<?php include('menu.php'); ?>
	    <div class="slider">
			<div class="callbacks_container">
	      <ul class="rslides" id="slider">
	        <li><img src="images/banner1.jpg" class="img-responsive" alt=""/>
	        	<div class="button">
			      <a href="#" class="hvr-shutter-out-horizontal">Шууд үзэх</a>
			    </div>
			</li>
	        <li><img src="images/banner2.jpg" class="img-responsive" alt=""/>
	        	<div class="button">
			      <a href="#" class="hvr-shutter-out-horizontal">Шууд үзэх</a>
			    </div>
			</li>
	        <li><img src="images/banner3.jpg" class="img-responsive" alt=""/>
	        	<div class="button">
			      <a href="#" class="hvr-shutter-out-horizontal">Шууд үзэх</a>
			    </div>
			</li>
	      </ul>
	    </div>
			<div class="banner_desc">
			    	<div class="col-md-9">
			    		<ul class="list_1">
			    			<li>Published <span class="m_1">Feb 20, 2015</span></li>
			    			<li>Updated <span class="m_1">Feb 20 2015</span></li>
			    			<li>Rating <span class="m_1"><img src="images/rating.png" alt=""/></span></li>
			    		</ul>
			    	</div>
			    	<div class="col-md-3 grid_1">
			    		<ul class="list_1 list_2">
			    			<li><i class="icon1"> </i><p>2,548</p></li>
			    			<li><i class="icon2"> </i><p>215</p></li>
			    			<li><i class="icon3"> </i><p>546</p></li>
			    		</ul>
			    	</div>
			    </div>
		</div>
		<div class="content">
	  
		<div class="box_1">
			<h1 class="m_2">Санал болгож буй кино</h1>
			<div class="clearfix"> </div>
		</div>

		<div class="box_2">
			<script>
				$(function () {
					$("#slider").responsiveSlides({
						auto: true,
						nav: true,
						speed: 500,
						namespace: "callbacks",
						pager: true,
					});
					$("#owl-demo").owlCarousel({
						autoPlay: 9000, //Set AutoPlay to 3 seconds
						items : 5,
						itemsDesktop : [640,5],
						itemsDesktopSmall : [414,4]
					});
				});
			</script>
			<script src="js/owl.carousel.js"></script>
			<div id="owl-demo" class="owl-carousel owl-theme">
				<div class="item">
					<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
						<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m1.jpg" title="album-name" class="img-responsive" alt=" " />
							<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
						</a>
						<div class="mid-1 agileits_w3layouts_mid_1_home">
							<div class="w3l-movie-text">
								<h6><a href="single.php">Содура</a></h6>							
							</div>
							<div class="mid-2 agile_mid_2_home">
								<p>2016</p>
								<div class="block-stars">
									<ul class="w3l-ratings">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="ribben">
							<p>ШИНЭ</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
						<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m2.jpg" title="album-name" class="img-responsive" alt=" " />
							<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
						</a>
						<div class="mid-1 agileits_w3layouts_mid_1_home">
							<div class="w3l-movie-text">
								<h6><a href="single.php">Давхар цохилт</a></h6>							
							</div>
							<div class="mid-2 agile_mid_2_home">
								<p>2016</p>
								<div class="block-stars">
									<ul class="w3l-ratings">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="ribben">
							<p>ШИНЭ</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
						<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m3.jpg" title="album-name" class="img-responsive" alt=" " />
							<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
						</a>
						<div class="mid-1 agileits_w3layouts_mid_1_home">
							<div class="w3l-movie-text">
								<h6><a href="single.php">Том толгойтны романс</a></h6>							
							</div>
							<div class="mid-2 agile_mid_2_home">
								<p>2016</p>
								<div class="block-stars">
									<ul class="w3l-ratings">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="ribben">
							<p>ШИНЭ</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
						<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m4.jpg" title="album-name" class="img-responsive" alt=" " />
							<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
						</a>
						<div class="mid-1 agileits_w3layouts_mid_1_home">
							<div class="w3l-movie-text">
								<h6><a href="single.php">Такси</a></h6>							
							</div>
							<div class="mid-2 agile_mid_2_home">
								<p>2016</p>
								<div class="block-stars">
									<ul class="w3l-ratings">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="ribben">
							<p>ШИНЭ</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
						<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m5.jpg" title="album-name" class="img-responsive" alt=" " />
							<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
						</a>
						<div class="mid-1 agileits_w3layouts_mid_1_home">
							<div class="w3l-movie-text">
								<h6><a href="single.php">Шуугиан таригч</a></h6>							
							</div>
							<div class="mid-2 agile_mid_2_home">
								<p>2016</p>
								<div class="block-stars">
									<ul class="w3l-ratings">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="ribben">
							<p>ШИНЭ</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
						<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m6.jpg" title="album-name" class="img-responsive" alt=" " />
							<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
						</a>
						<div class="mid-1 agileits_w3layouts_mid_1_home">
							<div class="w3l-movie-text">
								<h6><a href="single.php">ТюТю</a></h6>							
							</div>
							<div class="mid-2 agile_mid_2_home">
								<p>2016</p>
								<div class="block-stars">
									<ul class="w3l-ratings">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="ribben">
							<p>ШИНЭ</p>
						</div>
					</div>
				</div>
				<div class="item"">
					<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
						<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m7.jpg" title="album-name" class="img-responsive" alt=" " />
							<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
						</a>
						<div class="mid-1 agileits_w3layouts_mid_1_home">
							<div class="w3l-movie-text">
								<h6><a href="single.php">Бохир ертөнц</a></h6>							
							</div>
							<div class="mid-2 agile_mid_2_home">
								<p>2016</p>
								<div class="block-stars">
									<ul class="w3l-ratings">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="ribben">
							<p>ШИНЭ</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
						<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m8.jpg" title="album-name" class="img-responsive" alt=" " />
							<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
						</a>
						<div class="mid-1 agileits_w3layouts_mid_1_home">
							<div class="w3l-movie-text">
								<h6><a href="single.php">Lovers</a></h6>							
							</div>
							<div class="mid-2 agile_mid_2_home">
								<p>2016</p>
								<div class="block-stars">
									<ul class="w3l-ratings">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="ribben">
							<p>ШИНЭ</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
						<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m9.jpg" title="album-name" class="img-responsive" alt=" " />
							<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
						</a>
						<div class="mid-1 agileits_w3layouts_mid_1_home">
							<div class="w3l-movie-text">
								<h6><a href="single.php">Зангараг</a></h6>							
							</div>
							<div class="mid-2 agile_mid_2_home">
								<p>2016</p>
								<div class="block-stars">
									<ul class="w3l-ratings">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="ribben">
							<p>ШИНЭ</p>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
						<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m10.jpg" title="album-name" class="img-responsive" alt=" " />
							<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
						</a>
						<div class="mid-1 agileits_w3layouts_mid_1_home">
							<div class="w3l-movie-text">
								<h6><a href="single.php">Үргээлэг-2</a></h6>							
							</div>
							<div class="mid-2 agile_mid_2_home">
								<p>2016</p>
								<div class="block-stars">
									<ul class="w3l-ratings">
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="ribben">
							<p>ШИНЭ</p>
						</div>
					</div>
				</div>
			</div>
		</div>
			
        <div class="box_3">
			<h1 class="m_2">Онцлох кино</h1>
			<div class="clearfix"> </div>
		</div>
		
		<div class="box_4">
			<div class="col-md-5 grid_3">
			  <div class="row_1">
			  <div class="col-md-6 grid_4"><a href="single.php">
				  <div class="grid_2">
					<img src="images/pic1.jpg" class="img-responsive" alt=""/>
					<div class="caption1">
						<ul class="list_3">
				    		<li><i class="icon5"> </i><p>3,548</p></li>
				    	</ul>
				    	<i class="icon4"> </i>
				    	<p class="m_3">Найз</p>
					</div>
				   </div>
				   <div class="grid_2 col_1">
					<img src="images/pic2.jpg" class="img-responsive" alt=""/>
					<div class="caption1">
						<ul class="list_3">
				    		<li><i class="icon5"> </i><p>3,548</p></li>
				    	</ul>
				    	<i class="icon4"> </i>
				    	<p class="m_3">Хөгжилтэй гэр бүл</p>
					</div>
				   </div>
			   </a></div>
			   <div class="col-md-6 grid_7">
				   <div class="col_2">
				   	    <ul class="list_4">
			    			<li><i class="icon1"> </i><p>2,548</p></li>
			    			<li><i class="icon2"> </i><p>215</p></li>
			    			<li><i class="icon3"> </i><p>546</p></li>
			    			<li>Үнэлгээ : &nbsp;&nbsp;<p><img src="images/rating1.png" alt=""/></p></li>
			    			<li>Гарсан огноо : &nbsp;<span class="m_4">2016-11-23</span> </li>
			    			<div class="clearfix"> </div>
			    		</ul>
			    		<div class="m_5"><a href="single.php"><img src="images/pic3.jpg" class="img-responsive" alt=""/></a></div>
				   </div>
			 </div>
			   <div class="clearfix"> </div>
			   </div>
			   <div class="row_2">
			   	<a href="single.php"><img src="images/pic4.jpg" class="img-responsive" alt=""/></a>
			   </div>
			</div>
			<div class="col-md-5 content_right">
			 <div class="row_3">
			  <div class="col-md-6 content_right-box"><a href="single.php">
				<div class="grid_2">
				<img src="images/pic6.jpg" class="img-responsive" alt=""/>
				<div class="caption1">
						<ul class="list_5">
				    		<li><i class="icon5"> </i><p>3,548</p></li>
				    	</ul>
				    	<i class="icon4 icon6"> </i>
				    	<p class="m_3">Хожлын нүүдэл</p>
				</div>
			    </div>
			   </a></div>
				<div class="col-md-6 grid_5">
				<a href="single.php">
					<div class="grid_2">
						<img src="images/pic7.jpg" class="img-responsive" alt=""/>
						<div class="caption1">
							<ul class="list_5">
								<li><i class="icon5"> </i><p>3,548</p></li>
							</ul>
							<i class="icon4 icon6"> </i>
							<p class="m_3">Аймшигтай нүүдэл</p>
						</div>
					</div>
				</a>
				</div>
				<div class="clearfix"> </div>
				</div>
				<div class="video">
			      <iframe width="100%" height="" src="https://www.youtube.com/embed/WNzFniqTo8I" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="row_5">
			  	<div class="col-md-6">
					<div class="col_2">
				   	    <ul class="list_4">
			    			<li><i class="icon1"> </i><p>2,548</p></li>
			    			<li><i class="icon2"> </i><p>215</p></li>
			    			<li><i class="icon3"> </i><p>546</p></li>
			    			<li>Rating : &nbsp;&nbsp;<p><img src="images/rating1.png" alt=""></p></li>
			    			<div class="clearfix"> </div>
			    		</ul>
			    		
				   </div>
				</div>
				<div class="col-md-6 m_6"><a href="single.php">
				  <img src="images/pic8.jpg" class="img-responsive" alt=""/>
			   </a></div>
			  </div>
			</div>
			<div class="col-md-2 grid_6">
				<div class="m_7"><a href="single.php"><img src="images/pic9.jpg" class="img-responsive" alt=""/></a></div>
				<div class="caption1">
						<ul class="list_5">
				    		<li><i class="icon5"> </i><p>3,548</p></li>
				    	</ul>
				    	<i class="icon4 icon6"> </i>
				    	<p class="m_3">Чонон сүлд</p>
				</div>
				<div class="col_2 col_3">
				   	    <ul class="list_4">
			    			<li><i class="icon1"> </i><p>2,548</p></li>
			    			<li><i class="icon2"> </i><p>215</p></li>
			    			<li><i class="icon3"> </i><p>546</p></li>
			    			<li>Rating : &nbsp;&nbsp;<p><img src="images/rating1.png" alt=""></p></li>
			    			<li>Release : &nbsp;<span class="m_4">Mar 15, 2015</span> </li>
			    			<div class="clearfix"> </div>
			    		</ul>
			    		<div class="m_8"><a href="single.php"><img src="images/pic10.jpg" class="img-responsive" alt=""/></a></div>
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