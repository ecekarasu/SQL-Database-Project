<?php
include "config.php";
?>
<link rel= "stylesheet" href= "style.css">
<title>delete a guardian</title>
<div align="center">
<br>
<h3>Choose the id of the guardian that you want to delete
<br>
<br>
<form action = "deleteguardian.php" method = "POST">
<select name = "gid">
<?php  
$sql_command = "SELECT gid FROM guardians";
$myresult = mysqli_query($db, $sql_command);
while($gid_rows = mysqli_fetch_assoc($myresult))
{
	$gid = $gid_rows['gid'];
	echo "<option value = $gid>" . $gid . "</option>";
}
?>
</select>
<br>
<button>DELETE</button>
</form> 

<?php

if(isset($_POST['gid']))
{
	$selection_gid = $_POST['gid'];
	$sql_statement = "DELETE FROM guardians WHERE gid = $selection_gid";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: indexguardians.php");	
}
?>