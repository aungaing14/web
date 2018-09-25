<meta charset="utf-8">
<?php
session_start();
include("connect.php");
$admin_id=$_GET['admin_id'];


$strSQLa = "DELETE FROM images ";
$strSQLa .="WHERE id_image = '$admin_id' ";
$objQuerya = mysql_query($strSQLa);

$strSQL = "DELETE FROM admin ";
$strSQL .="WHERE admin_id = '$admin_id' ";
$objQuery = mysql_query($strSQL);
if($objQuery){
echo "<meta http-equiv='refresh' content='1;URL=cadminuser.php'>";
}else
{
echo "Error Delete [".$strSQL."]";
}


exit;

?>