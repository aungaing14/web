<meta charset="utf-8">
<?php
session_start();
include("connect.php");


$txtadmin_name=$_POST['txtadmin_name'];
$txtadmin_lname=$_POST['txtadmin_lname'];



$strSQL = "UPDATE admin SET admin_name = '$txtadmin_name',admin_lname = '$txtadmin_lname' WHERE admin_id ='".$_SESSION['admin_id']."'";
$objQuery = mysql_query($strSQL) or die(mysql_error());


if($objQuery)
{
	$strSQLa = "SELECT * FROM admin WHERE admin_id ='".$_SESSION['admin_id']."'";
	$objQuerya = mysql_query($strSQLa) or die(mysql_error());
	$ntia=mysql_fetch_array($objQuerya);
	$id=$ntia['indentity_id'];
	if ($id==1) {
		echo "<meta http-equiv='refresh' content='1;URL=admin.php'>";
	}else if($id==5){
		echo "<meta http-equiv='refresh' content='1;URL=cadmin.php'>";
	}
	
	
}else{
	echo "Error Save [".$strSQL."]";
}


?>