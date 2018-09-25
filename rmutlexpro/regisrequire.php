<meta charset="utf-8">
<?php
session_start();
include("connect.php");

$std_id=$_POST['std_code'];
$std_title=$_POST['name_title'];
$std_name=$_POST['std_fname'];
$std_lname=$_POST['std_lname'];

$class=$_POST['class'];
$faculty=$_POST['faculty'];
$course=$_POST['course'];
$branch=$_POST['branch'];
$password=$_POST['password'];

$sqlpic = "INSERT INTO images (id_image) VALUES ('$std_id')";
mysql_query($sqlpic) or die(mysql_error());


$sql_insert="INSERT INTO `$dbname`.`regis`";
$sql_insert.= "(`std_id`, `title_id`, `std_name`, `std_lname`, `faculty_id`, `course_id`, `branch_id`, `class_id` , `std_password`,`indentity_id`, `date_regis`, `active`)";
$sql_insert.= "VALUES ('".$std_id."','".$std_title."','".$std_name."','".$std_lname."','".$faculty."','".$course."','".$branch."','".$class."','".$password."','3','".$print_date_eng."','0');";
mysql_query($sql_insert) or die(mysql_error());
$sql_result=mysql_query($sql_insert);


$sql_insert2="INSERT INTO `$dbname`.`student`";
$sql_insert2.= "(`student_id`, `title_id`, `student_name`, `student_lname`, `faculty_id`, `course_id`, `branch_id`, `year_id`, `term_id`, `class_id`, `student_Advisors`, `student_password`,`indentity_id`, `date_regis`, `active`, `profile_id`, `edu_id`, `trainer_id`, `teacher_id`)";
$sql_insert2.= "VALUES ('".$std_id."','".$std_title."','".$std_name."','".$std_lname."','".$faculty."','".$course."','".$branch."','100','10','".$class."','.','".$password."','3','".$print_date_eng."','0','.','.','.','.');";


mysql_query($sql_insert2) or die(mysql_error());
$sql_result=mysql_query($sql_insert2);




echo "<meta http-equiv='refresh' content='1;URL=waitregis.php'>";

exit;

?>