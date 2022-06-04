<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<title>have page</title>
</head>
<body>
<div align=center>
<h2>HAVE
<br>
<h3> Here are the current relationships between the criminals and the visitors:
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
include "have.php"
?>
<div align=center>
<br>
<br>
<form action="inserthave.php" method="POST">
<button>INSERT</button>
</form>
<br>
<form action="deletehave.php" method="POST">
<button>DELETE</button>
</form>
<br>
<form action="selecthave.php" method="POST">
<button>SELECT</button>
</form>
</body>
</div>
</html>