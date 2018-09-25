<meta charset="utf-8">
<?php
session_start();
include("connect.php");

$user_id=$_POST['user_id'];
$user_title=$_POST['name_title'];
$user_name=$_POST['user_name'];
$user_lname=$_POST['user_lname'];
$faculty=$_POST['faculty'];
$course=$_POST['course'];
$branch=$_POST['branch'];
$indentity=$_POST['indentity'];


$sqlpic = "INSERT INTO images (id_image) VALUES ('$user_id')";
mysql_query($sqlpic) or die(mysql_error());

$sql_insert="INSERT INTO `$dbname`.`admin`";
$sql_insert.= "(`admin_id`, `title_id`, `admin_name`, `admin_lname`, `faculty_id`, `course_id`, `branch_id`, `admin_password`,`indentity_id`)";
$sql_insert.= "VALUES ('".$user_id."','".$user_title."','".$user_name."','".$user_lname."','".$faculty."','".$course."','".$branch."','123456','".$indentity."');";


mysql_query($sql_insert) or die(mysql_error());
$sql_result=mysql_query($sql_insert);
echo "<meta http-equiv='refresh' content='1;URL=cadminuser.php'>";

exit;

?>