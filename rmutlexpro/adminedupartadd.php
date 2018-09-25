<meta charset="utf-8">
<?php
session_start();
include("connect.php");

$education_name=$_POST['education_name'];
$edupart=$_POST['edupart'];
$eduparthead=$_POST['eduparthead'];
$edupartid=$_POST['edupartid'];



$sql_insert="INSERT INTO `$dbname`.`educationpart`";
$sql_insert.= "(`educationpart_id`, `educationpart_name`, `educationpart_head`, `education_id`)";
$sql_insert.= "VALUES ('".$edupartid."','".$edupart."','".$eduparthead."','".$education_name."');";


mysql_query($sql_insert) or die(mysql_error());
$sql_result=mysql_query($sql_insert);
echo "<meta http-equiv='refresh' content='1;URL=adminedu.php'>";

exit;

?>