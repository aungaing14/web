<meta charset="utf-8">
<?php
session_start();
include("connect.php");


$education=$_POST['education'];
$educationpart=$_POST['educationpart'];

$strSQL1 = "UPDATE studentsave SET edu_id = '$education',edupart_id = '$educationpart' WHERE student_id ='".$_SESSION['student_id']."'";
$objQuery1 = mysql_query($strSQL1) or die(mysql_error());

$strSQL = "UPDATE student SET edu_id = '$education',edupart_id = '$educationpart' WHERE student_id ='".$_SESSION['student_id']."'";
$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{
	
	echo "<meta http-equiv='refresh' content='1;URL=stdpro.php'>";
}else{
	echo "Error Save [".$strSQL."]";
}


?>