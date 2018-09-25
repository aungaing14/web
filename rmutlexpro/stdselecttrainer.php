 <meta charset="utf-8">
<?php
session_start();
include("connect.php");


$trainer1=$_POST['trainer1'];




$strSQL = "UPDATE student SET trainer_id = '$trainer1' WHERE student_id ='".$_SESSION['student_id']."'";
$objQuery = mysql_query($strSQL) or die(mysql_error());
if($objQuery)
{
		$strSQL = "SELECT student_id,term_id,year_id FROM student WHERE student_id = '".$_SESSION['student_id']."' ";
		$objQuery = mysql_query($strSQL);
		while ($nti=mysql_fetch_array($objQuery)){  
		$savestd=($nti['term_id']+$nti['year_id']+$nti['student_id']);
		$strSQL1 = "UPDATE studentsave SET trainer_id = '$trainer1' WHERE studentsave_id ='$savestd'";
		$objQuery1 = mysql_query($strSQL1) or die(mysql_error());
		}  



		
		echo "<meta http-equiv='refresh' content='1;URL=stdpro.php'>";
	
}else{
	echo "Error Save [".$strSQL."]";
}


?>