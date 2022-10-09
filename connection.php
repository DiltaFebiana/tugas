<?php

    $server = "localhost";
    $username = "root";
    $password  = "";
    $database = "ppdbsma";

    $conn = mysqli_connect($server, $username, $password, $database);

    if ($conn) {
        # code...
        echo "<script>console.log('Koneksi berhasil');</script>";
    } else {
        echo "<h4 class='danger'>Koneksi gagal</h4> " . mysqli_connect_error();
    }