<!-- adds horizontal navigation menu to main webpages
Last modified: 10/25/2019  -->

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
body {margin:10px;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
</style>
</head>

<!-- NEW STYLE -->
<ul>
	<li><a href="/">Home</a></li>
	<li><a href="/employeedocs/">Employee Portal</a></li>
	<li><a href="/radio/">Amateur Radio</a></li>
	<li><a href="/drones/">Drones</a></li>
	<li><a href="/contacts.php">Contact Me</a></li>
	<li><a href="/photos/">Misc Photos</a></li>
	<li><a href="/misclinks.php">Misc Links</a></li>
	<li style="float:right"><a href="/aboutme.php">About</a></li>
</ul>
<br/><br/><br/>
</html>