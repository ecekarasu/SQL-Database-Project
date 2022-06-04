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
<form action="insertprotected_by.php" method="POST">
	<input type="text" name="pname" placeholder="The name of the prison">
	<br>
	<input type="text" name="gid" placeholder="The id of the guardian">
	<br>
	<button>INSERT</button>
</form>
</div>
<?php
if(isset($_POST['pname']) AND isset($_POST['gid']))
{
	$pname = $_POST['pname'];
	$gid = $_POST['gid'];
	$sql_statement = "INSERT INTO protected_by(pname, gid) VALUES ('$pname', '$gid')";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: indexprotected.php");	
}
?>