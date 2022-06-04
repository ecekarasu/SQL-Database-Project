<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<title>cells page</title>
</head>
<body>
<div align=center>
<h2>CELLS
<br>
<h3> Here are the current cells:
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
include "cells.php"
?>
<div align=center>
<br>
<br>
<form action="insertcell.php" method="POST">
<button>INSERT</button>
</form>
<br>
<form action="deletecell.php" method="POST">
<button>DELETE</button>
</form>
<br>
<form action="selectcells.php" method="POST">
<button>SELECT</button>
</form>
</body>
</div>
</html>