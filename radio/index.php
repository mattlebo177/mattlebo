<!DOCTYPE html>

<!-- 10/25/2019 -->

<html>

	<head>

		<!-- Navigation Bar -->
		<?php
			include ('../navbar.php');
		?>

		<title>Amateur Radio</title>
	
		<meta name="description" content="Amateur Radio">
		<meta name=viewport content="width=device-width, initial-scale=1"> <!-- Optimizes mobile device screen width -->
	
		<link rel="icon" type="image/x-icon" href="/radio.ico"/>
		<link rel="stylesheet" type="text/css" href="/styles.css">
	</head>
	
	<body>
		<h1>Amateur Radio</h1>
			
		<h3>Local Repeaters:</h3>
			<a href = "http://www.qsl.net/w3bn/"><p>W3BN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 146.91 - (CTCSS 131.8 TX only) &nbsp;&nbsp;Neversink Mountain</p></a>
					
			<a href = "http://www.co.berks.pa.us/Dept/DES/EMA/Pages/ARESRACES.aspx"><p>K2SEH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 147.18 + (CTCSS 110.9 TSQ) &nbsp;&nbsp;Mt. Penn</p></a>
								
			<a href = "http://www.paarc.net/"><p>K3ZMC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 147.21 + (CTCSS 131.8 TSQ) &nbsp;&nbsp;Earlville</p></a>
		
			<a href = "http://www.qsl.net/k3ti/"><p>K3TI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 145.49 - (CTCSS 114.8 TSQ) &nbsp;&nbsp;Mt. Penn</p></a>

		</p>
		<br/><br/>
			
		<h3>Local Simplex:</h3>
			<p>CH1 146.520 CS<br/>
				CH2 146.550 CS<br/>
			</p>
			<br/><br/>
			
			<h3>Band Conditions:</h3>
				<!-- image of band conditions -->
				<figure>
					<a href = "http://www.hamqsl.com/solar.html">
					<img src="http://www.hamqsl.com/solar101vhf.php" title="Band Conditions" alt="Band Conditions" height = "148" width = "460"></a>
				</figure>
			<br/><br/>
			
			<p>Propagation Methods by Frequency:</p>
				<!-- image of propagation -->
				<figure>
					<img src="http://www.hamqsl.com/propagation.png" title="Propagation" alt="Propagation" height = "480" width = "640">
				</figure>
			<br/><br/>
			
			<p>K3TI 2m Repeater Controller:</p>
			<!-- image of repeater controller -->
			<figure>
				<img src="/images/repeatercontroller.jpg" title="Arcom Repeater Controller" alt="Arcom Repeater Controller" height = "300" width = "400">
			</figure>
	</body>
	<br/>
	
	<footer>
	<!-- Navigation bar -->
	<?php 
		include ('../sitemessage.php');
	?>

	</footer>

</html>