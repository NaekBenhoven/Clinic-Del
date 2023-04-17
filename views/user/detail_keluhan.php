<?php
    include("view-header.php");
$id = $_GET['id'];
?>

<?php
$query = mysqli_query($connect, "SELECT * FROM keluhan 
                                            JOIN user ON keluhan.pelapor = user.username
                                            WHERE keluhan.id='$_GET[id]'");
$data  = mysqli_fetch_array($query);

$query2 = mysqli_query($connect, "SELECT * FROM tanggapan JOIN user ON tanggapan.username = user.username
                                    WHERE id_keluhan='$_GET[id]'
                                    ORDER BY tanggal DESC");
?>

<!DOCTYPE html>
<html lang="en">

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Page Content-->

        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-3">
                        <div class="d-flex align-items-center mt-lg-5 mb-4">
                            <img class="img-fluid rounded-circle" src="<?php echo $data['profile_picture']; ?>" style="height:50px; width:50px" alt="..." />
                            <div class="ms-3">
                                <div class="fw-bold"><?php echo $data['name']; ?></div>
                                <div class="text-muted"><?php echo $data['email']; ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <!-- Post content-->
                        <article>
                            <!-- Post header-->
                            <header class="mb-4">
                                <!-- Post title-->
                                <h1 class="fw-bolder mb-1"><?php echo $data['judul_keluhan']; ?></h1>
                                <!-- Post meta content-->
                                <div class="text-muted fst-italic mb-2"><?php echo $data['tanggal_keluhan']; ?></div>
                            </header>

                            <!-- Preview image figure-->
                            <?php
                            if ($data['lampiran'] != "") {
                                echo '<figure class="mb-4"><img class="img-fluid rounded" src="' . $data['lampiran'] . '" alt="..." /></figure>';
                            } else {
                                //    echo 'tidak ada lampiran' ;
                            }
                            ?>

                            <section class="mb-5">
                                <p><?php echo $data['deskripsi_keluhan']; ?></p>
                            </section>
                        </article>
                        <!-- Comments section-->
                        <section>
                            <div class="card bg-light">
                                <div class="card-body">
                                    <!-- Comment form-->
                                    <form class="mb-4" id="balasTanggapanForm" method="post" action="./balas_tanggapan_process" role="form" enctype="multipart/form-data">
                                        <input class="form-control" id="id_keluhan" name="id_keluhan" type="text" value="<?php echo $id; ?>" placeholder="id_keluhan" required hidden />
                                        <textarea class="form-control" rows="3" id="tanggapan" name="tanggapan" placeholder="Beri tanggapan anda" required></textarea>
                                        <div class="button">
                                            <input type="submit" name="submit" class="btn btn-primary btn-block" />
                                        </div>
                                    </form>

                                    <?php
                                    while ($data2 = mysqli_fetch_assoc($query2)) {
                                        echo '
                                            <div class="d-flex mb-4">
                                            <!-- Parent comment-->
                                            <div class="flex-shrink-0"><img class="rounded-circle" src="' . $data2['profile_picture'] . '" style="height:50px; width:50px" alt="..." /></div>
                                            <div class="ms-3">
                                                <div class="fw-bold">' . $data2['name'] . '</div>
                                                <div class="text-muted fst-italic mb-1">' . $data2['tanggal'] . '</div>
                                                ' . $data2['tanggapan'] . '
                                            </div>
                                        </div>
                                            ';
                                    }
                                    ?>

                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

    </main>
</body>

</html>

<?php
include("view-footer.php");
?>