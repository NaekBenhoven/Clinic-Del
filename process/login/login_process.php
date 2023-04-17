<?php
include("config.php");
// include "config/connection.php";
// if(isset($_POST['login']))
// {
// 	$username = secure($_POST['username'], $connect);
// 	$password =  secure($_POST['password'], $connect);
	
// 	$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
// 	if($res = $connect->query($sql))
// 	{
// 		if($res->num_rows > 0)
// 		{
// 			$_SESSION['username'] = $username;
// 			$_SESSION['password'] = $password;
			
// 			// header("Location:./");
// 			exit;
// 		}
// 		else
// 		{
// 			echo"<script> alert('INVALID USERNAME OR PASSWORD');</script>";
// 		}
// 	}
// }

if (isset($_SESSION['username'])) {
    header("Location: ./");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hash = md5($password);
 
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password_hash'";
    $result = mysqli_query($connect, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: ./");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!'); window.location.href='./login';</script>";
    }
}
?>