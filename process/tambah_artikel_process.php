<?php
// Load file koneksi.php
include "config/connection.php";
include "process/login/config.php";
// Ambil Data yang Dikirim dari Form
// $id = $_POST['id'];
$judul_artikel = $_POST['judul_artikel'];
$deskripsi_artikel = $_POST['deskripsi_artikel'];
$username = $_SESSION['username'];
$lampiran = $_FILES['lampiran']['name'];
$tmp = $_FILES['lampiran']['tmp_name'];

$id = getUserId($username);

// Set path folder tempat menyimpan profile_picturenya
// $path = "image/upload/".$profile_picture;
$path = "image/upload/artikel/";

$path_file = $path.$lampiran;
move_uploaded_file($tmp, $path_file);

$lampiran_upload = 'image/upload/artikel/'.$lampiran; 

if (!$lampiran){
  $query = "INSERT INTO artikel (judul_artikel, deskripsi_artikel, lampiran, tanggal_artikel, user_id)
              VALUES('".$judul_artikel."', '".$deskripsi_artikel."', '', NOW(), '".$id."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      echo "<script>alert('artikel anda telah ditambahkan.'); window.location.href='./daftar_artikel';</script>";
      exit();
      header("location:./daftar_artikel"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='./daftar_artikel'>Kembali Ke Form</a>";
    }
}
else{   
    $query = "INSERT INTO artikel (judul_artikel, deskripsi_artikel, lampiran, tanggal_artikel, user_id)
              VALUES('".$judul_artikel."', '".$deskripsi_artikel."', '".$lampiran_upload."', NOW(), '".$id."')";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      echo "<script>alert('artikel anda telah ditambahkan.'); window.location.href='./daftar_artikel';</script>";
      exit();
      header("location:./daftar_artikel"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='./daftar_artikel'>Kembali Ke Form</a>";
    }
}
  
?>