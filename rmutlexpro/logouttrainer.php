<?php
session_start();
unset($_SESSION['ses_id']);
unset($_SESSION['trainer_id']);
unset($_SESSION['indentity_id']);
session_destroy();
echo "<meta http-equiv='refresh' content='1;URL=logintrainer.php'>";
?>