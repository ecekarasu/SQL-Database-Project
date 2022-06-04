<?php
include "config.php";

?>
<div align="center">
<br>
<h3>You will see the criminals whose punishments are more than the number you entered
<form action = "selectcriminals.php" method = "POST">
<br>
<input type="text" name="min_punishment" placeholder="Minimum Punishment">
<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>select criminals</title>
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
if(isset($_POST['min_punishment']))
{
	$punishment = $_POST['min_punishment'];
	$sql_deneme = "SELECT * FROM criminals WHERE punishment > '$punishment'";
	$denemeque = mysqli_query($db, $sql_deneme);
	while($row = mysqli_fetch_assoc($denemeque)) { ?>
	<tr>
		<td><?php echo $row['cid']; ?></td>
		<td><?php echo $row['cname']; ?></td>
		<td><?php echo $row['crime']; ?></td>
		<td><?php echo $row['punishment']; ?></td>
	</tr>
<?php }	
}
?>
<button>FILTER</button>
</form>
<form action = "indexcriminals.php" method = "POST">
	<button>RETURN</button>
</form>