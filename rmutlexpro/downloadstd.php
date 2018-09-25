<meta charset="utf-8">
<?php
session_start();
include("connect.php");

  $download=$_GET['lession_file']; //รับค่ามาจากการคลิกที่ Link

$sql="SELECT * FROM lession";
$result=mysql_query($sql);
while ($row=mysql_fetch_array($result)); {
$pdffile=$download;
echo "<a href=fileupload/$pdffile>$pdffile</a>";
echo "<br>";
}




?>