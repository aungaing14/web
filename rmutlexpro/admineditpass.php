<meta charset="utf-8">
<?php
session_start();
include("connect.php");
 
$admin_id=$_GET['admin_id'];
$oldpassword=$_POST['oldpassword'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];

$sql = "SELECT * from admin where admin_id='$admin_id' and admin_password='$oldpassword'";
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

	$sql = "UPDATE admin SET admin_password='$password' WHERE admin_id='$admin_id' ";
	$result = mysql_query($sql) or die("Err : $sql");
	
	echo "<script>
			window.location='login.php';
		  </script>";


?>