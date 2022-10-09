<?php

    include "connection.php";

    $noun = $_GET['noun'];

    $query = "DELETE FROM biodata WHERE noun='$noun'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        # code...
        $_SESSION['msg'] = "Data berhasil dihapus";
        $_SESSION['msg_type'] = "danger";
        header("Location: biodata.php");
    }else {
        echo "data gagal dihapus ". mysqli_error($conn);
    }
?>