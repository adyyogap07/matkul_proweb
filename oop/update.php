<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Update Data Peserta</title>
</head>
<body>
    <div class="container">
        <br>
        <h2 class="text-center">Update Data Peserta</h2>

        <?php 
        include "Database.php";

        if(isset($_GET['id_peserta'])) {
            $id_peserta = htmlspecialchars($_GET["id_peserta"]);

            $db = new Database();
            $kon = $db->getConnection();

            $sql = "SELECT * FROM peserta WHERE id_peserta='$id_peserta'";
            $hasil = $kon->query($sql);

            if ($hasil->num_rows > 0) {
                $data = $hasil->fetch_assoc();
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input type="hidden" name="id_peserta" value="<?php echo $data['id_peserta']; ?>">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" required />
            </div>
            <div class="form-group">
                <label for="universitas">Universitas:</label>
                <input type="text" id="universitas" name="universitas" class="form-control" value="<?php echo $data['universitas']; ?>" required />
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan :</label>
                <input type="text" id="jurusan" name="jurusan" class="form-control" value="<?php echo $data['jurusan']; ?>" required />
            </div>
            <div class="form-group">
                <label for="no_hp">No HP:</label>
                <input type="text" id="no_hp" name="no_hp" class="form-control" value="<?php echo $data['no_hp']; ?>" required />
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>" required></textarea>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php 
            } else {
                echo "<div class='alert alert-danger'> Data tidak ditemukan.</div>";
            }
        }
        ?>

    </div>
</body>
</html>
