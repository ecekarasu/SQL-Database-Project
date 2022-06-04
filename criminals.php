<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Criminals</title>
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
    <th>cid</th>
    <th>cname</th>
    <th>crime</th>
    <th>punishment</th>
  </tr>

<?php

include "config.php";
$sql_statement = "SELECT * FROM criminals";
$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
	$cid = $row['cid'];
	$cname = $row['cname'];
	$crime = $row['crime'];
	$punishment = $row['punishment'];
	echo "<tr>" . "<th>" . $cid . "</th>" . "<th>" . $cname . "</th>" . "<th>" . $crime . "</th>" . "<th>" . $punishment . "</th>" . "</tr>";
}

?>

</table>
</div>
</body>
</html>