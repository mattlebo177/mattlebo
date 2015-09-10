<!DOCTYPE html>

<!-- Date: 5/5/2014 -->


<html>

<head>
  <title>Lineup</title>
  
  <meta name="description" content="Train Lineup">
	<meta name=viewport content="width=device-width, initial-scale=1"> <!-- Optimizes mobile device screen width -->

  
  <link rel="shortcut icon" type="image/x-icon" href="/tande.ico"/>
  <link rel="stylesheet" type="text/css" href="/styles.css"/> 
</head>

<h1 style="color:#78FB44">Train Lineup</h1>
</head>

<body>


<br/>

<!-- train lineup table -->

<table border="1">

      <tr>
        <th>&nbsp;Symbol&nbsp;</th>
        <th>&nbsp;Origin&nbsp;</th>
        <th>&nbsp;Destination&nbsp;</th>
	<th>&nbsp;Status&nbsp;</th>
	<th>&nbsp;Direction&nbsp;</th>
	<th>&nbsp;Last Updated&nbsp;</th>
	<th>&nbsp;Notes&nbsp;</th>
      </tr>
    
      <tr>
        <td></td>
        <td></td>
        <td></td>
	<td></td>
	<td></td>
	<td>05/05/2014</td>
	<td></td>
      </tr>

    </table>
<br/>
<br/>
<!-- link to operatingplan page -->
<a href = "operatingplan.php">
<p style="font-size:x-large">Operating Plan</a>

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

