<meta charset="utf-8">
<?php
session_start();
include("connect.php");


$yearid=$_POST['yearid'];
$termid=$_POST['termid'];
$stdsave_id=$_SESSION['student_id']+$yearid+$termid;



$strSQL = "UPDATE student SET year_id = '$yearid',term_id = '$termid' WHERE student_id ='".$_SESSION['student_id']."'";
$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{	
	$sql = "SELECT student_id,title_id,student_name,student_lname,faculty_id,course_id,branch_id,year_id,term_id,class_id,student_Advisors,student_password,indentity_id,profile_id,saddressnow_id,	saddresshome_id,edu_id,edupart_id,trainer_id,teacher_id FROM student WHERE student_id='".$_SESSION['student_id']."'";
	$result = mysql_query($sql);
	while($rs = mysql_fetch_array($result))
	{
	$sql = "INSERT INTO studentsave (studentsave_id,student_id,title_id,studentsave_name,studentsave_lname,faculty_id,course_id,branch_id,year_id,term_id,class_id,studentsave_Advisors,studentsave_password,indentity_id,profile_id,saddressnow_id,saddresshome_id,edu_id,edupart_id,trainer_id,teacher_id) VALUES ('".$stdsave_id."','".$rs['student_id']."','".$rs['title_id']."','".$rs['student_name']."','".$rs['student_lname']."','".$rs['faculty_id']."','".$rs['course_id']."','".$rs['branch_id']."','".$rs['year_id']."','".$rs['term_id']."','".$rs['class_id']."','".$rs['student_Advisors']."','".$rs['student_password']."','".$rs['indentity_id']."','".$rs['profile_id']."','".$rs['saddressnow_id']."','".$rs['saddresshome_id']."','".$rs['edu_id']."','".$rs['edupart_id']."','".$rs['trainer_id']."','".$rs['teacher_id']."')";
	mysql_query($sql);
	$strSQL1 = "UPDATE studentsave SET year_id = '$yearid',term_id = '$termid' WHERE studentsave_id ='$stdsave_id'";
$objQuery1 = mysql_query($strSQL1) or die(mysql_error());
	}
	echo "<meta http-equiv='refresh' content='1;URL=stdregis.php'>";
}else{
	echo "Error Save [".$strSQL."]";
}


?>