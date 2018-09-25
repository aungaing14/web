<meta charset="utf-8">
<?php
session_start();
include("connect.php");
$student_id=$_GET['student_id'];


$saddressnow_id=$student_id+'10000000000';
$saddresshome_id=$student_id+'100000000000';
$stdprofile_id=$student_id+'1';



$strSQL1 = "DELETE FROM saddressnow ";
$strSQL1 .="WHERE saddressnow_id = '$saddressnow_id' ";
$objQuery1 = mysql_query($strSQL1);

$strSQL2 = "DELETE FROM saddresshome ";
$strSQL2 .="WHERE saddresshome_id = '$saddresshome_id' ";
$objQuery2 = mysql_query($strSQL2);

$strSQL3 = "DELETE FROM stdprofile ";
$strSQL3 .="WHERE profile_id = '$stdprofile_id' ";
$objQuery3 = mysql_query($strSQL3);

$strSQL4 = "DELETE FROM studentsave ";
$strSQL4 .="WHERE student_id = '$student_id' ";
$objQuery4 = mysql_query($strSQL4);

$strSQL5 = "DELETE FROM images ";
$strSQL5 .="WHERE id_image = '$student_id' ";
$objQuery5 = mysql_query($strSQL5);


$strSQL = "DELETE FROM student ";
$strSQL .="WHERE student_id = '$student_id' ";
$objQuery = mysql_query($strSQL);
if($objQuery){
echo "<meta http-equiv='refresh' content='1;URL=adminstd.php'>";
}else
{
echo "Error Delete [".$strSQL."]";
}


exit;

?>