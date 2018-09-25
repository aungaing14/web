<meta charset="utf-8">
<?php
session_start();
include("connect.php");  

$student_id=$_GET['student_id'];
$abstractname=$_POST['abstractname'];

$strSQL = "UPDATE abstract SET abstract_name = '$abstractname',abstract_date = '$print_date_eng' WHERE abstract_id =$student_id";
$objQuery = mysql_query($strSQL) or die(mysql_error());

echo "<meta http-equiv='refresh' content='1;URL=stdabstract.php'>";


?>