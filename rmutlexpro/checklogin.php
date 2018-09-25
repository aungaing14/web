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

$username=$_POST['username'];
$password=$_POST['password'];


if($username==''){
	echo"ตรวจสอบ Username";

}else if($password==''){
	echo"ตรวจสอบ password";
}else{
	$sql=mysql_query("SELECT * FROM admin WHERE admin_id = '$username' AND admin_password = '$password' ");
	$num=mysql_num_rows($sql);
	if($num <= 0){
		echo "<meta http-equiv='refresh' content='1;URL=login.php'>";
	}else{
		while($user=mysql_fetch_array($sql)){
			if($user['indentity_id']==1){
				$_SESSION['ses_id']=session_id();
				$_SESSION['admin_id']=$user['admin_id'];
				$_SESSION['indentity_id']=$user['indentity_id'];
				echo "<meta http-equiv='refresh' content='1;URL=admin.php'>";
			}else if ($user['indentity_id']==5){
				$_SESSION['ses_id']=session_id();
				$_SESSION['admin_id']=$user['admin_id'];
				$_SESSION['indentity_id']=$user['indentity_id'];
				echo "<meta http-equiv='refresh' content='1;URL=cadmin.php'>";
			}else{
				echo "<meta http-equiv='refresh' content='1;URL=login.php'>";
			}
		}
	}
}
?>