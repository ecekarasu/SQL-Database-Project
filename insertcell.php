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
<form action="insertcell.php" method="POST">
	<input type="text" name="cell_no" placeholder="The number">
	<br>
	<input type="text" name="capacity" placeholder="The capacity">
	<br>
	<button>INSERT</button>
</form>
</div>
<?php
if(isset($_POST['cell_no']))
{
	$cell_no = $_POST['cell_no'];
	$capacity = $_POST['capacity'];
	$sql_statement = "INSERT INTO cells(cell_no, capacity) VALUES ('$cell_no', '$capacity')";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: indexcells.php");	
}
?>