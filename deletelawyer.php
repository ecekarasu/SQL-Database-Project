<?php
include "config.php";
?>

<form action = "deletelawyer.php" method = "POST">
<select name = "lid">
<?php  
$sql_command = "SELECT lid FROM lawyers";
$myresult = mysqli_query($db, $sql_command);
while($lid_rows = mysqli_fetch_assoc($myresult))
{
	$lid = $lid_rows['lid'];
	echo "<option value = $lid>" . $lid . "</option>";
}
?>
</select>
<br>
<button>DELETE</button>
</form> 

<?php

if(isset($_POST['lid']))
{
	$selection_lid = $_POST['lid'];
	$sql_statement = "DELETE FROM lawyers WHERE lid = $selection_lid";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: indexlawyers.php");	
}
?>