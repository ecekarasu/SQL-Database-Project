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
<form action="insertstay_in.php" method="POST">
	<input type="text" name="cid" placeholder="The id of the criminal">
	<br>
	<input type="text" name="cell_no" placeholder="The cell number">
	<br>
	<input type="text" name="since" placeholder="The criminal stays since">
	<br>
	<button>INSERT</button>
</form>
</div>
<?php
if(isset($_POST['cid']) AND isset($_POST['cell_no']))
{
	$cid = $_POST['cid'];
	$cell_no = $_POST['cell_no'];
	$since = $_POST['since'];
	$sql_statement = "INSERT INTO stay_in(cid, cell_no, since) VALUES ('$cid', '$cell_no', '$since')";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: indexstay_in.php");
}
?>