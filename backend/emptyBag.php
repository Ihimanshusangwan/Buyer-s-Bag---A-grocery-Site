<?php
session_start();
if (isset($_SESSION['bag'])) {
    session_unset();
    session_destroy();
    echo "removed";
} else {
    echo "emptycart";
}

?>