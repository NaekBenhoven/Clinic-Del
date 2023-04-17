<?php
// Load file koneksi.php
include "config/connection.php";
include "process/login/config.php";
// Ambil Data yang Dikirim dari Form
// $id = $_POST['id'];
$judul_keluhan = $_POST['judul_keluhan'];
$deskripsi_keluhan = $_POST['deskripsi_keluhan'];
$username = $_SESSION['username'];
$pelapor = $username;
$lampiran = $_FILES['lampiran']['name'];
$tmp = $_FILES['lampiran']['tmp_name'];

// Set path folder tempat menyimpan profile_picturenya
// $path = "image/upload/".$profile_picture;
$path = "image/upload/".$username."/lampiran/";

// Checking whether file exists or not
if (!file_exists($path)) {
  // Create a new file or direcotry
  mkdir($path, 0777, true);
  $path_file = $path.$lampiran;
  // $file_dir = $create_folder.$profile_picture;
  move_uploaded_file($tmp, $path_file);
}
else {
  echo "The Given file path already exists";
  $path_file = $path.$lampiran;
  move_uploaded_file($tmp, $path_file);

}

// $profile_picture_path = 'image/upload/'.$username.'/default_picture.jpg';
$lampiran_upload = 'image/upload/'.$username.'/lampiran/'.$lampiran; 

if (!$lampiran){
  $query = "INSERT INTO keluhan (pelapor, judul_keluhan, deskripsi_keluhan, lampiran, tanggal_keluhan, status)
              VALUES('".$pelapor."', '".$judul_keluhan."', '".$deskripsi_keluhan."', '', NOW(), 'dikirim')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      echo "<script>alert('Keluhan anda telah disampaikan. Silahkan menunggu respon.'); window.location.href='./profil';</script>";
      exit();
      header("location:./lapor_keluhan"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='./lapor_keluhan'>Kembali Ke Form</a>";
    }
}
else{   
    $query = "INSERT INTO keluhan (pelapor, judul_keluhan, deskripsi_keluhan, lampiran, tanggal_keluhan, status)
              VALUES('".$pelapor."', '".$judul_keluhan."', '".$deskripsi_keluhan."', '".$lampiran_upload."', NOW(), 'dikirim')";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      echo "<script>alert('Keluhan anda telah disampaikan. Silahkan menunggu respon.'); window.location.href='./profil';</script>";
      exit();
      header("location:./lapor_keluhan"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='./lapor_keluhan'>Kembali Ke Form</a>";
    }
}
  
?>