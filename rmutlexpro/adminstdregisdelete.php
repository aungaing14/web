<meta charset="utf-8">
<?php
session_start();
include("connect.php");
$student_id=$_GET['student_id'];




$strSQL = "DELETE FROM regis ";
$strSQL .="WHERE std_id = '$student_id' ";
$objQuery = mysql_query($strSQL);
if($objQuery){
echo "<meta http-equiv='refresh' content='1;URL=adminstd.php'>";
}else
{
echo "Error Delete [".$strSQL."]";
}


exit;

?>