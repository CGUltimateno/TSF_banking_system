<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$db = "bank";

$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn) {
    die("Failed" . mysqli_connect_error());
}

?>