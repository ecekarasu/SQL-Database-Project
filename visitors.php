<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Visitors</title>
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
    <th>vid</th>
    <th>visiting_time</th>
    <th>relation</th>
  </tr>

<?php

include "config.php";
$sql_statement = "SELECT * FROM visitors";
$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
	$vid = $row['vid'];
	$visiting_time = $row['visiting_time'];
	$relation = $row['relation'];
	echo "<tr>" . "<th>" . $vid . "</th>" . "<th>" . $visiting_time . "</th>" . "<th>" . $relation . "</th>" . "</tr>";
}

?>

</table>
</div>
</body>
</html>