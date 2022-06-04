<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<div align = center>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>insert a prison</title>
	<br>
	<h3>Enter the information of the prison that you want to insert
</head>
<body>

</body>
</html>

<?php

include "config.php";
?>
<br>
<br>
<form action="insertprison.php" method="POST">
	<input type="text" name="pname" placeholder="The name">
	<br>
	<input type="text" name="population" placeholder="The population">
	<br>
	<input type="text" name="location" placeholder="The location">
	<br>
	<button>INSERT</button>
</form>
</div>
<?php
if(isset($_POST['pname']))
{
	$pname = $_POST['pname'];
	$population = $_POST['population'];
	$location = $_POST['location'];
	$sql_statement = "INSERT INTO prisons(pname, population, location) VALUES ('$pname', '$population', '$location')";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: indexprisons.php");	
}
?>