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

$query = "UPDATE biodata SET
    namalengkap='$namalengkap',
    jk='$jk',
    tempatlahir='$tempatlahir',
    tanggallahir='$tanggallahir',
    namaortu='$namaortu', 
    alamat='$alamat',
    kotakab='$kotakab',
    asalsekolah='$asalsekolah',
    agama='$agama' WHERE noun='$noun'";

$result = mysqli_query($conn, $query);

if ($result) {
    # code...
    echo "<script type='text/javascript'>alert('Data berhasil diubah');</script>";
    header("Location: biodata.php");
} else {
    echo "Gagal update data " . mysqli_error($conn);
}