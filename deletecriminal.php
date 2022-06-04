<?php
include "config.php";
?>

<form action = "deletecriminal.php" method = "POST">
<select name = "cid">
<?php  
$sql_command = "SELECT cid FROM criminals";
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
	$sql_statement = "DELETE FROM criminals WHERE cid = $selection_cid";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: indexcriminals.php");	
}
?>