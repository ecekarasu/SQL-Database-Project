<!DOCTYPE html>
<html>
<link rel= "stylesheet" href= "style.css">
<head>
	<title>stay_in page</title>
</head>
<body>
<div align=center>
<H2>STAY_IN
<br>
<h3> Here are the current relationships between the criminals and the cells:
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
include "stay_in.php"
?>
<div align=center>
<br>
<br>
<form action="insertstay_in.php" method="POST">
<button>INSERT</button>
</form>
<br>
<form action="deletestay_in.php" method="POST">
<button>DELETE</button>
</form>
<br>
<form action="selectstay_in.php" method="POST">
<button>SELECT</button>
</form>
</body>
</div>
</html>