<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas dan Volume Bola</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
class Bola {
    private $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function hitungLuas() {
        return 4 * M_PI * $this->jari_jari * $this->jari_jari;
    }

    public function hitungVolume() {
        return (4 / 3) * M_PI * pow($this->jari_jari, 3);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jari_jari = $_POST["jari_jari"];

    $bola = new Bola($jari_jari);

    $luas = $bola->hitungLuas();
    $volume = $bola->hitungVolume();
}
?>
    <div class="container">
        <h2>Luas dan Volume Bola</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="jari_jari">Jari-jari:</label>
                <input type="number" id="jari_jari" name="jari_jari" required>
            </div>
            <div class="form-group">
                <label for="jari_jari">Hasil Luas</label>
                <input type="number" value="<?php echo $luas; ?>" >
            </div>
            <div class="form-group">
                <label for="jari_jari">Hasil Volume</label>
                <input type="number" value="<?php echo $volume; ?>" >
            </div>
            <button type="submit">Hitung</button>
        </form>
    </div>


</body>
</html>
