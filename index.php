<!DOCTYPE html>

<!-- 10/25/2019 -->

<html>

	<head>
		<meta name="description" content="Matt Lebo's Homepage">
		<meta name=viewport content="width=device-width, initial-scale=1"> <!-- Optimizes mobile device screen width -->

		<title>Matt Lebo's Homepage</title>
	
		<link rel="icon" type="image/x-icon" href="/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="/styles.css">

		<!-- Navigation Bar -->
		<?php
			include ('navbar.php');
		?>

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
	<!-- site message at bottom of page -->
	<?php 
		include ('sitemessage.php');
	?>
	
	</footer>


</html>