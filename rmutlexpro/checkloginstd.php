<meta charset="utf-8">
<?php
session_start();
include("connect.php");
/*
* 1 = admin
* 2 = teacher
* 3 = student
* 4 = trianer
*/

$usernamestd=$_POST['usernamestd'];
$passwordstd=$_POST['passwordstd'];


if($usernamestd==''){
	echo"ตรวจสอบ Username";

}else if($passwordstd==''){ 
	echo"ตรวจสอบ password"; 
}else{
	$sql=mysql_query("SELECT * FROM student WHERE student_id = '$usernamestd' AND student_password = '$passwordstd' ");
	$num=mysql_num_rows($sql);
	if($num <= 0){
		echo "<meta http-equiv='refresh' content='1;URL=loginstd.php'>";
	}else{
		while($user=mysql_fetch_array($sql)){
			if($user['indentity_id']==3){
				$_SESSION['ses_id']=session_id();
				$_SESSION['student_id']=$user['student_id'];
				$_SESSION['indentity_id']=$user['indentity_id'];
				$_SESSION['active']=$user['active'];
				echo "<meta http-equiv='refresh' content='1;URL=stdpro.php'>";
			}else{
				echo "<meta http-equiv='refresh' content='1;URL=loginstd.php'>";
			}
		}
	}
}
?>