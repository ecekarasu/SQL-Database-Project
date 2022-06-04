<?php
include "config.php";

?>

<form action = "selectprison.php" method = "POST">
<input type="text" name="location" placeholder="The Location">
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prisons
	</title>
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
    <th>population</th>
    <th>location</th>
  </tr>

<?php
if(isset($_POST['location']))
{
	$location = $_POST['location'];
	$sql_deneme = "SELECT * FROM low_security WHERE location > '$location'";
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