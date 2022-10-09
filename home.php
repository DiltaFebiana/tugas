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
    <!-- Custom css -->
    <link rel="stylesheet" href="style/style.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img class="logo" src="img/Logo_Kemendikbud.svg-removebg-preview.png" alt="Logo Kemendikbud" style="margin-right: 10px;">
            <a class="navbar-brand" href="#">PPDB SMA MALANG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link">Hi, <?= $_SESSION['username']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="biodata.php">Biodata</a>
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

    <!-- <table align="center">
        <form action="add.php" method="GET">
            <tr>
                <td><label for="noun">No UN SMP/MTS/Sederajat</label></td>
                <td><input type="text" name="noun" placeholder="Nomor un"></td>
            </tr>
           <tr>
               <td><label for="nama">Nama Lengkap</label></td>
               <td><input type="text" name="nama" placeholder="Nama lengkap"></td>
           </tr>
           <tr>
               <td><label for="jk">Jenis Kelamin</label></td>
               <td>
                   <input type="radio" name="jk" value="Pria"> Pria <br>
                   <input type="radio" name="jk" value="Wanita"> Wanita
                </td>
               <td>
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" placeholder="Tempat Lahir"> <br>
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="datetime" name="tanggal_lahir" placeholder="YYYY/mm/dd">
                </td>
           </tr>
           <tr>
               <td><label for="namaortu">Nama Orang Tua/Wali</label></td>
               <td><input type="text" name="namaortu" placeholder="Nama Orang Tua atau Wali"></td>
           </tr>
           <tr>
               <td><label for="alamat">Alamat</label></td>
               <td><textarea name="alamat" cols="30" rows="10" placeholder="Alamat sesuai KK/KTP/Sesuai Domisili"></textarea></td>
           </tr>
           <tr>
               <td><label for="kotakab">Kota/Kabupaten</label></td>
               <td><input type="text" name="kotakab" placeholder="Kota/Kabupaten"></td>
           </tr>
           <tr>
               <td><label for="asalsekolah">Asal Sekolah</label></td>
               <td><input type="text" name="asalsekolah" placeholder="Asal Sekolah"></td>
           </tr>
           <tr>
               <td><label for="agama">Agama</label></td>
               <td><input type="text" name="agama" placeholder="agama"></td>
           </tr>
           <tr>
               <td><input type="submit" value="Submit"></td>
           </tr>
        </form>
    </table> -->

    <div class="form-bio" style="margin-top: 2.5rem;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Form Biodata
                        </div>
                        <div class="card-body" style="padding: 3%;">
                            <form action="add.php" method="GET">
                                <div class="mb-3">
                                    <label for="noun" class="form-label">No UN SMP/MTS/Sederajat</label>
                                    <input class="form-control" type="text" name="noun">
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input class="form-control" type="text" name="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="jk" class="form-label">Jenis Kelamin</label>
                                    <input class="form-check-input" type="radio" name="jk" value="Pria"> Pria
                                    <input class="form-check-input" type="radio" name="jk" value="Wanita"> Wanita
                                </div>
                                <div class="mb-3">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input class="form-control" type="text" name="tempat_lahir">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input class="form-control" type="text" name="tanggal_lahir">
                                </div>
                                <div class="mb-3">
                                    <label for="namaortu" class="form-label">Nama Ortu</label>
                                    <input class="form-control" type="text" name="namaortu">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input class="form-control" type="text" name="alamat">
                                </div>
                                <div class="mb-3">
                                    <label for="kotakab" class="form-label">Kota/Kabupaten</label>
                                    <input class="form-control" type="text" name="kotakab">
                                </div>
                                <div class="mb-3">
                                    <label for="asalsekolah" class="form-label">Asal sekolah</label>
                                    <input class="form-control" type="text" name="asalsekolah">
                                </div>
                                <div class="mb-3">
                                    <label for="agama" class="form-label">Agama</label>
                                    <input class="form-control" type="text" name="agama">
                                </div>
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>