<?php
session_start();
$plusId = $_REQUEST['plusid'];
$_SESSION['bag'][$plusId]['qty'] += 1;
print_r($_SESSION['bag']);
?>