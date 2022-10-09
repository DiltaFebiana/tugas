<?php

    include "connection.php";

    $noun = $_GET['noun'];
    $namalengkap = $_GET['nama'];
    $jk = $_GET['jk'];
    $tempatlahir = $_GET['tempat_lahir'];
    $tanggallahir = $_GET['tanggal_lahir'];
    $namaortu = $_GET['namaortu'];
    $alamat = $_GET['alamat'];
    $kotakab = $_GET['kotakab'];
    $asalsekolah = $_GET['asalsekolah'];
    $agama = $_GET['agama'];

    $query = "INSERT INTO biodata (noun, namalengkap, jk, tempatlahir, tanggallahir, namaortu, alamat, kotakab, asalsekolah, agama) 
        VALUES (
            '$noun',
            '$namalengkap',
            '$jk',
            '$tempatlahir',
            '$tanggallahir',
            '$namaortu',
            '$alamat',
            '$kotakab',
            '$asalsekolah',
            '$agama'
        )";

    if (mysqli_query($conn, $query)) {
        # code...
        echo "<script type='text/javascript'>alert('Data berhasil ditambahkan');</script>";
        header("Location: biodata.php");
    } else {
        echo "<script type='text/javascript'>Alert('Data gagal ditambahkan')</script>" . mysqli_error($conn);
    }

    mysqli_close($conn);