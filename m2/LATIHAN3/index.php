<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai Angka ke Nilai Huruf</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
class KonversiNilai {
    private $nilai_angka;

    public function __construct($nilai_angka) {
        $this->nilai_angka = $nilai_angka;
    }

    public function konversi() {
        if ($this->nilai_angka >= 80) {
            return 'A';
        } elseif ($this->nilai_angka >= 70) {
            return 'B';
        } elseif ($this->nilai_angka >= 60) {
            return 'C';
        } elseif ($this->nilai_angka >= 50) {
            return 'D';
        } else {
            return 'E';
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai_angka = $_POST["nilai"];

    $konversi_nilai = new KonversiNilai($nilai_angka);

    $nilai_huruf = $konversi_nilai->konversi();

}
?>

    <div class="container">
        <h2>Konversi Nilai</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nilai">Nilai Angka:</label>
                <input type="number" id="nilai" name="nilai" required>
            </div>
            <div class="form-group">
                <label for="nilai">Nilai Huruf:</label>
                <input type="text" value="<?php echo $nilai_huruf; ?>">
            </div>
            <button type="submit">Konversi</button>
        </form>
    </div> 
</body>
</html>
