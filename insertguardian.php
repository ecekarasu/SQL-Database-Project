<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<div align = center>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>insert a guardian</title>
	<br>
	<h3>Enter the information of the guardian that you want to insert
</head>
<body>

</body>
</html>

<?php

include "config.php";
?>
<br>
<br>
<form action="insertguardian.php" method="POST">
	<input type="text" name="gid" placeholder="The id">
	<br>
	<input type="text" name="gname" placeholder="The name">
	<br>
	<input type="text" name="working_hours" placeholder="Working hours">
	<br>
	<button>INSERT</button>
</form>
</div>
<?php
if(isset($_POST['gid']))
{
	$gid = $_POST['gid'];
	$gname = $_POST['gname'];
	$working_hours = $_POST['working_hours'];
	$sql_statement = "INSERT INTO guardians(gid, gname, working_hours) VALUES ('$gid', '$gname', '$working_hours')";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: indexguardians.php");	
}
?>