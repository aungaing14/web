<meta charset="utf-8">
<?php
session_start();
include("connect.php");

  $download=$_GET['lession_file']; //รับค่ามาจากการคลิกที่ Link
  $path=""; //ในตัวอย่างนี้เป็น path เดียวกันกับไฟล์เลยไม่ต้องระบุ path
  
  if (isset($download)) {
    header("Content-Type: application/force-download");
    header("Content-Disposition: attachment; filename=$download");
    @readfile("$path/$download");
    echo "<meta http-equiv='refresh' content='1;URL=adminuser.php'>";
  } else {
  echo "Error Delete ['.$download']";
  }
?>