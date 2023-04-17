<?php
    include("view-header.php");

    $query = mysqli_query($connect, "SELECT * FROM artikel WHERE id='$_GET[id]'");
    $data  = mysqli_fetch_array($query);
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
                        <h1 class="fw-bolder">Edit Artikel</h1>
                        <!-- <p class="lead fw-normal text-muted mb-0">add text here</p> -->
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <form id="keluhanForm" method="post" action="./edit_artikel_process" role="form" enctype="multipart/form-data">
                            <input class="form-control" id="id" name="id" value="<?php echo $data['id'] ?>" type="text" hidden />
                            <div class="form-floating mb-3">
                                <input class="form-control" id="judul_artikel" name="judul_artikel" value="<?php echo $data['judul_artikel'] ?>" type="text" placeholder="Enter your title here..." required />
                                <label for="judul_artikel">Judul Artikel</label>
                                <div class="invalid-feedback" data-sb-feedback="judul_artikel:required">judul artikel is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <!-- <textarea class="form-control" id="deskripsi_artikel" name="deskripsi_artikel" type="text" placeholder="Enter your message here..." style="height: 10rem" required></textarea> -->
                                <label for="deskripsi_artikel">Deskripsi Keluhan</label>
                                <textarea id="deskripsi_artikel" name="deskripsi_artikel" ><?php echo $data['deskripsi_artikel'] ?></textarea>
                                <div class="invalid-feedback" data-sb-feedback="deskripsi_artikel:required">deskripsi is required.</div>
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