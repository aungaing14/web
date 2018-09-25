<meta charset="utf-8">
<?php
session_start();
include("connect.php");
$trainer_id=$_GET['trainer_id'];




$strSQL1 = "DELETE FROM images ";
$strSQL1 .="WHERE id_image = '$trainer_id' ";
$objQuery1 = mysql_query($strSQL1);

$strSQL = "DELETE FROM trainer ";
$strSQL .="WHERE trainer_id = '$trainer_id' ";
$objQuery = mysql_query($strSQL);
if($objQuery){
echo "<meta http-equiv='refresh' content='1;URL=admintrainer.php'>";
}else
{
echo "Error Delete [".$strSQL."]";
}


exit;

?>