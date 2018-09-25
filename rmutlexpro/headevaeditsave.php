<meta charset="utf-8">
<?php
session_start();
include("connect.php");


$qfrm_id=$_POST['qfrm_id'];
$qfrm_name=$_POST['qfrm_name'];




$strSQL = "UPDATE question_frm SET qfrm_name = '$qfrm_name' WHERE qfrm_id ='$qfrm_id'";
$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{
	echo "<meta http-equiv='refresh' content='1;URL=adminevalution.php'>";
}else{
	echo "Error Save [".$strSQL."]";
}


?>