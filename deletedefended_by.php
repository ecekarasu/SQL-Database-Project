<?php
include "config.php";
?>
<link rel= "stylesheet" href= "style.css">
<title>delete a relationship</title>
<div align="center">
<br>
<h3>Choose the id of the criminal that you want to delete
<br>
<br>
<form action = "deletedefended_by.php" method = "POST">
<select name = "cid">
<?php  
$sql_command = "SELECT cid FROM defended_by";
$myresult = mysqli_query($db, $sql_command);
while($cid_rows = mysqli_fetch_assoc($myresult))
{
	$cid = $cid_rows['cid'];
	echo "<option value = $cid>" . $cid . "</option>";
}
?>
</select>
<br>
<button>DELETE</button>
</form> 

<?php

if(isset($_POST['cid']))
{
	$selection_cid = $_POST['cid'];
	$sql_statement = "DELETE FROM defended_by WHERE cid = $selection_cid";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: indexdefended_by.php");	
}
?>