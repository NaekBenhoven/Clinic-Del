<?php
    include("view-header.php");
?>

<!DOCTYPE html>
<html lang="en">
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Page Content-->
            <section class="py-5">
                <div class="container px-5">

                    <?php
                        $query = mysqli_query($connect, "SELECT * FROM artikel");
                        // $data  = mysqli_fetch_array($query);
                        
                    ?>
                    <div class="text-center mb-5">
                        <!-- <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div> -->
                        <h1 class="fw-bolder">Daftar Artikel</h1>
                        <!-- <p class="lead fw-normal text-muted mb-0">add text here</p> -->
                    </div>
                    <a href="./tambah_artikel"><button type="button" class="btn btn-primary">Tambah Artikel</button></a>
                    <br>
                    <br>

                    <div class="table-responsive">
                    <table class="table table-fixed table-striped">
                        <thead>
                            <tr>
                                <th scope="col" class="col-1">#</th>
                                <th scope="col" class="col-3">Judul Artikel</th>
                                <th scope="col" class="col-6">Deskripsi Artikel</th>
                                <th scope="col" class="col-2">Tanggal Artikel</th>
                                <th scope="col" class="col-1">Rincian</th>
                                   
                            </tr>
                        </thead>
                        <tbody>
                           <?php
                                $no = 1;
                                while ($data = mysqli_fetch_assoc($query))
                                
                                {
                                    echo '<tr>
                                            <td>'.$no.'</td>
                                            <td>'.$data['judul_artikel'].'</td>
                                            <td>'.substr($data['deskripsi_artikel'], 0, 60).'</td>
                                            <td>'.$data['tanggal_artikel'].'</td>
                                            <td><a href="./detail_artikel?id='.$data['id'].'"><button type="button" class="btn btn-info">Detail</button></a></td>
                                            <td><a href="./edit_artikel?id='.$data['id'].'"><button type="button" class="btn btn-success">Edit</button></a></td>
                                            <td><a href="./hapus_artikel?id='.$data['id'].'"><button type="button" class="btn btn-danger" onclick="deleteFunction()">Delete</button></td>

                                        </tr>';
                                $no++;
                                    }
                           ?>
                                            <!-- <td class="right"><a href="./detail_artikel?id='.$data['id'].'">Detail</a></td> -->
                        </tbody>
                    </table>
                </div><!-- End -->
                
                </div>
            </section>
        </main>
    </body>
</html>
<script>
function deleteFunction() {
  confirm("Apakah anda yakin untuk menghapus artikel?");
//   window.location.href='./hapus_artikel?id=".$data['id']."'
//   <a href="./hapus_artikel?id='.$data['id'].'">
}
</script>
<?php
    include("view-footer.php");
?>