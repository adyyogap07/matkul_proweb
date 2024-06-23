<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas dan Volume Balok</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
    <div class="container">
        <h2>Hitung Luas dan Volume Balok</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="panjang">Panjang:</label>
                <input type="number" id="panjang" name="panjang" required>
            </div>
            <div class="form-group">
                <label for="lebar">Lebar:</label>
                <input type="number" id="lebar" name="lebar" required>
            </div>
            <div class="form-group">
                <label for="tinggi">Tinggi:</label>
                <input type="number" id="tinggi" name="tinggi" required>
            </div>
            <div class="form-group">
                <label for="hasil">Hasil Luas Balok</label>
                <input type="text" value= "<?php echo $luas; ?>" />
            </div>

            <div class="form-group">
                <label for="hasil">Hasil Volume Balok</label>
                <input type="text" value="<?php echo $volume; ?>" />
            </div>
            <button type="submit">Hitung</button>
        </form>
    </div>
</body>
</html>
