<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<div align = center>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>insert a visitor</title>
</head>
<body>

</body>
</html>

<?php

include "config.php";
?>
<form action="insertvisitor.php" method="POST">
	<input type="text" name="vid" placeholder="The id">
	<br>
	<input type="text" name="visiting_time" placeholder="Visiting time (8-18)">
	<br>
	<input type="text" name="relation" placeholder="The relation">
	<br>
	<button>INSERT</button>
</form>
</div>
<?php
if(isset($_POST['vid']))
{
	$vid = $_POST['vid'];
	$visiting_time = $_POST['visiting_time'];
	$relation = $_POST['relation'];
	$sql_statement = "INSERT INTO visitors(vid, visiting_time, relation) VALUES ('$vid', '$visiting_time', '$relation')";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: indexvisitors.php");	
}
?>