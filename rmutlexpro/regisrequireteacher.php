<meta charset="utf-8">
<?php
session_start();
include("connect.php");

$teacher_id=$_POST['teacher_code'];
$teacher_title=$_POST['name_title'];
$teacher_name=$_POST['teacher_fname'];
$teacher_lname=$_POST['teacher_lname'];
$faculty=$_POST['faculty'];
$course=$_POST['course'];
$branch=$_POST['branch'];
$password=$_POST['password'];
$cpassword = $_POST['cpassword'];


$sql_insert1="INSERT INTO `$dbname`.`registeacher`";
$sql_insert1.= "(`teacher_id`, `title_id`, `teacher_name`, `teacher_lname`, `faculty_id`, `course_id`, `branch_id`, `teacher_password`, `teacher_cpassword`, `indentity_id`, `date_regis`, `active`)";
$sql_insert1.= "VALUES ('".$teacher_id."','".$teacher_title."','".$teacher_name."','".$teacher_lname."','".$faculty."','".$course."','".$branch."','".$password."','".$cpassword."','3','".$print_date_eng."','0');";


mysql_query($sql_insert1) or die(mysql_error());
$sql_result1=mysql_query($sql_insert1);
echo "<meta http-equiv='refresh' content='1;URL=waitregis.php'>";
exit;

?>