<meta charset="utf-8">
<?php
session_start();
include("connect.php");

$oldpassword    = $_POST["oldpassword"];
$password       = $_POST["password"];
$repassword     = $_POST["repassword"];
$sql = "select admin_id from admin where admin_id = '".$_SESSION['admin_id']."' and admin_password ='$oldpassword'";
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

$password = md5($password);
$sql = "update member set
	password='$password'
	where username='$username'
	";

$result = mysql_query($sql) or die("Err : $sql");
echo "<script>
alert('Update Password');
window.location='login.php';
</script>";

?>