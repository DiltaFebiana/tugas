<?php

    require_once("connection.php");

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user_login WHERE username='$username' AND password='$password'";
    $query_result = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_result) > 0 ) {
        # code...
        session_start();

        $data = mysqli_fetch_assoc($query_result);

        if ($data['level'] == '1') {
            # code...
            $_SESSION['username'] = $username;
            $_SESSION['status'] = 'login';
            header("Location: home.php");
        } else if ($data['level'] == '2') {
            # code...
            $_SESSION['username'] = $username;
            $_SESSION['status'] = 'login';
            header("Location: homeGuest.php");
        }
    } else {
        header("Location: index.php");
        echo "<script src='text/javascript'>alert('Kesalahan login')</script>" . mysqli_error($conn);
    }