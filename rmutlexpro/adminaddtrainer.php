<meta charset="utf-8"> 
<?php
session_start();
include("connect.php");

$trainer_id=$_POST['trainer_id'];
$name_title=$_POST['name_title'];
$trainer_name=$_POST['trainer_name'];
$trainer_lname=$_POST['trainer_lname'];
$education=$_POST['education'];
$educationpart=$_POST['educationpart'];
$trainer_tel=$_POST['trainer_tel'];


$sqlpic = "INSERT INTO images (id_image) VALUES ('$trainer_id')";
mysql_query($sqlpic) or die(mysql_error());



$sql_insert="INSERT INTO `$dbname`.`trainer`";
$sql_insert.= "(`trainer_id`, `title_id`, `trainer_name`, `trainer_lname`, `education_id`, `educationpart_id`, `trainer_password`, `trainer_tel`, `indentity_id`)";
$sql_insert.= "VALUES ('".$trainer_id."','".$name_title."','".$trainer_name."','".$trainer_lname."','".$education."','".$educationpart."','123456','".$trainer_tel."','4');";


mysql_query($sql_insert) or die(mysql_error());
$sql_result=mysql_query($sql_insert);
echo "<meta http-equiv='refresh' content='1;URL=admintrainer.php'>";

exit;

?>