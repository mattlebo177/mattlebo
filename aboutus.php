<!DOCTYPE html>

<!-- 9/8/2015 -->

<html>

	<head>
		<title>About Us</title>
	
		<meta name="description" content="Matt Lebo">
		<meta name=viewport content="width=device-width, initial-scale=1"> <!-- Optimizes mobile device screen width -->
	
		<link rel="icon" type="image/x-icon" href="/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="/styles.css">
	</head>
	
	<body>
		<h1>About Lebo Railways</h1>
		
		<h3>Website History:</h3>
			<p>Lebo Railways is a fictional railroad located in Pennsylvania established in 2006. We got online with our first website in the fall of 2007. There have been many changes in hosting this website, from hosting services to Apache on Ubuntu 10.10, 12.04 LTS, CentOS, to now Debian on a Raspberry Pi.</p>
		<br/><br/>
		
		<!-- image of speeder -->
		<figure>
			<img src="/images/lr717_wks.jpg" title="Lebo Railways #717 at WK&S 8/17/2005" alt="Lebo Railways #717 at WK&S 8/17/2005" height = "300" width = "400">
			<figcaption>Lebo Railways #717 Fairmont M-19F Speeder (Former SCL #724)</figcaption>
		</figure>
		<br/><br/>
		<!-- Server Specs -->
		<h3>Current Server:</h3>
			<p>Raspberry Pi 2 Model B (February 2015 release)<br/>
				<br/>
				Processor: ARM Cortex-A7 quad-core @900MHz<br/>
				Ram: 1GB DDR2<br/>
				HDD: 32GB SanDisk Class 10 MicroSD Card<br/>
				OS: Raspbian OS (Debian 7.5 based)</p>
		<br/><br/>
		
		<h3>My Sites:</h3>
		<a href = "http://www.mattlebo.com">Main Website</a><br/><br/>
		<a href = "http://www.mattlebo.mipropia.com">Offsite Mirror</a><br/><br/>
		<a href = "http://www.mattlebo.com:8080">Testing Site</a><br/><br/>
		
					
	</body>
	<br/><br/>

	<footer>
	<!-- Navigation bar -->
	<?php 
		include ('navbar.php'); 
		echo "<br/><br/>";
		include ('sitemessage.php');
	?>

	</footer>

</html>