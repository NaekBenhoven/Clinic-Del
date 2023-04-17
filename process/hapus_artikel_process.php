<?php
// Load file koneksi.php
include "config/connection.php";
include "process/login/config.php";
// Ambil Data yang Dikirim dari Form
// $id = $_GET['id'];


$query = "DELETE FROM artikel WHERE id='$_GET[id]'";
$sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    echo "<script>alert('artikel anda telah dihapus.'); window.location.href='./daftar_artikel';</script>";
    exit();
    header("location:./daftar_artikel"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menghapus artikel.";
    echo "<br><a href='./daftar_artikel'>Kembali Ke Form</a>";
  }