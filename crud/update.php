<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form Pendaftaran Anggota</title>
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

        if (isset($_GET['id_peserta'])) {
            $id_peserta = input($_GET["id_peserta"]);

            $sql = "SELECT * FROM peserta WHERE id_peserta = $id_peserta";
            $hasil = mysqli_query($kon, $sql);
            $data = mysqli_fetch_assoc($hasil);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id_peserta = htmlspecialchars($_POST["id_peserta"]);
            $nama = input($_POST["nama"]);
            $universitas = input($_POST["universitas"]);
            $jurusan = input($_POST["jurusan"]);
            $no_hp = input($_POST["no_hp"]);
            $alamat = input($_POST["alamat"]);

            $sql = "UPDATE peserta SET
                nama='$nama',
                universitas='$universitas',
                jurusan='$jurusan',
                no_hp='$no_hp',
                alamat='$alamat'
                WHERE id_peserta=$id_peserta";

            $hasil = mysqli_query($kon, $sql);

            if ($hasil) {
                header("Location: index.php");
            } else {
                echo "<div class='alert alert-danger'>Data gagal disimpan.</div>";
            }
        }
        ?>

        <h2>Update Data</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="<?php echo htmlspecialchars($data['nama']); ?>" required />
            </div>
            <div class="form-group">
                <label>Universitas:</label>
                <input type="text" name="universitas" class="form-control" placeholder="Masukan Nama Universitas" value="<?php echo htmlspecialchars($data['universitas']); ?>" required />
            </div>
            <div class="form-group">
                <label>Jurusan:</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Masukan Jurusan" value="<?php echo htmlspecialchars($data['jurusan']); ?>" required />
            </div>
            <div class="form-group">
                <label>No HP:</label>
                <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" value="<?php echo htmlspecialchars($data['no_hp']); ?>" required />
            </div>
            <div class="form-group">
                <label>Alamat:</label>
                <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" value="<?php echo htmlspecialchars($data['alamat']); ?>" required />
            </div>

            <input type="hidden" name="id_peserta" value="<?php echo htmlspecialchars($data['id_peserta']); ?>" />
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
