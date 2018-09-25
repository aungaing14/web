<meta charset="utf-8">
<?php
session_start();
include("connect.php");


$student_id=$_GET['student_id'];
$year_id=$_GET['year_id'];
$term_id=$_GET['term_id'];
$studentsave_id=$student_id+$year_id+$term_id;

$strSQL1 = "UPDATE studentsave SET teacher_id = '0' WHERE studentsave_id ='$studentsave_id'";
$objQuery1 = mysql_query($strSQL1) or die(mysql_error());



$strSQL = "UPDATE student SET teacher_id = '0' WHERE student_id ='$student_id'";
$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{
	echo "<meta http-equiv='refresh' content='1;URL=adminteacher.php'>";
}else{
	echo "Error Save [".$strSQL."]";
}


?>