<?php
include "config.php";

?>
<div align="center">
<br>
<h3>You will see the lawyers with cost more than the number you entered
<form action = "selectlawyers.php" method = "POST">
<br>
<input type="text" name="min_cost" placeholder="The Minimum Cost">
<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>select lawyers</title>
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
if(isset($_POST['min_cost']))
{
	$cost = $_POST['min_cost'];
	$sql_deneme = "SELECT * FROM lawyers WHERE cost > '$cost'";
	$denemeque = mysqli_query($db, $sql_deneme);
	while($row = mysqli_fetch_assoc($denemeque)) { ?>
	<tr>
		<td><?php echo $row['lid']; ?></td>
		<td><?php echo $row['cost']; ?></td>
		<td><?php echo $row['name']; ?></td>
	</tr>
<?php }	
}
?>
<button>FILTER</button>
</form>
<form action = "indexlawyers.php" method = "POST">
	<button>RETURN</button>
</form>