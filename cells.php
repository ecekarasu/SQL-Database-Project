<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
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
<div align="center">
<table>
  <tr>
    <th>cell_no</th>
    <th>capacity</th>
  </tr>

<?php

include "config.php";
$sql_statement = "SELECT * FROM cells";
$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
	$cell_no = $row['cell_no'];
	$capacıty = $row['capacity'];
  echo "<tr>" . "<th>" . $cell_no . "</th>" . "<th>" . $capacıty . "</th>" . "</tr>";
}

?>

</table>
</div>
</body>
</html>