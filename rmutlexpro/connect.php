<meta charset="utf-8">
<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='123456';
$dbname='rmutlpro';

$conn=mysql_connect($dbhost,$dbuser,$dbpass)or die ("ไม่สามารถเชื่อมต่อโฮลต์ได้");
$conn_db=mysql_select_db($dbname) or die ("ไม่สามารถเชื่อมต่อฐานข้อมูลได้ได้");
mysql_query("SET NAMES utf8");
if (!$conn_db) {
	echo "No select database name".$dbname;
}

date_default_timezone_set('Asia/Bangkok');
$today_date=date("d-M-Y");
$today_time=date("h:i:s");


$year=date("Y")+543;
$time=date("H:i:s");
$date_session=$year."".date("m")."".date("j")."".$time;
$print_date_eng= date("Y")."-".date("m")."-".date("j").",".$today_time;

$print_date_Thai= date("j")."-".date("m")."-".$year;
$time_online=strtotime("now");
$ipaddress_memb=$_SERVER['REMOTE_ADDR'];
?>