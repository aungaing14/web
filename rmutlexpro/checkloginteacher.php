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

$username=$_POST['usernameteacher'];
$password=$_POST['passwordteacher'];


if($username==''){
	echo"ตรวจสอบ Username";

}else if($password==''){
	echo"ตรวจสอบ password";
}else{
	$sql1=mysql_query("SELECT * FROM teacher WHERE teacher_id = '$username' AND teacher_password = '$password' ") or die(mysql_error()) ;
	$num=mysql_num_rows($sql1);
	if($num <= 0){
		echo "<meta http-equiv='refresh' content='1;URL=loginteacher.php'>";
	}else{
		while($user=mysql_fetch_array($sql1)){
			if($user['indentity_id']==2){
				$_SESSION['ses_id']=session_id();
				$_SESSION['teacher_id']=$user['teacher_id'];
				$_SESSION['indentity_id']=$user['indentity_id'];
				echo "<meta http-equiv='refresh' content='1;URL=teacher.php'>";
			}else{
				echo "<meta http-equiv='refresh' content='1;URL=loginteacher.php'>";
			}
		}
	}
}
?>