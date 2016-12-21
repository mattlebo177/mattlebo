<!DOCTYPE html>

<!-- 12/18/2016 -->

<html>

	<head>
		<title>About Me</title>
	
		<meta name="description" content="About Matt Lebo">
		<meta name=viewport content="width=device-width, initial-scale=1"> <!-- Optimizes mobile device screen width -->
	
		<link rel="icon" type="image/x-icon" href="/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="/styles.css">
	</head>
	
	<body>
		<h1>About Me</h1>
		
		<h3>Hello World!</h3>
			<p>I am Matt Lebo, and I have been interested in computers and the internet ever since I got my first computer (A Packard Bell desktop PC running Windows 95) 
			in the late '90s. In 2007, I began my first website. I experimented with hosting services, and then moved on to hosting my own content with Linux and Apache.
			I experimented with Ubuntu, CentOS, and Debian. If you are looking for a great way to kill time and learn web programming at the same time, build your own website today!
			This website is running on a $35 Raspberry Pi running a modified version of Debian. 
			<br/><br/>
			
			<h3>Why run your own website?</h3>
			<p>You don't have to be a large corportation to run a website; all that is needed is a 
			cheap dedicated computer running on an always-on internet connection. Today's popular webservers (Apache and NGINX) are free to download and install. This is what makes the internet
			and the web a wonderful commication tool; it has very low barriers to entry! With today's smartphones, tablets, cellular broadband data networks, and
			 omnipresent wifi access points, the internet can be accessed just about anywhere. The simple act of creating a website gives you immediate worldwide presence.</p>

		<br/><br/>
		
		<!-- image of rpi size -->
		<figure>
			<img src="/images/raspberry_pi_size.jpg" title="code editing" alt="code editing" width="800px" height="450px">
			<figcaption>This is the size of the webserver hosting this site.</figcaption>
		</figure>
		<br/><br/>
		
		<!-- image of code -->
		<figure>
			<img src="/images/codeediting.png" title="code editing" alt="code editing" width="900px" height="500px">
			<figcaption>Web Programming only requires a simple text editor such as Notepad++ (shown above).</figcaption>
		</figure>
		<br/><br/>

		<!-- Server Specs -->
		<h3>Curent Server:</h3>
			<p>Dell PowerEdge R710<br/>
				<br/>
				Processor: 2x Intel Xeon Quad Core X5570 @ 2.93GHz<br/>
				Ram: 48GB DDR3 1066MHz ECC<br/>
				HDD: 2x 146GB Hitachi 10K SAS (RAID 1)<br/>
				Host OS: VMWare ESXi 6.0.0 U2<br/>
				Guest OS's: Debian 8, CentOS 7
				Remote Management: iDRAC 6 Enterprise<br/>
				Webserver Software: NGINX / PHP5 / Vsftpd</p>
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