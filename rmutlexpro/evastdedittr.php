 <meta charset="utf-8">
<?php
session_start();
include("connect.php");
set_time_limit(0);
$stdid=$_GET['studentid'];
$trainerid=$_GET['trainerid'];
$lessionid=$_GET['lessionid'];
$date_eva=$_POST['date_eva'];



$strSQLa = "UPDATE lessionevatr SET lessionevatr_score = '0',lessionevatr_date='$date_eva' WHERE lessionevatr_id ='$lessionid'";
		$objQuerya = mysql_query($strSQLa) or die(mysql_error());
	




foreach( $_POST['question_id'] as $id){


$save=$_POST['nall'.$id];

 $strSQL = "UPDATE lessionevatr SET q$id = '$save' WHERE lessionevatr_id ='$lessionid'";
$objQuery = mysql_query($strSQL) or die(mysql_error());


$sql = "SELECT subquestion_score FROM subquestion WHERE subquestion_id='$id'";
	$result = mysql_query($sql);
	while($rs1 = mysql_fetch_array($result)){
				$sum=$rs1['subquestion_score']*$save;


		$sql = "SELECT lessionevatr_score FROM lessionevatr WHERE lessionevatr_id='$lessionid'";
		$result = mysql_query($sql);
		while($rs = mysql_fetch_array($result)){
		$ans=$rs['lessionevatr_score']+$sum;
		
		
		$strSQLb = "UPDATE lessionevatr SET lessionevatr_score = '$ans' WHERE lessionevatr_id ='$lessionid'";
		$objQueryb = mysql_query($strSQLb) or die(mysql_error());

		}

}


foreach( $_POST['question_id'] as $id){
	$ment=$_POST['ment'.$id];

$strSQL = "UPDATE lessionevamenttrainer SET q$id = '$ment' WHERE lessionevamenttrainer_id ='$lessionid'";
$objQuery = mysql_query($strSQL) or die(mysql_error());





}
}

echo "<meta http-equiv='refresh' content='1;URL=trainereva.php'>";		

 
?>