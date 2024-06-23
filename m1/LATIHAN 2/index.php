<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Konversi Nilai</title>
</head>
<body>
    <?php
    $hasil = "";
    if (isset($_POST['konversi'])){
        $input_angka = $_POST['angka'];
        $hasil = konversiNilai($input_angka);
    }

    function konversiNilai($angka) {
        if ($angka >= 85){
            return "A";
        } elseif ($angka >=80) {
            return "A-";
        } elseif ($angka >=75) {
            return "B+";
        } elseif ($angka >=70) {
            return "B";
        } elseif ($angka >=65) {
            return "B-";
        } elseif ($angka >=60) {
            return "C+";
        } elseif ($angka >=55) {
            return "C";
        } elseif ($angka >=40) {
            return "D";
        } elseif ($angka >=0) {
            return "E";
        }
    }
    ?>

    <div class="container">
        <div class="row">
            <form method="post" action="">
                <div class="nilaiAngka">
                    <p>Masukan Nilai</p>
                    <input type="number" id="angka" class="btn" placeholder="Masukan Nilai" name="angka" min="0" max="100" value="<?php echo $_POST['angka'] ?>"/>
                    <button type="submit" class="kvr" name="konversi">Konversi</button>
                </div>
                <div class="nilaiHuruf">
                    <p>Hasil Konversi</p>
                    <input type="text" id="hasil" class="btn" placeholder="Hasil" name="hasil" value="<?php echo $hasil; ?>"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
