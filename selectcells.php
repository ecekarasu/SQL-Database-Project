<?php
include "config.php";

?>
<div align="center">
<br>
<h3>You will see the cells with more capacity than the number you entered
<form action = "selectcells.php" method = "POST">
<br>
<input type="text" name="min_capacity" placeholder="Minimum Capacity">
<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>select cells</title>
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
if(isset($_POST['min_capacity']))
{
	$capacity = $_POST['min_capacity'];
	$sql_deneme = "SELECT * FROM cells WHERE capacity > '$capacity'";
	$denemeque = mysqli_query($db, $sql_deneme);
	while($row = mysqli_fetch_assoc($denemeque)) { ?>
	<tr>
		<td><?php echo $row['cell_no']; ?></td>
		<td><?php echo $row['capacity']; ?></td>
	</tr>
<?php }	
}
?>
<button>FILTER</button>
</form>
<form action = "indexcells.php" method = "POST">
	<button>RETURN</button>
</form>