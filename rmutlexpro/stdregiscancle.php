<meta charset="utf-8">
<?php
session_start();
include("connect.php");


$yearid=$_GET['yearid'];
$termid=$_GET['termid'];
$stdsave_id=$_SESSION['student_id']+$yearid+$termid;


	$strSQL1 = "DELETE FROM studentsave ";
	$strSQL1 .="WHERE studentsave_id = '$stdsave_id' ";
	$objQuery1 = mysql_query($strSQL1);




$strSQL = "UPDATE student SET year_id = '100',term_id = '10' WHERE student_id ='".$_SESSION['student_id']."'";
$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{

	echo "<meta http-equiv='refresh' content='1;URL=stdpro.php'>";

}else{
	echo "Error Save [".$strSQL."]";
}


?>