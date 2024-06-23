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
        <?php 
        include "koneksi.php";

        function input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = input($_POST["nama"]);
            $universitas = input($_POST["universitas"]);
            $jurusan = input($_POST["jurusan"]);
            $no_hp = input($_POST["no_hp"]);
            $alamat = input($_POST["alamat"]);

            $sql = "INSERT INTO peserta (nama, universitas, jurusan, no_hp, alamat) VALUES ('$nama', '$universitas', '$jurusan', '$no_hp', '$alamat')";

            $hasil = mysqli_query($kon, $sql);

            if ($hasil) {
                header("Location: index.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
            }
        }
        ?>

        <h2>Input Data</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />
            </div>
            <div class="form-group">
                <label>Universitas:</label>
                <input type="text" name="universitas" class="form-control" placeholder="Masukan Nama Universitas" required />
            </div>
            <div class="form-group">
                <label>Jurusan:</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Masukan Jurusan" required />
            </div>
            <div class="form-group">
                <label>No HP:</label>
                <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" required />
            </div>
            <div class="form-group">
                <label>Alamat:</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" required />
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
