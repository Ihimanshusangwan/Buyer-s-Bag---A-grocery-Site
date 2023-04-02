<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "products";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("can't connect to server");
}
?>