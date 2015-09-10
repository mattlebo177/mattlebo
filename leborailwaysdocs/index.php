<!DOCTYPE html>

<!-- 9/9/2015 -->

<html>

	<head>
		<title>Employee Portal</title>
	
		<meta name="description" content="Lebo Railways Employee Portal">
		<meta name=viewport content="width=device-width, initial-scale=1"> <!-- Optimizes mobile device screen width -->
	
		<link rel="icon" type="image/x-icon" href="/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="/styles.css">
	</head>
	
	<body>
		<h1>Lebo Railways Employee Portal</h1>

		<h3>Lebo Railways:</h3>
		<p><a href = "/leborailwaysdocs/leborailwayspages/lineup.php">Train Lineup</a><br/><br/>
			<a href = "/leborailwaysdocs/leborailwayspages/trouble_tickets.php">Trouble Tickets</a><br/><br/>
			<a href = "/leborailwaysdocs/cs/">C&S Documents</a><br/><br/>
			<a href = "/leborailwaysdocs/te/">T&E Documents</a><br/><br/>
			<a href = "/leborailwaysdocs/LARTS_map.gif">System Map</a><br/><br/>
			<a href = "http://www.mattlebo.com:4200">Shellinabox SSH (Raspberry Pi)</a><br/><br/>
			<a href = "http://www.mattlebo.com:10000">Webmin (Raspberry Pi)</a><br/><br/>
			<a href = "https://github.com/mattlebo177/mattlebo/">GitHub Website Source Code</a><br/><br/>

	<br/><br/>
	</body>
	
	<footer>
	<!-- Navigation bar -->
	<?php 
		include ('../navbar.php');
		echo "<br/><br/>";
		include ('../sitemessage.php');
	?>
	
	</footer>


</html>