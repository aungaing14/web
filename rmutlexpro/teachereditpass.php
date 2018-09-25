<meta charset="utf-8">
<?php
session_start();
include("connect.php");
 
$teacher_id=$_GET['teacher_id'];
$oldpassword=$_POST['oldpassword'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];

$sql = "SELECT * from teacher where teacher_id='$teacher_id' and teacher_password='$oldpassword'";
	$result = mysql_query($sql);
	$num = mysql_num_rows($result);
	
	if ($num==0)
		die("<script>
				alert('Old password incorrect');
				history.back();
			 </script>");

	// 2.2 password = repassword
	if ($password != $repassword)
		die("<script>
				alert('Password is not same');
				history.back();
			 </script>");

// 6. save data

	$sql = "UPDATE teacher SET teacher_password='$password' WHERE teacher_id='$teacher_id' ";
	$result = mysql_query($sql) or die("Err : $sql");
	
	echo "<script>
			window.location='loginteacher.php';
		  </script>";


?>