<!DOCTYPE html>

<!-- Date: 5/9/2014 -->


<html>

<head>
  <title>Trouble Desk</title>
  
  <meta name="description" content="Trouble Desk">
	<meta name=viewport content="width=device-width, initial-scale=1"> <!-- Optimizes mobile device screen width -->

  
  <link rel="shortcut icon" type="image/x-icon" href="/cands.ico"/>
  <link rel="stylesheet" type="text/css" href="/styles.css"/>
</head>

<h1 style="color:#FF6600">Trouble Desk</h1>
</head>

<body>


<br/>

<!-- table with borders, list trouble tickets -->

<table border="1">

      <tr>
        <th>Ticket Number</th>
        <th>Location</th>
        <th>Description</th>
	<th>Date Reported</th>
	<th>Maintainer Called</th>
	<th>Est Repair Time</th>
      </tr>
    
      <tr>
        <td>001</td>
        <td>Cabin St LD 8.61</td>
        <td>Partial Activ</td>
	<td>2012-08-11 11:58</td>
	<td>N/A</td>
	<td></td>
      </tr>

      <tr>
        <td>002</td>
        <td>LD 8.63</td>
        <td>Main Track OOS - Tree</td>
	<td>2012-08-11 11:58</td>
	<td>N/A</td>
	<td></td>
      </tr>

      <tr>
        <td>003</td>
        <td>LD 8.55 TO<br/> LD 8.60</td>
        <td>QLT OOS</td>
	<td>2013-04-13 21:23</td>
	<td></td>
	<td>N/A</td>
      </tr>
    
    </table>

</body>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
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

