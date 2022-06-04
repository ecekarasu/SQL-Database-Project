<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<title>prisons page</title>
</head>
<body>
<div align=center>
<h2>PRISONS
<br>
<h3> Here are the current prisons:
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
include "prisons.php"
?>
<div align=center>
<br>
<br>
<form action="insertprison.php" method="POST">
<button>INSERT</button>
</form>
<br>
<form action="deleteprison.php" method="POST">
<button>DELETE</button>
</form>
<br>
<form action="selectprisons.php" method="POST">
<button>SELECT</button>
</form>
</body>
</div>
</html>