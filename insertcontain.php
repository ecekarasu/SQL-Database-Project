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
	<input type="text" name="cell_no" placeholder="The cell number">
	<br>
	<input type="text" name="number_of" placeholder="The number of the cells">
	<br>
	<button>INSERT</button>
</form>
</div>
<?php
if(isset($_POST['pname']) AND isset($_POST['cell_no']))
{
	$pname = $_POST['pname'];
	$cell_no = $_POST['cell_no'];
	$number_of = $_POST['number_of'];
	$sql_statement = "INSERT INTO contain(pname, cell_no, number_of) VALUES ('$pname', '$cell_no', '$number_of')";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: indexcontain.php");	
}
?>