<?php
    // include("../../index.php");
    // require '../Klinik-IT-Del/index.php';
    include_once("process/login/config.php");
    $url = '/views/user';

    ob_start();

    // if(isset($_SESSION['username']) && isset($_SESSION['password']))
    //     {
    //         $username = $_SESSION['username'];
    //         $password = $_SESSION['password'];

    //         // Get the user id
    //         $id = getUserId($username, $password);
    //     }
    // if (isset($_SESSION['username'])) {
    //     header("Location: ./");
    // }
     
    // if (isset($_POST['submit'])) {
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];
     
    //     $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    //     $result = mysqli_query($connect, $sql);
    //     if ($result->num_rows > 0) {
    //         $row = mysqli_fetch_assoc($result);
    //         $_SESSION['username'] = $row['username'];
    //         header("Location: ./");
    //     } else {
    //         echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    //     }
    // }
      
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
            <div class="col-lg-12" style="padding-left: 450px; padding-right: 450px; padding-top:110px">
                <div class="card h-10">
                    <div class="card-body">
                        <h4 class="card-text">Login ke akun anda</h4></br>
                            <div class="regisForm">
                                <form  action="./login_process" autocomplete="on" method="post">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input type="text" name="username" placeholder="Masukkan username" required class="form-control" />
                                    </div>
                                    </br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" name="password" placeholder="Password" required class="form-control" />
                                    </div>
                                    </br>
                                    <div class="login button"> 
                                        <input type="submit" name="submit" value="Login" class="btn btn-primary btn-block" /> 
								    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-6 text-right brand" style="padding: 0;"></div>
                                    </div>
                                    <div class="form-group">
                                      <br>
                                        <div class="center" class="col-sm-12" style="padding: 0;"><h6>Pengguna baru? <a href="./registration">Daftar disini</a></h6></div>
                                    </div>
                                </form>
                            </div>	
                        </div>             
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
</html>


<?php
  include("user/view-footer.php");
?>