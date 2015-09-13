<!DOCTYPE html>

<!-- 9/13/2015 -->

<html>

	<head>
		<title>Matt Lebo's Homepage</title>
	
		<meta name="description" content="Matt Lebo's Homepage">
		<meta name=viewport content="width=device-width, initial-scale=1"> <!-- Optimizes mobile device screen width -->
	
		<link rel="icon" type="image/x-icon" href="/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="/styles.css">
	</head>
	
	<body>

		<h1>Matt Lebo's Homepage</h1>
			<h3>Welcome to my website!</h3>
		
		<br/><br/><br/><br/><br/>
			
		<!-- image of drone -->
		<figure>
			<img src="/images/drone.jpg" title="drone" alt="drone" height = "267" width = "400">
		</figure>
			
	</body>
	<br/><br/><br/><br/>
	
	<footer>
	<!-- Navigation bar -->
	<?php 
		include ('navbar.php');
		echo "<br/><br/>";
		include ('sitemessage.php');
	?>
	
	</footer>


</html>