<!DOCTYPE html>

<!-- Date: 5/5/2014 -->


<html>

<head>
  <title>Operating Plan Help</title>
  
  <meta name="description" content="Operating Plan Help">
	<meta name=viewport content="width=device-width, initial-scale=1"> <!-- Optimizes mobile device screen width -->

  
  <link rel="shortcut icon" type="image/x-icon" href="/tande.ico"/>
  <link rel="stylesheet" type="text/css" href="/styles.css"/> 

	<h1 style="color:#78FB44">Operating Plan Help</h1>
</head>

<body>

<!-- symbol guide lists -->

<h3>I. Symbol Guide</h3>
	<ol>
		<li>Timetable Trains</li>
			<ul>
				<li>Symbols include origin, destination, and date</li>
				<li>origin/destination and date separated by dash</li>
				<li>Ex. CAQA-11</li>
					<ul>
						<li>CA = origin of Cabin</li>
						<li>QA = origin of Quarry</li>
						<li>11 = operating on 11th day of the current month</li>
					</ul>
				<li>Origin and destination codes</li>
					<ul>
						<li>CA = Cabin</li>
						<li>CH = CHT (Cabin House Track)</li>
						<li>EO = EOT (End of Track)</li>
						<li>QA = Quarry (Quarry main and siding tracks)</li>
						<li>QC = QCT (Quarry Connecting Track)</li>
						<li>WO = Woodsy</li>
						<li>YY = Y</li>
					</ul>
			</ul>
		<li>Extra Trains</li>
			<ul>
				<li>Extra prefix followed by day of the current month</li>
				<li>Ex. FT-11</li>
					<ul>
						<li> FT = foreign train extra prefix</li>
						<li> -11 = operating on 11th day of current month</li>
					</ul>
				<li>Extra Train Codes</li>
					<ul>
						<li>AMTK = Amtrak</li>
						<li>CPRS = Canadian Pacific</li>
						<li>NS = Norfolk Southern</li>
						<li>HW = High/Wide</li>
						<li>OCS = Office Car Special</li>
						<li>EX = Miscellaneous Extra</li>
					</ul>
	</ol>

<h3>II. Symbol Plan Details</h3>
	<ol>
		<li>Destination</li>
			<ul>
				<li>FOREIGN = leaves the system to foreign road</li>
				<li>TURN = returns to origin location</li>
			</ul>
		<li>Scheduled Markup</li>
			<ul>
				<li>Time of scheduled crew arrival shown here</li>
				<li>AS REQUIRED = crew arrival time not set in advance (on call)</li>
			</ul>
		<li>Crew</li>
			<ul>
				<li>LOCAL POOL = Fleetwood Division Crew 
					<ul>
						<li>(Monday - Friday, 9AM-9PM)</li>
					</ul>
				<li>EXTRA POOL = Fleetwood Division Crew</li>
					<ul>
						<li>(Monday - Friday, 9PM-9AM; Saturday; Sunday)</li>
					</ul>
				<li>PILOT = Crew member with additional qualifications than Fleetwood Division Crew Pool</li>
					
			</ul>
		<li>Status</li>
			<ul>
				<li>ACTIVE = Symbol currently active in lineup</li>
				<li>ANNULLED = Symbol not  current active in lineup</li>
			</ul>
		<li>Notes</li>
			<ul>
				<li>DLY = delayed</li>
				<li>EMG = train delay due to incident / emergency</li>
				<li>S/U = show up</li>
				<li>T/U = tied up</li>
	</ol>
	
<br/>

<!-- link to lineup page -->
<a href = "lineup.php">
<p style="font-size:x-large">Train Lineup</a>

<br/><br/>

<!-- link to operatingplan page -->
<a href = "operatingplan.php">
Operating Plan</p></a>

<br/><br/>

</body>

	<footer>

		<!-- report when the page was last updated in JS -->
		<script type="text/javascript">

		<!--
			var m = "<p>Last updated: " + document.lastModified;
			var p = m.length-3;
			document.write(m.substring(p, 0));
			document.writeln(" UTC</p>");
			-->

		</script>

	<!-- Navigation bar -->
	<?php 
		include ('../../navbar.php');
		echo "<br/><br/>";
		include ('../../sitemessage.php');
	?>



	</footer>

</html>

