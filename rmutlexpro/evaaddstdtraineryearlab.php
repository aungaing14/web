 <meta charset="utf-8">
<?php
session_start();
include("connect.php"); 
set_time_limit(0);
$stdid=$_GET['studentid'];
$date=$_POST['date'];
$trainerid=$_GET['trainerid'];


$stm="SELECT * FROM student WHERE student_id ='$stdid'";
$tm = mysql_query($stm);
$sh = mysql_fetch_array($tm);
$term=$sh['term_id'];
$lessionid=$stdid+$term; 

 
$sql_inserta="INSERT INTO `lessionevamenttrainerlab` (`lessionevamenttrainer_id`,`lessionevamenttrainer_student`,`lessionevamenttrainer_trainer`) VALUES ('".$lessionid."','".$stdid."','".$trainerid."');";



$sql_resulta=mysql_query($sql_inserta);


$sql_insert1="INSERT INTO `lessionevatrlab` (`lessionevatr_id`,`term_id`,`lessionevatr_student`,`lessionevatr_date`,`lessionevatr_trainer`) VALUES ('".$lessionid."','".$term."','".$stdid."','$date','".$trainerid."');";



$sql_result1=mysql_query($sql_insert1);

if ($sql_result1) {
	 




foreach( $_POST['question_id'] as $id){

$save=$_POST['nall'.$id];


$strSQL = "UPDATE lessionevalab SET q$id = '$save' WHERE lessioneva_id ='$lessionid'";
$objQuery = mysql_query($strSQL) or die(mysql_error());

$strSQLa = "UPDATE lessionevatrlab SET q$id = '$save' WHERE lessionevatr_id ='$lessionid'";
$objQuerya = mysql_query($strSQLa) or die(mysql_error());


$sql = "SELECT subquestion_score FROM subquestionlab WHERE subquestion_id='$id'";
	$result = mysql_query($sql);
	while($rs1 = mysql_fetch_array($result)){
		$sum=$rs1['subquestion_score']*$save;
 

		$sql = "SELECT lessionevatr_score FROM lessionevatrlab WHERE lessionevatr_id='$lessionid'";
		$result = mysql_query($sql);
		while($rs = mysql_fetch_array($result)){
		$ans=$rs['lessionevatr_score']+$sum;
		
		
		$strSQL6 = "UPDATE lessionevatrlab SET lessionevatr_score = '$ans' WHERE lessionevatr_id ='$lessionid'";
		$objQuery6 = mysql_query($strSQL6) or die(mysql_error());

		}

}


foreach( $_POST['question_id'] as $id){
	$ment=$_POST['ment'.$id];



	$strSQLb = "UPDATE lessionevamenttrainerlab SET q$id = '$ment' WHERE lessionevamenttrainer_id ='$lessionid'";
	$objQueryb = mysql_query($strSQLb) or die(mysql_error());



 
}

		
}

echo "<meta http-equiv='refresh' content='1;URL=trainereva.php'>";

} else

echo "<meta http-equiv='refresh' content='1;URL=evaaddstderrortr.php'>";

exit;
 
?> 