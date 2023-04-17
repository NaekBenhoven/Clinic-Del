<?php
    include("view-header.php");
?>

<!DOCTYPE html>
<html lang="en">

<body class="d-flex flex-column h-100">

    <main class="flex-shrink-0">
        <!-- Page Content-->
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                
                <?php
                $username = $_SESSION['username'];
                $query = mysqli_query($connect, "SELECT * FROM user WHERE username='$username'");
                $data  = mysqli_fetch_array($query);
                ?>
                <!-- <h1 class="mt-4 mb-3"> <?php echo $data['name']; ?></h1>
                         <h1 class="mt-4 mb-3"> <?php echo $data['profile_picture']; ?></h1> -->
                <!-- <?php echo "<img src='" . $data['profile_picture'] . "' height='115' width='115'>" ?> -->
                <!-- <h1 class="fw-bolder">Frequently Asked Questions</h1>
                        <p class="lead fw-normal text-muted mb-0">How can we help you?</p> -->
            </div>

            <div class="row">
                <div class="col-lg-2 col-md- col-sm-6 portfolio-item">
                    <?php echo "<img src='" . $data['profile_picture'] . "' height='115' width='115'>" ?>
                </div>
                <div class="col-lg-6 col-md- col-sm-6 portfolio-item">
                    <h1 class="mt-4 mb-3"> <?php echo $data['name']; ?></h1>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#1" role="tab" data-toggle="tab">Profil</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane in active" id="1">
                            <form method="post" action="proses_tambah.php" enctype="multipart/form-data"><br>
                                <table cellpadding="10">
                                    <tr>
                                        <td style="padding-right: 200px">
                                            <h4> Nama</h4>
                                        </td>
                                        <td>
                                            <h4> : <?php echo $data['name']; ?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-right: 200px">
                                            <h4> Username</h4>
                                        </td>
                                        <td>
                                            <h4> : <?php echo $data['username']; ?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-right: 200px">
                                            <h4> Email</h4>
                                        </td>
                                        <td>
                                            <h4> : <?php echo $data['email']; ?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-right: 200px">
                                            <h4> Nomor Telepon</h4>
                                        </td>
                                        <td>
                                            <h4> : <?php echo $data['phone_number']; ?></h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-right: 200px">
                                            <h4> Alamat</h4>
                                        </td>
                                        <td>
                                            <h4> : <?php echo $data['address']; ?></h4>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

<?php
include("view-footer.php");
?>