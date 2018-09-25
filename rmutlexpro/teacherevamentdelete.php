<meta charset="utf-8">
<?php
session_start();
include("connect.php");
$teacherment_id=$_GET['teacherment_id'];

		$strSQL0 = "SELECT * FROM teacherment WHERE teacherment_id = '$teacherment_id' ";
		$objQuery0 = mysql_query($strSQL0) or die (mysql_error());
		$objResult0 = mysql_fetch_array($objQuery0);
			@unlink("img/".$objResult0['teacherment_name']);



$strSQL = "DELETE FROM teacherment ";
$strSQL .="WHERE teacherment_id = '$teacherment_id' ";
$objQuery = mysql_query($strSQL);



if($objQuery){
echo "<meta http-equiv='refresh' content='1;URL=teachereva.php'>";
}else
{
echo "Error Delete [".$strSQL."]";
}


exit;

?>