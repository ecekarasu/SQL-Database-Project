<?php
include "config.php";

?>

<form action = "selectdefended_by.php" method = "POST">
<input type="text" name="cid" placeholder="The id of the criminal">
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
    <th>lid</th>
    <th>cid</th>
  </tr>

<?php
if(isset($_POST['cid']))
{
	$cid = $_POST['cid'];
	$sql_deneme = "SELECT * FROM defended_by WHERE cid = '$cid'";
	$denemeque = mysqli_query($db, $sql_deneme);
	while($row = mysqli_fetch_assoc($denemeque)) { ?>
	<tr>
		<td><?php echo $row['lid']; ?></td>
		<td><?php echo $row['cid']; ?></td>
	</tr>
<?php }	
}
?>
<button>FILTER</button>
</form>
<form action = "indexdefended_by.php" method = "POST">
	<button>RETURN</button>
</form>