<?php
include "config.php";

?>

<form action = "selectcells.php" method = "POST">
<input type="text" name="min_capacity" placeholder="The Minimum Capacity:">
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cells</title>
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
    <th>cell_no</th>
    <th>capacity</th>
  </tr>

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