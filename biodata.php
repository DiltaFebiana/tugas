<?php 

    session_start(); 
    if (!isset($_SESSION['username'])) {
        # code...
        echo '<script type="text/javascript">alert("Anda harus login !")</style>';
        header("Location: index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata PPDB SMA</title>
    <!-- Custom Css Style -->
    <link rel="stylesheet" type="text/css" href="style/style.min.css" />
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <!-- Message -->
    <?php if(isset($_SESSION['message'])): ?>
        <div class="alert alert-<?= $_SESSION['msg_type']; ?>">
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>
    <!-- End of Message -->

    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img class="logo" src="img/Logo_Kemendikbud.svg.png" alt="Logo Kemendikbud" style="margin-right: 10px;">
            <a class="navbar-brand" href="#">
                    PPDB SMA MALANG
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link">Hi, <?= $_SESSION['username']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Biodata</a>
                    </li>
                    <?php
                        if ($_SESSION['status'] = 'login') { ?>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#logoutModal">Sign Out</a>
                            </li>
                        <?php
                        } else { ?>
                            <li class="nav-item"><a class="nav-link" href="index.php" data-bs-toggle="modal">Login</a></li>
                        <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Table -->
    <div class="container" style="margin-top: 3.5rem;">
        <a class="btn btn-success" href="home.php" style="margin-bottom: 1rem;"><i class="fa fa-plus-square"></i> tambah data</a>
        <table class="table table-striped">
            <tr>
                <th>No Ujian</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Nama Ortu</th>
                <th>Alamat</th>
                <th>Kota/Kab</th>
                <th>Asal Sekolah</th>
                <th>Agama</th>
                <th>Action</th>
            </tr>
            <?php
                include "connection.php";

                $query = "SELECT * FROM biodata";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    # code...
                    while ($row = mysqli_fetch_array($result)) {
                        # code...
            ?>
            <tr>
                <td><?= $row['noun']; ?></td>
                <td><?= $row['namalengkap']; ?></td>
                <td><?= $row['jk']; ?></td>
                <td><?= $row['tempatlahir']; ?></td>
                <td><?= $row['tanggallahir']; ?></td>
                <td><?= $row['namaortu']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['kotakab']; ?></td>
                <td><?= $row['asalsekolah']; ?></td>
                <td><?= $row['agama']; ?></td>
                <td>
                    <a class="btn btn-warning" href="editform.php?noun=<?= $row['noun']; ?>">Edit</a>
                    <a class="btn btn-danger" href="hapus.php?noun=<?= $row['noun']; ?>">
                        <span class="glyphicon glyphicon-trash"></span>
                        Hapus
                    </a>
                </td>
            </tr>

            <?php
                    }
                } else {
                    echo "0 result";
                }
            ?>
        </table>
    </div>
    <!-- End of table -->

    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Keluar</h6>
                </div>
                <div class="modal-body">
                    Apakah anda yakin akan keluar dari akun ini ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <a class="btn btn-danger" href="logout.php">Sign Out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Logout Modal -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>