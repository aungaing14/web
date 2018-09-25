<meta charset="utf-8">
<?php
session_start();
include("connect.php");
 
$trainer_id=$_GET['trainer_id'];
$oldpassword=$_POST['oldpassword'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];

$sql = "SELECT * from trainer where trainer_id='$trainer_id' and trainer_password='$oldpassword'";
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

	$sql = "UPDATE trainer SET trainer_password='$password' WHERE trainer_id='$trainer_id' ";
	$result = mysql_query($sql) or die("Err : $sql");
	
	echo "<script>
			window.location='logintrainer.php';
		  </script>";


?>