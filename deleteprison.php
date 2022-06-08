<?php
include "config.php";
?>
<link rel= "stylesheet" href= "style.css">
<title>delete a prison</title>
<div align="center">
<br>
<h3>Choose the name of the prison that you want to delete
<br>
<br>
<form action = "deleteprison.php" method = "POST">
<select name = "pname">
<?php  
$sql_command = "SELECT pname FROM prisons";
$myresult = mysqli_query($db, $sql_command);
while($pname_rows = mysqli_fetch_assoc($myresult))
{
	$pname = $pname_rows['pname'];
	echo "<option value = $pname>" . $pname . "</option>";
}
?>
</div>
</select>
<br>
<button>DELETE</button>
</form> 

<?php

if(isset($_POST['pname']))
{
	$selection_pname = $_POST['pname'];
	$sql_statement = "DELETE FROM prisons WHERE pname = '$selection_pname'";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: indexprisons.php");	
}
?>