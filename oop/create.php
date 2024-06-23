<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form Pendaftaran Peserta</title>
</head>
<body>
    <div class="container">
        <br>
        <h2 class="text-center">Form Pendaftaran Peserta</h2>

        <?php 
        include "Database.php";

       
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $db = new Database();
            $kon = $db->getConnection();

            $nama = htmlspecialchars($_POST["nama"]);
            $universitas = htmlspecialchars($_POST["universitas"]);
            $jurusan = htmlspecialchars($_POST["jurusan"]);
            $no_hp = htmlspecialchars($_POST["no_hp"]);
            $alamat = htmlspecialchars($_POST["alamat"]);

            $sql = "INSERT INTO peserta (nama, universitas, jurusan, no_hp, alamat) VALUES ('$nama', '$universitas', '$jurusan', '$no_hp', '$alamat')";
            $hasil = $kon->query($sql);

            if ($hasil) {
                header("Location: index.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
            }
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama" required />
            </div>
            <div class="form-group">
                <label for="universitas">Universitas:</label>
                <input type="text" id="universitas" name="universitas" class="form-control" placeholder="Masukan Nama Universitas" required />
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan :</label>
                <input type="text" id="jurusan" name="jurusan" class="form-control" placeholder="Masukan Jurusan" required />
            </div>
            <div class="form-group">
                <label for="no_hp">No HP:</label>
                <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="Masukan No HP" required />
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Masukan alamat" required></textarea>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
