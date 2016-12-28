<?php
	include '../config/database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>my profile</title>
	<link type="text/css" href="../css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link type="text/css" href="../css/animate.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

	<script src="jquery.js"></script>
	<script src="jquery.scrollTo.js"></script>
	<script src="jquery.nav.min.js"></script>
	
	
</head>
<script>
$(document).ready(function() {
  $('#nav').onePageNav();
});
</script>
<body>
	<div class="wrapper">
		
		<div class="profile">
			<div class="mycolor">
			<div class="banner">
			<div class="image">
			<?php
				$query = "SELECT * FROM `images` WHERE id  ORDER BY id DESC ";
				$q = mysql_query($query);
				$data = mysql_fetch_array($q);
			?>	 
				<img src="../profileimages/<?php echo $data['photo'] ?>" height="230px" width="220px">
			</div>
			<h1 class="animated fadeInUp"> I'M SAMEER LAMA</h1>
			<p class="animated fadeInUp">PROGRAMMER/WEB DEVLOPER</p>
			<h3 class="animated fadeInUp ">90% of the world runs on code today.</h3>
			<div class="social-menu">
				<ul>
					<li><a href="#"><i class="fa fa-facebook" ></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" ></i></a></li>
					<li><a href="#"><i class="fa fa-google" ></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" ></i></a></li>
				</ul>	

			</div>
				
			</div>
		</div>
		</div>
		<div class="navbar">
			<div class="maintag">
				<p>ClASSY RESUME</p>
			</div>
			<div class="main-menu">
				<ul id="nav">
					<li><a href="#">HOME</a></li>
					<li><a href="#services">SERVICES</a></li>
					<li><a href="#">POSTS</a></li>
					<li><a href="#about">ABOUT</a></li>
					<li><a href="#">CONTACT</a></li>
				</ul>	
			</div>
		</div>
		<div class="about" id="about">
			<div class="header-line">
				<h1>ABOUT ME</h1>
			</div>
			<div class="few"><p>A FEW WORDS ABOUT ME</p></div>
			<div class="info">
				<div class="images">
					<img src="../profileimages/<?php echo $data['photo'] ?>" alt="my_images">
				</div>

				<div class="bio">
					<div class="job-title">
						<h3>JOB TITLE</h3>
						<p>PROGRAMMER / WEBDEVELOPER</p>
					</div>
					<div class="name">
						<h3>NAME</h3>
						<p>SAMEER LAMA</p>
					</div>
					<div class="sex">
						<h3>SEX</h3>
						<p>MALE</p>
					</div>
					<div class="address">
						<h3>ADDRESS</h3>
						<p>JORPATI-5/ATTARKHEL</p>
					</div>
					<div class="email">
						<h3>EMAIL ADDRESS</h3>
						<p><a href="#">samirlama509@gmail.com</a></p>
					</div>
				</div>
			
			</div>
		</div>
		<div class="services" id="services">
			<h2>WHAT I DO FOR YOU</h2>
			<p>SEE MY SERVICES</p>	
			<div class="content1">
			</div>
			<div class="content3">
			</div>
			<div class="content2">
			</div>
		</div>

	</div>
	
</body>
</html>