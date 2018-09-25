<meta charset="utf-8">
<?php
session_start();
include("connect.php");
$teacher_id=$_GET['teacher_id'];




$strSQL = "DELETE FROM teacher ";
$strSQL .="WHERE teacher_id = '$teacher_id' ";
$objQuery = mysql_query($strSQL);
if($objQuery){
echo "<meta http-equiv='refresh' content='1;URL=adminteacher.php'>";
}else
{
echo "Error Delete [".$strSQL."]";
}


exit;

?>