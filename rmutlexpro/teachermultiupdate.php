<meta charset="utf-8">
<?php
session_start();
include("connect.php");



$teacher_id=$_GET['teacher_id']; 

$idselect=implode(",",$_POST['student_id']);


$sql="UPDATE studentsave SET teacher_id='$teacher_id' WHERE student_id in($idselect) AND teacher_id='0'";
$result=mysql_query($sql) or die(mysql_error());

$sql2="UPDATE student SET teacher_id='$teacher_id' WHERE student_id in($idselect)";
$result2=mysql_query($sql2) or die(mysql_error());



if ($result2){

	echo "<meta http-equiv='refresh' content='1;URL=adminteacher.php'>";

}else{
	echo "เกิดข้อผิดพลาด";
}



?>