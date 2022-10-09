<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php

        include "connection.php";

        $noun = $_GET['noun'];
        $query = "SELECT * FROM biodata WHERE noun='$noun'";
        $result = mysqli_query($conn, $query);
    ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Edit form
            </div>
            <div class="card-body">
                <form action="edit.php" method="GET">
                    <?php
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="mb-3">
                        <label for="noun" class="form-label">No UN SMP/MTS/Sederajat</label>
                        <input class="form-control" type="text" name="noun" value="<?= $row['noun']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input class="form-control" type="text" name="nama" value="<?= $row['namalengkap']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
                        <input class="form-check-input" type="radio" name="jk" value="<?= $row['jk']; ?>"> Pria
                        <input class="form-check-input" type="radio" name="jk" value="<?= $row['jk']; ?>"> Wanita
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input class="form-control" type="text" name="tempat_lahir" value="<?= $row['tempatlahir']; ?>">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input class="form-control" type="text" name="tanggal_lahir" value="<?= $row['tanggallahir']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="namaortu" class="form-label">Nama Ortu</label>
                        <input class="form-control" type="text" name="namaortu" value="<?= $row['namaortu']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input class="form-control" type="text" name="alamat" value="<?= $row['alamat']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="kotakab" class="form-label">Kota/Kabupaten</label>
                        <input class="form-control" type="text" name="kotakab" value="<?= $row['kotakab']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="asalsekolah" class="form-label">Asal sekolah</label>
                        <input class="form-control" type="text" name="asalsekolah" value="<?= $row['asalsekolah']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama</label>
                        <input class="form-control" type="text" name="agama" value="<?= $row['agama']; ?>">
                    </div>
                    <input type="submit" value="Submit">
                    <?php
                        }
                    ?>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>