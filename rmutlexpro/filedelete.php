<meta charset="utf-8">
<?php
session_start();
include("connect.php");




$file_id=addslashes($_GET['file_id']);
$file_file=addslashes($_GET['file_file']);











		$strSQL = "SELECT * FROM file WHERE file_id ='$file_id' ";
		$objQuery = mysql_query($strSQL) or die (mysql_error());
		while($objResult = mysql_fetch_array($objQuery)){
			@unlink("fileupload/".$objResult['file_file']);

			@unlink("fileupload/".$_POST['file_file']);

$strSQL1 = "DELETE FROM file ";
$strSQL1 .="WHERE file_id = '$file_id' ";
$objQuery1 = mysql_query($strSQL1);
}

echo "<meta http-equiv='refresh' content='1;URL=cfile.php'>";
mysql_close();



?>