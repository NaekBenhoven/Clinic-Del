<?php
include_once("process/login/config.php");
ob_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $id = getUserId($username);
    $query = mysqli_query($connect, "SELECT * FROM user WHERE username='$username'");
    $data  = mysqli_fetch_array($query);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Klinik IT Del</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="image/k5.jpg" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/custom_table.css" rel="stylesheet" />
</head>
<style>
    @media (min-width: 1200px) {
        .container {
            max-width: 1200px;
        }
    }
</style>

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Navigation-->

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="./">Klinik IT Del</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="./">Home</a></li>

                        <?php
                        if (isset($_SESSION['username'])) {
                            if ($data['status'] == 'admin') {
                                echo '<li class="nav-item"><a class="nav-link" href="./daftar_keluhan">Daftar Keluhan</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="./daftar_artikel">Daftar Artikel</a></li>';
                                // echo '<li class="nav-item"><a class="nav-link" href="./tambah_artikel">Tambah Artikel</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="./logout" target="_self">Logout</a></li>';
                            } else {
                                echo '<li class="nav-item"><a class="nav-link" href="./peta" target="">Lokasi</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="./lapor_keluhan">Lapor Keluhan</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="./riwayat_keluhan">Riwayat Keluhan</a></li>';
                                echo ' <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hi, ' . $data['name'] . '!</a>
                                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownUser">
                                                <li><a class="dropdown-item" href="./profil">Profil</a></li>
                                                <li><a class="dropdown-item" href="./logout" target="_self">Logout</a></li>
                                            </ul>
                                        </li>';
                                
                            }
                        } else {
                            echo '<li class="nav-item">
                                            <a class="nav-link" href="./peta" target="">Lokasi</a>
                                        </li>';
                            echo '<li class="nav-item">
                                            <a class="nav-link" href="./login" style="padding-right: 25px" target="_self">Login</a>
                                        </li>';
                        }
                        ?>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </main>
</body>

</html>