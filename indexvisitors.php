<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<title>visitors_page</title>
</head>
<body>
<div align=center>
<h2>VISITORS
<br>
<h3> Here are the current visitors:
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
include "visitors.php"
?>
<div align=center>
<br>
<br>
<form action="insertvisitor.php" method="POST">
<button>INSERT</button>
</form>
<br>
<form action="deletevisitor.php" method="POST">
<button>DELETE</button>
</form>
<br>
<form action="selectvisitors.php" method="POST">
<button>SELECT</button>
</form>
</body>
</div>
</html>