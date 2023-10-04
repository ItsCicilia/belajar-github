<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <div class="container">
            <a class="navbar-brand" href="index.html">MDP Corporate</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                </ul>
            </div>
    </nav>
    <div class="container mt-5">
        <h3>Data Mahasiswa MDP</h3>
        <button type="button" class="btn btn-primary"><a href="tambah_mhs.php" class="text-light">Tambah Data</a></button>
        <form>
            <table class="table table-striped table-hover mt-2">
                <thead class="table-dark">
                    <th>NPM</th>
                    <th>Nama Mahasiwa</th>
                    <th>Aksi</th>
                </thead>
                <?php
                include "koneksi.php";
                $sql = " SELECT * FROM mahasiswa";
                $query = mysqli_query($koneksi, $sql);

                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                    <tbody>
                        <td>
                            <?php echo $row['NPM']; ?>
                        </td>
                        <td>
                            <?php echo $row['nama_mhs']; ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-warning"><a href="">Edit</a></button>
                            <button type="button" class="btn btn-danger"><a href="delete_mhs.php?id=<?php echo $row['id_mhs'] ?>" onclick="return confirm('Anda Yakin Hapus Data Ini?')">Hapus</a></button>
                        </td>
                    </tbody>
                <?php
                }
                mysqli_close($koneksi);
                ?>
            </table>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>