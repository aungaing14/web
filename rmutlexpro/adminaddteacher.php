<meta charset="utf-8">
<?php
session_start();
include("connect.php");

$teacher_id=$_POST['teacher_id'];
$teacher_title=$_POST['name_title'];
$teacher_name=$_POST['teacher_name'];
$teacher_lname=$_POST['teacher_lname'];
$teacher_email=$_POST['teacher_email'];
$teacher_tel=$_POST['teacher_tel'];
$faculty=$_POST['faculty'];
$course=$_POST['course'];
$branch=$_POST['branch'];


$sqlpic = "INSERT INTO images (id_image) VALUES ('$teacher_id')";
mysql_query($sqlpic) or die(mysql_error());


$sql_insert="INSERT INTO `$dbname`.`teacher`";
$sql_insert.= "(`teacher_id`, `title_id`, `teacher_name`, `teacher_lname`, `teacher_email`, `teacher_tel`, `faculty_id`, `course_id`, `branch_id`, `teacher_password`,`indentity_id`)";
$sql_insert.= "VALUES ('".$teacher_id."','".$teacher_title."','".$teacher_name."','".$teacher_lname."','".$teacher_email."','".$teacher_tel."','".$faculty."','".$course."','".$branch."','123456','2');";


mysql_query($sql_insert) or die(mysql_error());
$sql_result=mysql_query($sql_insert);
echo "<meta http-equiv='refresh' content='1;URL=adminteacher.php'>";

exit;

?>