<?php
include "config.php";

?>

<form action = "selectstay_in.php" method = "POST">
<input type="text" name="since" placeholder="Enter a year">
<!DOCTYPE html>
<html><link rel= "stylesheet" href= "style.css">
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
    <th>cid</th>
    <th>cell_no</th>
    <th>since</th>
  </tr>

<?php
if(isset($_POST['since']))
{
	$number_of = $_POST['since'];
	$sql_deneme = "SELECT * FROM stay_in WHERE since < '$number_of'";
	$denemeque = mysqli_query($db, $sql_deneme);
	while($row = mysqli_fetch_assoc($denemeque)) { ?>
	<tr>
		<td><?php echo $row['cid']; ?></td>
		<td><?php echo $row['cell_no']; ?></td>
		<td><?php echo $row['since']; ?></td>
	</tr>
<?php }	
}
?>
<button>FILTER</button>
</form>
<form action = "indexstay_in.php" method = "POST">
	<button>RETURN</button>
</form>