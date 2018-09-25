<meta charset="utf-8">
<?php
session_start();
include("connect.php");


$txtedupart_id=$_POST['txtedupart_id'];
$txtedupart_name=$_POST['txtedupart_name'];
$txtedupart_head=$_POST['txtedupart_head'];



$strSQL = "UPDATE educationpart SET educationpart_name = '$txtedupart_name',educationpart_head = '$txtedupart_head' WHERE educationpart_id =$txtedupart_id";
$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{
	echo "<meta http-equiv='refresh' content='1;URL=adminedu.php'>";
}else{
	echo "Error Save [".$strSQL."]";
}


?>