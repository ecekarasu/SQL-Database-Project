<?php
include "config.php";

?>

<form action = "selectprotected_by.php" method = "POST">
<input type="text" name="pname" placeholder="The Name of Prison">
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
    <th>gid</th>
  </tr>

<?php
if(isset($_POST['pname']))
{
	$pname = $_POST['pname'];
	$sql_deneme = "SELECT * FROM protected_by WHERE pname = '$pname'";
	$denemeque = mysqli_query($db, $sql_deneme);
	while($row = mysqli_fetch_assoc($denemeque)) { ?>
	<tr>
		<td><?php echo $row['pname']; ?></td>
		<td><?php echo $row['gid']; ?></td>
	</tr>
<?php }	
}
?>
<button>FILTER</button>
</form>
<form action = "indexprotected_by.php" method = "POST">
	<button>RETURN</button>
</form>