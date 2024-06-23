<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai panjang, lebar, dan tinggi dari form
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];
    $tinggi = $_POST["tinggi"];

    // Menghitung luas balok
    $luas = 2 * ($panjang * $lebar + $panjang * $tinggi + $lebar * $tinggi);

    // Menghitung volume balok
    $volume = $panjang * $lebar * $tinggi;

    // Menampilkan hasil
    // echo "<h2>Hasil:</h2>";
    // echo "<p>Luas Balok: " . $luas . "</p>";
    // echo "<p>Volume Balok: " . $volume . "</p>";
}
?>