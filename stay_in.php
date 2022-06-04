 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Stay-In</title>
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
    <th>cell_no</th>
    <th>since</th>
  </tr>

<?php

include "config.php";
$sql_statement = "SELECT * FROM stay_in";
$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $cid = $row['cid'];
  $cell_no = $row['cell_no'];
  $since = $row['since'];
  echo "<tr>" . "<th>" . $cid . "</th>" . "<th>" . $cell_no . "</th>" . "<th>" . $since. "</th>" . "</tr>";
}

?>

</table>
</div>
</body>
</html>