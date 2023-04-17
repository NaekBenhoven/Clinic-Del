<?php


// Load file koneksi.php
include "config/connection.php";
include "process/login/config.php";
// Ambil Data yang Dikirim dari Form
// $id = $_POST['id'];
$id_keluhan = $_POST['id_keluhan'];
$tanggapan = $_POST['tanggapan'];
// $status = $_POST['status'];
if(isset($_POST['status'])){
  $status =$_POST['status']; 
  }else{
  $status = "status tidak ada";
  }
$username = $_SESSION['username'];

$query = mysqli_query($connect, "SELECT status FROM user WHERE username = '$username'");
$data  = mysqli_fetch_array($query);

if($data['status'] == 'admin'){
  $query = "UPDATE keluhan SET status = '$status' WHERE id = $id_keluhan";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query

  $query2 = "INSERT INTO tanggapan (id_keluhan, username, tanggapan, tanggal)
              VALUES('".$id_keluhan."', '".$username."', '".$tanggapan."', NOW())";
  $sql2 = mysqli_query($connect, $query2); // Eksekusi/ Jalankan query dari variabel $query
    
    if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      echo "<script>alert('Balasan anda telah disampaikan.'); window.location.href='./detail_keluhan_admin?id=$id_keluhan';</script>";
      exit();
      header("location:./daftar_keluhan"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='./daftar_keluhan'>Kembali Ke Form</a>";
    }
}
else{
  $query = "INSERT INTO tanggapan (id_keluhan, username, tanggapan, tanggal)
              VALUES('".$id_keluhan."', '".$username."', '".$tanggapan."', NOW())";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      echo "<script>alert('Balasan anda telah disampaikan. Silahkan menunggu respon.'); window.location.href='./detail_keluhan?id=$id_keluhan';</script>";
      exit();
      header("location:./riwayat_keluhan"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='./riwayat_keluhan'>Kembali Ke Form</a>";
    }
}
  
?>