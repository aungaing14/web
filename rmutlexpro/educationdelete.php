<meta charset="utf-8">
<?php
session_start();
include("connect.php");
$education_id=$_GET['education_id'];



 
$strSQL = "DELETE FROM education WHERE education_id = '$education_id' ";
$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery){
	$strSQL1 = "DELETE FROM educationpart WHERE education_id = '$education_id' ";
$objQuery1 = mysql_query($strSQL1) or die(mysql_error());
echo "<meta http-equiv='refresh' content='1;URL=adminedu.php'>";
}else
{
echo "Error Delete [".$strSQL."]";
}


exit;

?>