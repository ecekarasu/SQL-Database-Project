<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<title>protected_by page</title>
</head>
<body>
<div align=center>
<h2>PROTECTED_BY
<br>
<h3> Here are the current protection relationships:
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
include "protected_by.php"
?>
<div align=center>
<br>
<br>
<form action="insertprotected_by.php" method="POST">
<button>INSERT</button>
</form>
<br>
<form action="deleteprotected_by.php" method="POST">
<button>DELETE</button>
</form>
<br>
<form action="selectprotected_by.php" method="POST">
<button>SELECT</button>
</form>
</body>
</div>
</html>