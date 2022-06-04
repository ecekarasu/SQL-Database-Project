<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<div align = center>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>insert a criminal</title>
	<br>
	<h3>Enter the information of the criminal that you want to insert
</head>
<body>

</body>
</html>

<?php

include "config.php";
?>
<br>
<br>
<form action="insertcriminal.php" method="POST">
	<input type="text" name="cid" placeholder="The id">
	<br>
	<input type="text" name="cname" placeholder="The name">
	<br>
	<input type="text" name="crime" placeholder="The crime">
	<br>
	<input type="text" name="punishment" placeholder="Punishment (in years)">
	<br>
	<button>INSERT</button>
</form>
</div>
<?php
if(isset($_POST['cid']))
{
	$cid = $_POST['cid'];
	$cname = $_POST['cname'];
	$crime = $_POST['crime'];
	$punishment = $_POST['punishment'];
	$sql_statement = "INSERT INTO criminals(cid, cname, crime, punishment) VALUES ('$cid', '$cname', '$crime', '$punishment')";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: indexcriminals.php");	
}
?>