<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<div align = center>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>insert a realtionship</title>
</head>
<body>

</body>
</html>

<?php

include "config.php";
?>
<form action="insertdefended_by.php" method="POST">
	<input type="text" name="cid" placeholder="The id of the criminal">
	<br>
	<input type="text" name="lid" placeholder="The id of the lawyer">
	<br>
	<button>INSERT</button>
</form>
</div>
<?php
if(isset($_POST['lid']) AND isset($_POST['cid']))
{
	$cid = $_POST['cid'];
	$lid = $_POST['lid'];
	$sql_statement = "INSERT INTO defended_by(cid, lid) VALUES ('$cid', '$lid')";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: indexdefended_by.php");	
}
?>