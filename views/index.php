<?php
    include("user/view-header.php");
?>

<!DOCTYPE html>
<html lang="en">
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Welcome </h1>
                                <h1 class="display-5 fw-bolder text-white mb-2">To </h1>
                                <h1 class="display-5 fw-bolder text-white mb-2">Klinik IT Del </h1>
                                <p class="lead fw-normal text-white-50 mb-4">Website ini bernama Klinik IT Del, yang berisi mengenai informasi artikel tentang kesehatan, penyampaian dan pengisian data keluhan setiap pasien. Website ini dibuat agar Dokter dan Pasien dapat melakukan konsultasi secara online. </p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                            <img class="img-fluid rounded-3 my-5" src="image/k4.jpg" alt="..." />
                        </div>
                    </div>
                </div>
            </header>
            
        
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Artikel</h2>
                                <p class="lead fw-normal text-muted mb-5">Selamat Membaca</p>
                            </div>
                        </div>
                    </div>
                    <!-- gambar 1 -->
                    <div class="row gx-5">
                        <?php
                            $query = mysqli_query($connect, "SELECT * FROM artikel");
                            // $data  = mysqli_fetch_array($query);
                            
                        ?>
                        <?php
                            while ($data = mysqli_fetch_assoc($query))
                            {
                                echo '<div class="col-lg-4 mb-5">';
                                    echo '<div class="card h-100 shadow border-0">';
                                        // echo '<img class="card-img-top" src="'.$data['lampiran'].' "" alt="..." />';
                                        echo "<img class='card-img-top' src='" . $data['lampiran'] . "' height='200' width='115'>";
                                        echo '<div class="card-body p-4">';
                                            echo '<div class="badge bg-primary bg-gradient rounded-pill mb-2">Artikel</div>';
                                            echo '<a class="text-decoration-none link-dark stretched-link" href="./detail_artikel?id='.$data['id'].'"><h5 class="card-title mb-3">'.$data['judul_artikel'].'</h5></a>';
                                            echo '<p class="card-text mb-0">'.substr($data['deskripsi_artikel'], 0, 60).' ...</p>';
                                        echo '</div>';
                                        echo '<div class="card-footer p-4 pt-0 bg-transparent border-top-0">';
                                            echo '<div class="d-flex align-items-end justify-content-between">';
                                            echo '</div>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                                
                            }
                        ?>
                        
                        <!-- <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="image/k1.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Artikel</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="./artikel-hidup-sehat"><h5 class="card-title mb-3">Hidup Sehat</h5></a>
                                    <p class="card-text mb-0">Hidup Sehat adalah hidup yang bebas dari semua masalah rohani (mental) ataupun masalah jasmani (fisik). Hidup sehat bisa diartikan sebagai....</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- gambar 2 -->
                        <!-- <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="image/k2.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Artikel</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="./artikel-kesehatan-mental"><h5 class="card-title mb-3">Kesehatan Mental</h5></a>
                                    <p class="card-text mb-0">Kesehatan mental yang baik adalah kondisi ketika batin kita berada dalam keadaan tentram dan tenang, sehingga memungkinkan kita untuk menikmati kehidupan sehari-hari....</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                </div>
                            </div>
                        </div> -->
                        <!-- gambar 3 -->
                        <!-- <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="image/k3.jpg" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Artikel</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="./artikel-manfaat-minum"><h5 class="card-title mb-3">7 Manfaat Minum Air untuk Tubuh</h5></a>
                                    <p class="card-text mb-0">Air adalah salah satu hal yang sangat penting untuk kesehatan tubuh. Apa saja manfaatnya? Berikut ini adalah ulasannya....</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>

<?php
    include("user/view-footer.php");
?>