<meta charset="utf-8">
<?php 
session_start();
include("connect.php");
set_time_limit(0);
$stdid=$_GET['studentid'];
$teacherid=$_GET['teacherid'];
$lessionid=$_GET['lessionid'];
$date_eva=$_POST['date_eva'];


$strSQL6 = "UPDATE lessionlab SET lession_score = '0' WHERE lession_id ='$lessionid'";
		$objQuery6 = mysql_query($strSQL6) or die(mysql_error());
$strSQLa = "UPDATE lessionevalab SET lessioneva_score = '0',lessioneva_date='$date_eva' WHERE lessioneva_id ='$lessionid'";
		$objQuerya = mysql_query($strSQLa) or die(mysql_error());
	




foreach( $_POST['question_id'] as $id){


$save=$_POST['nall'.$id];

 $strSQL = "UPDATE lessionevalab SET q$id = '$save' WHERE lessioneva_id ='$lessionid'";
$objQuery = mysql_query($strSQL) or die(mysql_error());


$sql = "SELECT subquestion_score FROM subquestionlab WHERE subquestion_id='$id'";
	$result = mysql_query($sql);
	while($rs1 = mysql_fetch_array($result)){
				$sum=$rs1['subquestion_score']*$save;


		$sql = "SELECT lession_score FROM lessionlab WHERE lession_id='$lessionid'";
		$result = mysql_query($sql);
		while($rs = mysql_fetch_array($result)){
		$ans=$rs['lession_score']+$sum;
		
		
		$strSQL6 = "UPDATE lessionlab SET lession_score = '$ans' WHERE lession_id ='$lessionid'";
		$objQuery6 = mysql_query($strSQL6) or die(mysql_error());
		$strSQLb = "UPDATE lessionevalab SET lessioneva_score = '$ans' WHERE lessioneva_id ='$lessionid'";
		$objQueryb = mysql_query($strSQLb) or die(mysql_error());

		}

}


foreach( $_POST['question_id'] as $id){
	$ment=$_POST['ment'.$id];

$strSQL = "UPDATE lessionevamentlab SET q$id = '$ment' WHERE lessionevament_id ='$lessionid'";
$objQuery = mysql_query($strSQL) or die(mysql_error());





}
}

echo "<meta http-equiv='refresh' content='1;URL=teachereva.php'>";		

 
?>