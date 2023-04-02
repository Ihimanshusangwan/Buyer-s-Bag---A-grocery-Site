<?php
session_start();
$minusid = $_REQUEST['minusid'];
unset($_SESSION['bag'][$minusid]);
echo "removed";
?>