<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<title>lawyers page</title>
</head>
<body>
<div align=center>
<h2>LAWYERS
<br>
<h3> Here are the lawyers in database:
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
include "lawyers.php"
?>
<div align=center>
<br>
<br>
<form action="insertlawyer.php" method="POST">
<button>INSERT</button>
</form>
<br>
<form action="deletelawyer.php" method="POST">
<button>DELETE</button>
</form>
<br>
<form action="selectlawyers.php" method="POST">
<button>SELECT</button>
</form>
</body>
</div>
</html>