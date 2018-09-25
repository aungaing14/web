<meta charset="utf-8">
<?php
session_start();
include("connect.php");
$termyear_id=$_GET['termyear_id']; 



$strSQL = "UPDATE termyear SET active = '0' WHERE termyear_id = '$termyear_id' ";
$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{
	$strSQL = "UPDATE student SET year_id = '100',term_id='10',edu_id='0',edupart_id='0',trainer_id='.',teacher_id='.'";
	$objQuery = mysql_query($strSQL) or die(mysql_error());


	echo "<meta http-equiv='refresh' content='1;URL=adminyear.php'>";
}else{
	echo "Error Save [".$strSQL."]";
}


 

exit;

?> 