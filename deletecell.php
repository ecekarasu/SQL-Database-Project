<?php
include "config.php";
?>
<link rel= "stylesheet" href= "style.css">
<title>delete a cell</title>
<div align="center">
<br>
<h3>Choose the cell number that you want to delete
<br>
<br>
<form action = "deletecell.php" method = "POST">
<select name = "cell_no">
<?php  
$sql_command = "SELECT cell_no FROM cells";
$myresult = mysqli_query($db, $sql_command);
while($cell_no_rows = mysqli_fetch_assoc($myresult))
{
	$cell_no = $cell_no_rows['cell_no'];
	echo "<option value = $cell_no>" . $cell_no . "</option>";
}
?>
</select>
<br>
<button>DELETE</button>
</form> 

<?php

if(isset($_POST['cell_no']))
{
	$selection_cell_no = $_POST['cell_no'];
	$sql_statement = "DELETE FROM cells WHERE cell_no = $selection_cell_no";
	$result = mysqli_query($db, $sql_statement);
	header ("Location: indexcells.php");	
}
?>