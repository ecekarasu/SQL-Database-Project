<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<title>defended_by page</title>
</head>
<body>
<div align=center>
<h2>DEFENDED_BY
<br>
<h3> Here are the current relationships between the lawyers and the criminals in the database:
<br>
<br>
</div>
<style>
div {
  border-radius: 1px;
  background-color: #FFE4C4;
  padding: 1px;
}
</style>
<?php
include "defended_by.php"
?>
<div align=center>
<br>
<br>
<form action="insertdefended_by.php" method="POST">
<button>INSERT</button>
</form>
<br>
<form action="deletedefended_by.php" method="POST">
<button>DELETE</button>
</form>
<br>
<form action="selectdefended_by.php" method="POST">
<button>SELECT</button>
</form>
</body>
<div align=center>
</html>