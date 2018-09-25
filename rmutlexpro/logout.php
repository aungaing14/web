<?php
session_start();
unset($_SESSION['ses_id']);
unset($_SESSION['admin_id']);
unset($_SESSION['indentity_id']);
session_destroy();
echo "<meta http-equiv='refresh' content='1;URL=login.php'>";
?>