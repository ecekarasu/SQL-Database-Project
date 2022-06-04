<?php
include "config.php";

?>

<form action = "selectguardians.php" method = "POST">
<input type="text" name="min_hours" placeholder="The Minimum Working Hours">
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Guardians</title>
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
  <tr>
    <th>gid</th>
    <th>gname</th>
    <th>working_hours</th>
  </tr>

<?php
if(isset($_POST['min_hours']))
{
	$hours = $_POST['min_hours'];
	$sql_deneme = "SELECT * FROM guardians WHERE hours > '$hours'";
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