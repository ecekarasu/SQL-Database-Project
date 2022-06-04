<?php
include "config.php";
?>
<link rel= "stylesheet" href= "style.css">
<title>delete a visitor</title>
<div align="center">
<br>
<h3>Choose the id of the visitor that you want to delete
<br>
<br>
<form action = "deletevisitor.php" method = "POST">
<select name = "vid">
<?php  
$sql_command = "SELECT vid FROM visitors";
$myresult = mysqli_query($db, $sql_command);
while($vid_rows = mysqli_fetch_assoc($myresult))
{
	$vid = $vid_rows['vid'];
	echo "<option value = $vid>" . $vid . "</option>";
}
?>
</div>
</select>
<br>
<button>DELETE</button>
</form> 

<?php

if(isset($_POST['vid']))
{
	$selection_vid = $_POST['vid'];
	$sql_statement = "DELETE FROM visitors WHERE vid = $selection_vid";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: indexvisitors.php");	
}
?>