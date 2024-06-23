<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
    <style>
        /* Tambahkan gaya CSS sesuai kebutuhan */
        /* Contoh: styling form, tombol, dll. */
    </style>
</head>
<body>
    <h2>Kalkulator Sederhana</h2>
    <form method="post">
        <input type="text" name="bil1" placeholder="Masukkan Bilangan Pertama">
        <select name="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
        </select>
        <input type="text" name="bil2" placeholder="Masukkan Bilangan Kedua">
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];

        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1 + $bil2;
                break;
            case 'kurang':
                $hasil = $bil1 - $bil2;
                break;
            case 'kali':
                $hasil = $bil1 * $bil2;
                break;
            case 'bagi':
                $hasil = $bil1 / $bil2;
                break;
            default:
                $hasil = "Operasi tidak valid";
        }

        echo "Hasil: " . $hasil;
    }
    ?>
</body>
</html>