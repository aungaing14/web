<meta charset="utf-8">
<?php 
session_start();
include("connect.php");
set_time_limit(0);
$stdid=$_GET['studentid'];
$teacherid=$_GET['teacherid'];
$lessionid=$_GET['lessionid'];
$date=$_POST['date'];


$stm="SELECT * FROM student WHERE student_id ='$stdid'";
$tm = mysql_query($stm);
$sh = mysql_fetch_array($tm);
$term=$sh['term_id'];


$sql_insert2="INSERT INTO `lessionevament` (`lessionevament_id`,`lessionevament_student`,`lessionevament_teacher`) VALUES ('".$lessionid."','".$stdid."','".$teacherid."');";



$sql_result2=mysql_query($sql_insert2);


$sql_insert1="INSERT INTO `lessioneva` (`lessioneva_id`,`term_id`,`lessioneva_student`,`lessioneva_date`,`lessioneva_teacher`) VALUES ('".$lessionid."','".$term."','".$stdid."','".$date."','".$teacherid."');";



$sql_result1=mysql_query($sql_insert1);

if ($sql_result1) {
	 




foreach( $_POST['question_id'] as $id){

$save=$_POST['nall'.$id];


$strSQL = "UPDATE lessioneva SET q$id = '$save' WHERE lessioneva_id ='$lessionid'";
$objQuery = mysql_query($strSQL) or die(mysql_error());


$sql = "SELECT subquestion_score FROM subquestion WHERE subquestion_id='$id'";
	$result = mysql_query($sql);
	while($rs1 = mysql_fetch_array($result)){
		$sum=$rs1['subquestion_score']*$save;
 

		$sql = "SELECT lession_score FROM lession WHERE lession_id='$lessionid'";
		$result = mysql_query($sql);
		while($rs = mysql_fetch_array($result)){
		$ans=$rs['lession_score']+$sum;
		
		
		$strSQL6 = "UPDATE lession SET lession_score = '$ans' WHERE lession_id ='$lessionid'";
		$objQuery6 = mysql_query($strSQL6) or die(mysql_error());
		$strSQLa = "UPDATE lessioneva SET lessioneva_score = '$ans' WHERE lessioneva_id ='$lessionid'";
		$objQuerya = mysql_query($strSQLa) or die(mysql_error());

		}

}


foreach( $_POST['question_id'] as $id){
	$ment=$_POST['ment'.$id];


	$strSQL = "UPDATE lessionevament SET q$id = '$ment' WHERE lessionevament_id ='$lessionid'";
	$objQuery = mysql_query($strSQL) or die(mysql_error());




}

		
}

echo "<meta http-equiv='refresh' content='1;URL=teachereva.php'>";

} else

echo "<meta http-equiv='refresh' content='1;URL=evaaddstderror.php'>";

exit;
 
?>