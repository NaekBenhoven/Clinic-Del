<?php session_start(); 
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

        <!-- <link href="css/modern-business.css" rel="stylesheet">
        <link href="css/glyphicon.css" rel="stylesheet"> -->
    </head>

    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="./">Klinik IT Del</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="./">Home</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container">
        <div class="row" align="center">
            <div class="col-md-12 col-sm-offset-3" style="padding-left: 250px; padding-right: 250px; padding-top:30px">
                <div class="card h-10">
                    <div class="card-body">
                        <form id="registration-form" method="post" action="./registration_process" role="form" enctype="multipart/form-data">
                        <legend>Registrasi</legend>
                        <table cellpadding="10">
                            <tr><td>Nama Lengkap</td>
                        <td style="width: 430px"><div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="name" placeholder="Nama Lengkap" class="form-control" required />
                        </div></td>
                    </tr>
                        <tr><td>Email</td>
                        <td><div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input type="text" name="email" placeholder="Email" class="form-control" required />
                        </div></td>
                    </tr>
                        <tr><td>Username</td>
                        <td><div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="username" placeholder="Username" class="form-control" required />
                        </div></td>
                    </tr>
                        <tr><td>Password</td>
                        <td><div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="password" placeholder="Password" class="form-control" required />
                        </div></td>
                    </tr>
                        <tr><td>Nomor Telepon</td>
                        <td><div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                            <input type="text" name="phone_number" placeholder="Nomor Telepon" class="form-control" required />
                        </div></td>
                    </tr>
                        <tr><td>Alamat</td>
                        <td><div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                            <input type="text" name="address" placeholder="Alamat" class="form-control" required />
                        </div></td>
                    </tr>
                        <tr>
                <td>Foto</td>
                <td><input type="file" name="profile_picture"></td>
              </tr>
                        </table>
                        </br><div class="form-group">
                            <input type="submit" name="submit" value="Daftar" class="btn btn-primary btn-block" />
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </main>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
    <!-- Footer -->
    <?php
   include("user/view-footer.php");
?>
