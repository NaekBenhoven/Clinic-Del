<?php
// Load file koneksi.php
include "config/connection.php";
// Ambil Data yang Dikirim dari Form
// $id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$password_hash = md5($password);
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$profile_picture = $_FILES['profile_picture']['name'];
$tmp = $_FILES['profile_picture']['tmp_name'];

// Set path folder tempat menyimpan profile_picturenya
// $path = "image/upload/".$profile_picture;
$path = "image/upload/".$username."/";

// Checking whether file exists or not
if (!file_exists($path)) {
  // Create a new file or direcotry
  mkdir($path, 0777, true);
  $path_file = $path.$profile_picture;
  // $file_dir = $create_folder.$profile_picture;
  move_uploaded_file($tmp, $path_file);
}
else {
  echo "The Given file path already exists1";
  $path_file = $path.$profile_picture;
  move_uploaded_file($tmp, $path_file);

}

$profile_picture_path = 'image/upload/'.$username.'/default_picture.jpg';
$profile_picture_upload = 'image/upload/'.$username.'/'.$profile_picture; 

// Proses upload image
// move_uploaded_file($tmp, $path);
//validasi ketersediaan akun user
//validasi username
$q1 = "SELECT * FROM user WHERE username = '$username'";
$exec1 = mysqli_query($connect, $q1);
$q2 = "SELECT * FROM user WHERE email = '$email'";
$exec2 = mysqli_query($connect, $q2);
$q3 = "SELECT * FROM user WHERE phone_number = '$phone_number'";
$exec3 = mysqli_query($connect, $q3);
if ($exec1->num_rows == 1){
    echo "<script> alert('Username sudah terdaftar'); window.location.href='./registration';</script>";
}
if ($exec2->num_rows == 1){
    echo "<script> alert('Email sudah terdaftar'); window.location.href='./registration';</script>";
}
if ($exec3->num_rows == 1){
    echo "<script> alert('Nomor telepon sudah terdaftar'); window.location.href='./registration';</script>";
}
else if (!$profile_picture){
      $source = 'image/default_picture.jpg'; 
      $destination = "image/upload/".$username."/default_picture.jpg";
      if( !copy($source, $destination) ) { 
        echo "File can't be copied! \n"; 
      } 
      else { 
          echo "File has been copied! \n"; 
      }  

    
    $query = "INSERT INTO user (name, email, username, password, phone_number, address, profile_picture, status)
              VALUES('".$name."', '".$email."', '".$username."', '".$password_hash."', '".$phone_number."', '".$address."', '".$profile_picture_path."', 'user')";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      echo "<script>alert('Akun anda telah didaftarkan. Silahkan login kembali.'); window.location.href='./login';</script>";
      exit();
      header("location:./login"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='./registration'>Kembali Ke Form</a>";
    }
}
else{
    $query = "INSERT INTO user (name, email, username, password, phone_number, address, profile_picture, status)
              VALUES('".$name."', '".$email."', '".$username."', '".$password_hash."', '".$phone_number."', '".$address."', '".$profile_picture_upload."', 'user')";
    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      echo "<script>alert('Akun anda telah didaftarkan. Silahkan login kembali.'); window.location.href='./login';</script>";
      exit();
      header("location:./login"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='./registration'>Kembali Ke Form</a>";
    }
}
  
?>