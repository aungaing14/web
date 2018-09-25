<meta charset="utf-8">
<?php
session_start();
include("connect.php");
$educationpart_id=$_GET['educationpart_id'];




$strSQL = "DELETE FROM educationpart ";
$strSQL .="WHERE educationpart_id = '$educationpart_id' ";
$objQuery = mysql_query($strSQL);
if($objQuery){
echo "<meta http-equiv='refresh' content='1;URL=adminedu.php'>";
}else
{
echo "Error Delete [".$strSQL."]";
}


exit;

?>