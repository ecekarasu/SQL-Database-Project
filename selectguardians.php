<?php
include "config.php";

?>
<div align="center">
<br>
<h3>You will see the guardians who work more than the number you entered
<form action = "selectguardians.php" method = "POST">
<br>
<input type="text" name="min_hours" placeholder="Working Hours">
<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>select guardians</title>
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
if(isset($_POST['min_hours']))
{
	$hours = $_POST['min_hours'];
	$sql_deneme = "SELECT * FROM guardians WHERE working_hours > '$hours'";
	$denemeque = mysqli_query($db, $sql_deneme);
	while($row = mysqli_fetch_assoc($denemeque)) { ?>
	<tr>
		<td><?php echo $row['gid']; ?></td>
		<td><?php echo $row['gname']; ?></td>
		<td><?php echo $row['working_hours']; ?></td>
	</tr>
<?php }	
}
?>
<button>FILTER</button>
</form>
<form action = "indexguardians.php" method = "POST">
	<button>RETURN</button>
</form>