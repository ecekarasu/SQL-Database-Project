<?php
include "config.php";
?>

<form action = "deleteprotected_by.php" method = "POST">
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
</select>
<br>
<button>DELETE</button>
</form> 

<?php

if(isset($_POST['pname']))
{
	$selection_pname = $_POST['pname'];
	$sql_statement = "DELETE FROM protected_by WHERE pname = $selection_pname";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: index.php");	
}
?>