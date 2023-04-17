<?php
    include("view-header.php");
?>

<!DOCTYPE html>
<html lang="en">

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Page Content--><br>
        <section class="py-5">
            <div class="container px-5">

                <?php
                $query = mysqli_query($connect, "SELECT * FROM keluhan WHERE pelapor='$username'");
                ?>
                <div class="text-center mb-5">
                        <!-- <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div> -->
                        <h1 class="fw-bolder">Riwayat Keluhan</h1>
                        <!-- <p class="lead fw-normal text-muted mb-0">add text here</p> -->
                    </div>
                <div class="table-responsive">
                    <table class="table table-fixed table-striped">
                        <thead>
                            <tr>
                                <th scope="col" class="col-1">#</th>
                                <th scope="col" class="col-5">Judul Keluhan</th>
                                <th scope="col" class="col-3">Tanggal Keluhan</th>
                                <th scope="col" class="col-2">Status</th>
                                <th scope="col" class="col-3">Rincian</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($data = mysqli_fetch_assoc($query)) {
                                echo '<tr>
                                            <td>' . $no . '</td>
                                            <td>' . $data['judul_keluhan'] . '</td>
                                            <td>' . $data['tanggal_keluhan'] . '</td>
                                            <td>' . $data['status'] . '</td>
                                             <td class="right"><a href="./detail_keluhan?id=' . $data['id'] . '">Detail</a></td>

                                        </tr>';
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div><!-- End -->

            </div>
        </section>
    </main>
</body>

</html>

<?php
include("view-footer.php");
?>