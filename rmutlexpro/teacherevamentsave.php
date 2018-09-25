<meta charset="utf-8">
<?php
session_start();
include("connect.php");



$teacherid=$_GET['teacherid'];
$studentid=$_GET['studentid'];
$lession_id=$_POST['lession_id'];
$teacherevamentsave=$_POST['teacherevamentsave'];
$dateeva=$_POST['dateeva'];


 

$sql_insert="INSERT INTO `$dbname`.`teacherment`";
$sql_insert.= "(`teacherment_id`, `teacherment_student`, `teacherment_teacher`, `teacherment_date`, `teacherment_name`)";
$sql_insert.= "VALUES ('".$lession_id."','".$studentid."','".$teacherid."','$dateeva','".$teacherevamentsave."');";


mysql_query($sql_insert) or die(mysql_error());
$sql_result=mysql_query($sql_insert);
echo "<meta http-equiv='refresh' content='1;URL=teachereva.php'>";

exit;

?>