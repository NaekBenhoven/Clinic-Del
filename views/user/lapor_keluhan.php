<?php
    include("view-header.php");
?>

<!DOCTYPE html>
<html lang="en">

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Page content-->
        <section class="py-5">
            <div class="container px-5">
                <!-- form-->
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-center mb-5">
                        <!-- <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div> -->
                        <h1 class="fw-bolder">Lapor Keluhan</h1>
                        <!-- <p class="lead fw-normal text-muted mb-0">add text here</p> -->
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <form id="keluhanForm" method="post" action="./keluhan_process" role="form" enctype="multipart/form-data">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="judul_keluhan" name="judul_keluhan" type="text" placeholder="Enter your title here..." required />
                                <label for="judul_keluhan">Judul Keluhan</label>
                                <div class="invalid-feedback" data-sb-feedback="judul_keluhan:required">A phone number is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="deskripsi_keluhan" name="deskripsi_keluhan" type="text" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                                <label for="deskripsi_keluhan">Deskripsi Keluhan</label>
                                <div class="invalid-feedback" data-sb-feedback="deskripsi_keluhan:required">A message is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <tr>
                                    <td>Lampiran</td>
                                    <td><input type="file" name="lampiran"></td>
                                </tr>
                            </div>
                            <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
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