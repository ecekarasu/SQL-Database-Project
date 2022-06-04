<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<title>contain page</title>
</head>
<body>
<div align=center>
<h2>CONTAIN
<br>
<h3> Here are the current relationships between the cells and the prisons:
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
include "contain.php"
?>
<div align=center>
<br>
<br>
<form action="insertcontain.php" method="POST">
<button>INSERT</button>
</form>
<br>
<form action="deletecontain.php" method="POST">
<button>DELETE</button>
</form>
<br>
<form action="selectcontain.php" method="POST">
<button>SELECT</button>
</form>
</body>
</div>
</html>