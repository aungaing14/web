<meta charset="utf-8">
<?php
session_start();
include("connect.php");  

$student_id=$_GET['student_id'];
$abstractname=$_POST['abstractname'];

$strSQL = "SELECT * FROM student WHERE student_id = '$student_id' ";
$objQuery = mysql_query($strSQL) or die(mysql_error());
$nti=mysql_fetch_array($objQuery);

$slterm=$nti['term_id'];

$sql_insert="INSERT INTO `$dbname`.`abstract`";
$sql_insert.= "(`abstract_id`,`term_id`, `abstract_name`, `abstract_date`)";
$sql_insert.= "VALUES ('".$student_id."','".$slterm."','".$abstractname."','$print_date_eng');";


mysql_query($sql_insert) or die(mysql_error());
$sql_result=mysql_query($sql_insert); 
echo "<meta http-equiv='refresh' content='1;URL=stdabstract.php'>";


?>