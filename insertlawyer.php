<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inserted</title>
</head>
<body>

</body>
</html>

<?php

include "config.php";
?>
<div align = center>
<form action="insertlawyer.php" method="POST">
	<input type="text" name="lid" placeholder="The id">
	<br>
	<input type="text" name="cost" placeholder="The cost (per case)">
	<br>
	<input type="text" name="name" placeholder="The name">
	<br>
	<button>INSERT</button>
</form>
</div>
<?php
if(isset($_POST['lid']))
{
	$lid = $_POST['lid'];
	$cost = $_POST['cost'];
	$name = $_POST['name'];
	$sql_statement = "INSERT INTO lawyers(lid, cost, name) VALUES ('$lid', '$cost', '$name')";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: indexlawyers.php");	
}
?>