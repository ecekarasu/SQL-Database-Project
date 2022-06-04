<?php
include "config.php";

?>

<form action = "selectcontain.php" method = "POST">
<input type="text" name="number_of" placeholder="Enter a minimum number of cells">
<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>select relationships</title>
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
    <th>pname</th>
    <th>cell_no</th>
    <th>number_of</th>
  </tr>

<?php
if(isset($_POST['number_of']))
{
	$number_of = $_POST['number_of'];
	$sql_deneme = "SELECT * FROM contain WHERE number_of > '$number_of'";
	$denemeque = mysqli_query($db, $sql_deneme);
	while($row = mysqli_fetch_assoc($denemeque)) { ?>
	<tr>
		<td><?php echo $row['pname']; ?></td>
		<td><?php echo $row['cell_no']; ?></td>
		<td><?php echo $row['number_of']; ?></td>
	</tr>
<?php }	
}
?>
<button>FILTER</button>
</form>
<form action = "indexcontain.php" method = "POST">
	<button>RETURN</button>
</form>