<meta charset="utf-8">
<?php
session_start();
include("connect.php");


$eduid=$_POST['eduid'];
$eduname=$_POST['eduname'];
$educode=$_POST['educode'];
$edumoo=$_POST['edumoo'];
$edusoi=$_POST['edusoi'];
$eduroad=$_POST['eduroad'];
$province=$_POST['province'];
$amphur=$_POST['amphur'];
$district=$_POST['district'];
$edupostid=$_POST['edupostid'];
$eduweb=$_POST['eduweb'];
$edutel=$_POST['edutel'];



$sql_insert="INSERT INTO `$dbname`.`education`";
$sql_insert.= "(`education_id`, `education_name`, `education_code`, `education_moo`, `education_soi`, `education_road`, `education_province`, `education_amphur`,`education_district`,`education_post`,`education_web`,`education_tel`)";
$sql_insert.= "VALUES ('".$eduid."','".$eduname."','".$educode."','".$edumoo."','".$edusoi."','".$eduroad."','".$province."','".$amphur."','".$district."','".$edupostid."','".$eduweb."','".$edutel."');";
mysql_query($sql_insert) or die(mysql_error());
$sql_result=mysql_query($sql_insert);





echo "<meta http-equiv='refresh' content='1;URL=adminedu.php'>";

exit;

?>