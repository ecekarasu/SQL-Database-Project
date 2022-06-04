<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<title>criminals page</title>
</head>
<body>
<div align=center>
<h2>CRIMINALS
<br>
<h3> Here are the current criminals:
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
include "criminals.php"
?>
<div align=center>
<br>
<br>
<form action="insertcriminal.php" method="POST">
<button>INSERT</button>
</form>
<br>
<form action="deletecriminal.php" method="POST">
<button>DELETE</button>
</form>
<br>
<form action="selectcriminals.php" method="POST">
<button>SELECT</button>
</form>
</body>
</div>
</html>