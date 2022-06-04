<?php
include "config.php";

?>
<div align="center">
<br>
<h3>You will see the visitors with the same relation that you entered
<form action = "selectvisitors.php" method = "POST">
<br>
<input type="text" name="relation" placeholder="The Relation">
<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>select visitors</title>
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<table>
</div>
<?php
if(isset($_POST['relation']))
{
	$relation = $_POST['relation'];
	$sql_deneme = "SELECT * FROM visitors WHERE relation = '$relation'";
	$denemeque = mysqli_query($db, $sql_deneme);
	while($row = mysqli_fetch_assoc($denemeque)) { ?>
	<tr>
		<td><?php echo $row['vid']; ?></td>
		<td><?php echo $row['visiting_time']; ?></td>
		<td><?php echo $row['relation']; ?></td>
	</tr>
<?php }	
}
?>
<button>FILTER</button>
</form>
<form action = "indexvisitors.php" method = "POST">
	<button>RETURN</button>
</form>