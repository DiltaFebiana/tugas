<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Css Link -->
    <link rel="stylesheet" href="style/style.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Header 1 -->
    <!-- <header>
        <img src="img/Logo_Kemendikbud.svg.png" alt="" class="logo">
        <h2>Formulir Pendaftaran Calon Siswa SMA</h2>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
            </ul>
        </nav>
    </header> -->
    <!-- End of Header -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Login Container -->
    <!-- <div class="container">
        <form action="login.php" method="post">
            <label for="username">Username</label>
            <input type="text" name="username"> <br>
            <label for="password">Password</label>
            <input type="password" name="password"> <br>
            <input type="submit" name="login" value="Log in">
        </form>
    </div> -->
    <!-- End of Container -->

    <!-- Form Login -->
    <div class="login-auth">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-4">
                    <div class="card" style="box-shadow: 0 5px 10px rgba(189, 195, 199,1.0);">
                        <div class="card-body">
                            <h4>Sign In</h4>
                            <form action="login.php" method="POST">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Username anda">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password anda">
                                </div>
                                <input type="submit" name="login" value="Log in"> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Form Login -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>