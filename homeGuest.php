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
    <title>Form </title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/style.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <!-- Navbar -->
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
                        <a class="nav-link" aria-current="page" href="#">Home</a>
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
    <!-- End of Navbar -->

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

    <div class="container">
        <div class="jumbotron" style="margin-top: 3.5rem;">
            <h1 class="display-4">Selamat datang <?= $_SESSION['username']; ?>!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
        <!-- Table -->
        <table class="table">
            <tr class="tr">
                <th class="th">No Ujian</th>
                <th class="th">Nama</th>
                <th class="th">Jenis Kelamin</th>
                <th class="th">Tempat Lahir</th>
                <th class="th">Tanggal Lahir</th>
                <th class="th">Nama Ortu</th>
                <th class="th">Alamat</th>
                <th class="th">Kota/Kab</th>
                <th class="th">Asal Sekolah</th>
                <th class="th">Agama</th>
            </tr>
            <?php
                include "connection.php";

                $query = "SELECT * FROM biodata";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr class="tr">
                <td class="td"><?= $row['noun']; ?></td>
                <td class="td"><?= $row['namalengkap']; ?></td>
                <td class="td"><?= $row['jk']; ?></td>
                <td class="td"><?= $row['tempatlahir']; ?></td>
                <td class="td"><?= $row['tanggallahir']; ?></td>
                <td class="td"><?= $row['namaortu']; ?></td>
                <td class="td"><?= $row['alamat']; ?></td>
                <td class="td"><?= $row['kotakab']; ?></td>
                <td class="td"><?= $row['asalsekolah']; ?></td>
                <td class="td"><?= $row['agama']; ?></td>
            </tr>
            <?php
                    }
                } else {
                    echo "0 result";
                }
            ?>
        </table>
        <!-- End of Table -->
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>