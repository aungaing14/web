<meta charset="utf-8">
<?php
session_start();
include("connect.php");
$year_id=$_GET['year_id'];



$strSQL1 = "DELETE FROM termyear WHERE year_id = '$year_id' ";
$objQuery1 = mysql_query($strSQL1);

$strSQL = "DELETE FROM year WHERE year_id = '$year_id'";
$objQuery = mysql_query($strSQL);
if($objQuery){
	
	echo "<meta http-equiv='refresh' content='1;URL=adminyear.php'>";
}else
{
echo "Error Delete [".$strSQL."]";
}


exit;

?>