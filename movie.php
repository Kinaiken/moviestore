<?php include('header.php'); ?> 
 <script>
	var index;
	function loadXMLDoc(i) {
		index = i;
		var xmlhttp;
		if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		}
		else {// code for IE6, IE5
		  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
		  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("movie").innerHTML = xmlhttp.responseText;
		  }
		}
		xmlhttp.open("GET", "ajax.php?q=" + i, true);
		xmlhttp.send();
	}
	function next() {
		if(index < 3) {
			loadXMLDoc(index + 1);
		}
	}
	function previous() {
		if(index - 1 > 0) {
			loadXMLDoc(index - 1);
		}
	}
</script>
	
<body onload="loadXMLDoc(1)">
<div class="container">
	<div class="container_wrap">
		<?php include('menu.php') ?>
	      <div class="content">
	   	   <h2 class="m_3">Бүх кинонууд</h1>
      	       <div class="movie_top">
      	         <div class="col-md-9 movie_box">
					<div id="movie"></div>
					<div class="col-md-12">
						<div class="blog-pagenat-wthree">
							<ul>
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
									
									$query = "SELECT COUNT(*) FROM `_Movies` WHERE imgSmallUrl IS NOT NULL";
									if($result = $con->query($query)) {
										while($row = $result->fetch_row()) {
											$movieCnt = $row[0];		
										}
									}
									$page = 1;
									$j = 0;
								?>
								<li><a class="first" href="#" onClick='previous()'>Өмнөх</a></li>
								<?php
									while($j < $movieCnt) {
										$j += 8;
										paginationButtons($j / 8, $page);
									}
									function paginationButtons($i, $page) {
										if($i == $page) {
										  echo "<li><a class='active' href='#' onClick = 'loadXMLDoc(". $i .")' >". $i ."</a></li>";
										}
										else {
										  echo "<li><a href='#' onClick = 'loadXMLDoc(". $i .")' >". $i ."</a></li>";
										}
									}
								?>
								<li><a class="last" href="#" onClick='next()'>Дараах</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>                         
                         <!-- Movie variant with time -->
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
                  <h1 class="recent">Сүүлд нэмэгдсэн кинонууд</h3>
					<ul id="flexiselDemo3">
						<li><img src="images/1.jpg" class="img-responsive"/><div class="grid-flex"><a href="#">Syenergy 2mm</a><p>22.10.2014 | 14:40</p></div></li>
						<li><img src="images/2.jpg" class="img-responsive"/><div class="grid-flex"><a href="#">Surf Yoke</a><p>22.01.2015 | 14:40</p></div></li>
						<li><img src="images/3.jpg" class="img-responsive"/><div class="grid-flex"><a href="#">Salty Daiz</a><p>22.10.2013 | 14:40</p></div></li>
						<li><img src="images/4.jpg" class="img-responsive"/><div class="grid-flex"><a href="#">Cheeky Zane</a><p>22.10.2014 | 14:40</p></div></li>
						<li><img src="images/5.jpg" class="img-responsive"/><div class="grid-flex"><a href="#">Synergy</a><p>22.10.2013 | 14:40</p></div></li>
				    </ul>
				    <script type="text/javascript">
					 $(window).load(function() {
						$("#flexiselDemo3").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
					    	responsiveBreakpoints: { 
					    		portrait: { 
					    			changePoint:480,
					    			visibleItems: 1
					    		}, 
					    		landscape: { 
					    			changePoint:640,
					    			visibleItems: 2
					    		},
					    		tablet: { 
					    			changePoint:768,
					    			visibleItems: 3
					    		}
					    	}
					    });
					    
					});
				   </script>
				   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
				   <ul id="flexiselDemo1">
						<li><img src="images/8.jpg" class="img-responsive"/><div class="grid-flex"><a href="#">Syenergy 2mm</a><p>22.10.2014 | 14:40</p></div></li>
						<li><img src="images/7.jpg" class="img-responsive"/><div class="grid-flex"><a href="#">Surf Yoke</a><p>22.01.2015 | 14:40</p></div></li>
						<li><img src="images/6.jpg" class="img-responsive"/><div class="grid-flex"><a href="#">Salty Daiz</a><p>22.10.2013 | 14:40</p></div></li>
						<li><img src="images/1.jpg" class="img-responsive"/><div class="grid-flex"><a href="#">Cheeky Zane</a><p>22.10.2014 | 14:40</p></div></li>
						<li><img src="images/2.jpg" class="img-responsive"/><div class="grid-flex"><a href="#">Synergy</a><p>22.10.2013 | 14:40</p></div></li>
				     </ul>
				    <script type="text/javascript">
					 $(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
					    	responsiveBreakpoints: { 
					    		portrait: { 
					    			changePoint:480,
					    			visibleItems: 1
					    		}, 
					    		landscape: { 
					    			changePoint:640,
					    			visibleItems: 2
					    		},
					    		tablet: { 
					    			changePoint:768,
					    			visibleItems: 3
					    		}
					    	}
					    });
					    
					});
				   </script>
		  </div>
</div>
</div>
<?php include('footer.php') ?>		
</body>
</html>