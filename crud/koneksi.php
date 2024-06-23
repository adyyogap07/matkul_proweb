<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "crud";

// Establish connection
$kon = mysqli_connect($host, $user, $password, $db);

// Check connection
if (!$kon) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>
