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
<form action="inserthave.php" method="POST">
	<input type="text" name="cid" placeholder="The id of the criminal">
	<br>
	<input type="text" name="vid" placeholder="The id of the visitor">
	<br>
	<button>INSERT</button>
</form>
</div>
<?php
if(isset($_POST['cid']) AND isset($_POST['vid']))
{
	$cid = $_POST['cid'];
	$vid = $_POST['vid'];
	$sql_statement = "INSERT INTO have(cid, vid) VALUES ('$cid', '$vid')";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: indexhave.php");	
}
?>