<?php
session_start();
$id = $_REQUEST['id'];
if (isset($_SESSION['bag'])) {
    $_SESSION['bag'][$id]['pid'] = $id;
    $_SESSION['bag'][$id]['qty'] = 1;
    print_r($_SESSION['bag']);
} else {
    $_SESSION['bag'][$id]['pid'] = $id;
    $_SESSION['bag'][$id]['qty'] = 1;
    print_r($_SESSION['bag']);
}

?>