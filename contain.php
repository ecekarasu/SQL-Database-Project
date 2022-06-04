<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contain</title>
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
<div align="center">
<table>
  <tr>
    <th>pname</th>
    <th>cell_no</th>
    <th>number_of</th>
  </tr>

<?php

include "config.php";
$sql_statement = "SELECT * FROM contain";
$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
	$pname = $row['pname'];
	$cell_no = $row['cell_no'];
	$number_of = $row['number_of'];
	echo "<tr>" . "<th>" . $pname . "</th>" . "<th>" . $cell_no . "</th>" . "<th>" . $number_of . "</th>" . "</tr>";
}

?>

</table>
</div>
</body>
</html>