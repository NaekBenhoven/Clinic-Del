<?php
include("view-header.php");
$id = $_GET['id'];
?>

<?php
$query = mysqli_query($connect, "SELECT * FROM artikel WHERE id='$_GET[id]'");
$data  = mysqli_fetch_array($query);
$query2 = mysqli_query($connect, "SELECT * FROM artikel WHERE id != '$_GET[id]'");
?>

<!DOCTYPE html>
<html lang="en">
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <!-- Page Content-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        
                        <div class="col-lg-9">
                            <!-- Post content-->
                            <article>
                                <!-- Post header-->
                                <header class="mb-4">
                                    <!-- Post title-->
                                    <h1 class="fw-bolder mb-1"><?php echo $data['judul_artikel'] ?></h1>
                                    <!-- Post meta content-->
                                    <div class="text-muted fst-italic mb-2"><?php echo $data['tanggal_artikel'] ?></div>
                                    
                                </header>
                                <!-- Preview image figure-->
                                <figure class="mb-4"><img class="img-fluid rounded" src="<?php echo $data['lampiran'] ?>" max-width:600px alt="..." /></figure>
                                <!-- Post content-->
                                <section class="mb-5">
                                    <p class="fs-5 mb-4" style="text-align: justify;"><?php echo $data['deskripsi_artikel'] ?></p>
                                </section>
                            </article>  
                        </div>
                        <div class="col-lg-3">
                        <?php
                            while ($data2 = mysqli_fetch_assoc($query2))
                            {
                                echo '<div class="d-flex align-items-center mt-lg-5 mb-4">';
                                echo '<img class="img-fluid rounded-circle" src="'.$data2['lampiran'].'" style="height:50px; width:50px" alt="..." />';
                                echo '<div class="ms-3">';
                                    echo '<h5 class="card-title mb-3"><a style="text-decoration:none" href="./detail_artikel?id='.$data2['id'].'">'.$data2['judul_artikel'].'</a></h5>';
                                    echo '<div class="text-muted">'.substr($data2['deskripsi_artikel'], 0, 40).'....</div>';
                                echo '</div>';
                            echo '</div>';
                            }
                        ?>
                            <!-- <div class="d-flex align-items-center mt-lg-5 mb-4">
                                <img class="img-fluid rounded-circle" src="image/k2.jpg" style="height:50px; width:50px" alt="..." />
                                <div class="ms-3">
                                    <h5 class="card-title mb-3"><a style="text-decoration:none" href="./artikel-kesehatan-mental">Kesehatan Mental</a></h5>
                                    <div class="text-muted">Kesehatan mental yang baik adalah....</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mt-lg-5 mb-4">
                                <img class="img-fluid rounded-circle" src="image/k3.jpg" style="height:50px; width:50px" alt="..." />
                                <div class="ms-3">
                                    <h5 class="card-title mb-3"><a style="text-decoration:none" href="./artikel-manfaat-minum">7 Manfaat Minum Air untuk Tubuh</a></h5>
                                    <div class="text-muted">Air adalah salah satu hal yang....</div>
                                </div>
                            </div> -->
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