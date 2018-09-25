<meta charset="utf-8">
<?php
session_start();
include("connect.php");


$txtstudent_name=$_POST['txtstudent_name'];
$txtstudent_lname=$_POST['txtstudent_lname'];
$student_Advisors=$_POST['student_Advisors'];

$strSQL1 = "UPDATE studentsave SET studentsave_name = '$txtstudent_name',studentsave_lname = '$txtstudent_lname', studentsave_Advisors = '$student_Advisors' WHERE student_id ='".$_SESSION['student_id']."'";
$objQuery1 = mysql_query($strSQL1) or die(mysql_error());

$strSQL = "UPDATE student SET student_name = '$txtstudent_name',student_lname = '$txtstudent_lname', student_Advisors = '$student_Advisors' WHERE student_id ='".$_SESSION['student_id']."'";
$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{
	echo "<meta http-equiv='refresh' content='1;URL=stdpro.php'>";
}else{
	echo "Error Save [".$strSQL."]";
}


?>