<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lawyers</title>
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
    <th>lid</th>
    <th>cost</th>
    <th>name</th>
  </tr>

<?php

include "config.php";
$sql_statement = "SELECT * FROM lawyers";
$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
	$lid = $row['lid'];
	$cost = $row['cost'];
	$name = $row['name'];
	echo "<tr>" . "<th>" . $lid . "</th>" . "<th>" . $cost . "</th>" . "<th>" . $name . "</th>" . "</tr>";
}

?>

</table>
</div>
</body>
</html>