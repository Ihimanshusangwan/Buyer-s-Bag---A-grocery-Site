<?php
session_start();
$minusid = $_REQUEST['minusid'];
if ($_SESSION['bag'][$minusid]['qty'] == 1) {
    unset($_SESSION['bag'][$minusid]);
    echo "remove";
} else {
    $_SESSION['bag'][$minusid]['qty'] -= 1;
    print_r($_SESSION['bag']);
}

?>