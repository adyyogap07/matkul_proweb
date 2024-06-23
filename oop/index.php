<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PESERTA</title>
</head>
<body>
    
    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand mb-0 h1">ADY YOGA PRATAMA </span>
    </nav>
    <div class="container">
        <br>
        <h4 class="text-center">DAFTAR PESERTA PELATIHAN</h4>

        <?php
        include "Database.php";

        $db = new Database();
        $kon = $db->getConnection();

        if(isset($_GET['id_peserta'])) {
            $id_peserta = htmlspecialchars($_GET["id_peserta"]);

            $sql = "DELETE FROM peserta WHERE id_peserta='$id_peserta'";
            $hasil = $kon->query($sql);

            if ($hasil) {
                header("Location: index.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
            }
        }
        ?>

        <table class="my-3 table table-bordered">
            <thead>
                <tr class="table-primary">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Universitas</th>
                    <th>Jurusan</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th colspan='2'>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM peserta ORDER BY id_peserta DESC";
                $hasil = $kon->query($sql);
                $no = 0;
                while ($data = $hasil->fetch_assoc()) {
                    $no++;
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo htmlspecialchars($data["nama"]); ?></td>
                    <td><?php echo htmlspecialchars($data["universitas"]); ?></td>
                    <td><?php echo htmlspecialchars($data["jurusan"]); ?></td>
                    <td><?php echo htmlspecialchars($data["no_hp"]); ?></td>
                    <td><?php echo htmlspecialchars($data["alamat"]); ?></td>
                    <td>
                        <a href="update.php?id_peserta=<?php echo htmlspecialchars($data['id_peserta']); ?>" class="btn btn-warning">Edit</a>
                        <a href="index.php?id_peserta=<?php echo htmlspecialchars($data['id_peserta']); ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>
    </div>
</body>
</html>
