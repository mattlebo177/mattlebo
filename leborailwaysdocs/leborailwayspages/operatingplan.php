<!DOCTYPE html>

<!-- Date: 5/5/2014 -->


<html>

<head>
  <title>Operating Plan</title>
  
  <meta name="description" content="Operating Plan">
	<meta name=viewport content="width=device-width, initial-scale=1"> <!-- Optimizes mobile device screen width -->

  
  <link rel="shortcut icon" type="image/x-icon" href="/tande.ico"/>
  <link rel="stylesheet" type="text/css" href="/styles.css"/>
</head>

<h1 style="color:#78FB44">Operating Plan</h1>
</head>

<body>


<br/>

<!-- table with borders, list trouble tickets -->

<table border="1">
	<p>Static Symbol Plan</p>
      <tr>
        <th>Symbol</th>
        <th>Origin</th>
        <th>Destination</th>
	<th>Scheduled Markup</th>
	<th>Crew</th>
	<th>Status</th>
	<th>Notes</th>
      </tr>
    
      <tr>
        <td>CAQA</td>
        <td>CHT</td>
        <td>TURN</td>
	<td>AS REQUIRED</td>
	<td>LOCAL POOL</td>
	<td>ACTIVE</td>
	<td>S/U 9AM</td>
      </tr>

      <tr>
        <td>QACA</td>
        <td>QLT</td>
        <td>CHT</td>
	<td>AS REQUIRED</td>
	<td>LOCAL POOL</td>
	<td>ANNULLED</td>
	<td></td>
      </tr>

      <tr>
        <td>FT</td>
        <td>N/A</td>
        <td>N/A</td>
	<td>AS REQUIRED</td>
	<td>EXTRA POOL W/ PILOT</td>
	<td>ANNULLED</td>
	<td></td>
      </tr>

      <tr>
        <td>HW</td>
        <td>N/A</td>
        <td>N/A</td>
	<td>AS REQUIRED</td>
	<td>EXTRA POOL</td>
	<td>ANNULLED</td>
	<td>requires clearance form, extra crew member watching at all times for clearance issues</td>
      </tr>

      <tr>
        <td>OCS</td>
        <td>N/A</td>
        <td>N/A</td>
	<td>AS REQUIRED</td>
	<td>EXTRA POOL W/ PASSENGER TRN QUAL PILOT</td>
	<td>ANNULLED</td>
	<td></td>
      </tr>
     
    
    </table>

<br/>
<br/>
<br/>
<br/>

<!-- link to lineup page -->
<a href = "lineup.php">
<p style="font-size:x-large">Train Lineup</a>

<br/><br/>

<!-- link to operatingplan_help page -->
<a href = "operatingplan_help.php">
Operating Plan Help</p></a>

</body>
<br/><br/><br/><br/><br/>
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

