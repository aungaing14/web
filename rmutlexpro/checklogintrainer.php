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

$username=$_POST['usernametrainer'];
$password=$_POST['passwordtrainer'];


if($username==''){
	echo"ตรวจสอบ Username";

}else if($password==''){
	echo"ตรวจสอบ password";
}else{
	$sql1=mysql_query("SELECT * FROM trainer WHERE trainer_id = '$username' AND trainer_password = '$password' ") or die(mysql_error()) ;
	$num=mysql_num_rows($sql1);
	if($num <= 0){
		echo "<meta http-equiv='refresh' content='1;URL=logintrainer.php'>";
	}else{
		while($user=mysql_fetch_array($sql1)){
			if($user['indentity_id']==4){
				$_SESSION['ses_id']=session_id();
				$_SESSION['trainer_id']=$user['trainer_id'];
				$_SESSION['indentity_id']=$user['indentity_id'];
				echo "<meta http-equiv='refresh' content='1;URL=trainer.php'>";
			}else{
				echo "<meta http-equiv='refresh' content='1;URL=logintrainer.php'>";
			}
		}
	}
}
?>