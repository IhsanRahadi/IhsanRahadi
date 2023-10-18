<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compotible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale1.0">
    <title>MyApp | Pasien</title>
    <link rel="stylesheet" href="asets/css/bootstrap.min.css">
</head>
<body>
    <div class="continer mt-1">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">MyApp</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Pasien</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="row">
                <div class="col mt-3">
                    <h4>Tabel Pasien</h4>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a href="#" class="btn btn-primary btn-sm d-flex justify-content-center">Tambah Data</a>
                </div>
            </div>

            <table class="table table-striped table-hover table-sm mt-1">
                <tr>
                    <th>NO</th>
                    <th>ID Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
                <?php
                include 'koneksi.php';
                $no = 1;
                $hasil = $koneksi->query("SELECT * FROM pasien");
                ?>
                <?php
                while ($row = $hasil->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['idPasien']; ?></td>
                        <td><?= $row['nmPasien']; ?></td>
                        <td><?= $row['jk']; ?></td>
                        <td><?= $row['alamat']; ?></td>
                        <td><a href="#" class="btn btn-warning btn-sm">Edit</a> <a href="#"
                        class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>