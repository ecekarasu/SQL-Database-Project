<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<title>guardians page</title>
</head>
<body>
<div align=center>
<h2>GUARDIANS
<br>
<h3> Here are the current guardians:
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
include "guardians.php"
?>
<div align=center>
<br>
<br>
<form action="insertguardian.php" method="POST">
<button>INSERT</button>
</form>
<br>
<form action="deleteguardian.php" method="POST">
<button>DELETE</button>
</form>
<br>
<form action="selectguardians.php" method="POST">
<button>SELECT</button>
</form>
</body>
</div>
</html>