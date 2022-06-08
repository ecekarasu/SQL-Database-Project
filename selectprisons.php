<?php
include "config.php";

?>
<div align="center">
<br>
<h3>You will see the prisons in the location you entered
<form action = "selectprisons.php" method = "POST">
<br>
<input type="text" name="location" placeholder="The Location">
<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>select prisons</title>
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
if(isset($_POST['location']))
{
	$location = $_POST['location'];
	$sql_deneme = "SELECT * FROM prisons WHERE location = '$location'";
	$denemeque = mysqli_query($db, $sql_deneme);
	while($row = mysqli_fetch_assoc($denemeque)) { ?>
	<tr>
		<td><?php echo $row['pname']; ?></td>
		<td><?php echo $row['population']; ?></td>
		<td><?php echo $row['location']; ?></td>
	</tr>
<?php }	
}
?>
<button>FILTER</button>
</form>
<form action = "indexprisons.php" method = "POST">
	<button>RETURN</button>
</form>