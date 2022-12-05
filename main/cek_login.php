<?php 
// mengaktifkan session pada php
session_start();
// menghubungkan php dengan koneksi database
include 'koneksi.php';

// function antiinjection($data){
// 	global $mysqli;
// 	$filter_sql = mysqli_real_escape_string($mysqli,stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
// 	return $filter_sql;
//   }
  
  $email = mysqli_real_escape_string($koneksi ,$_POST['email']);
  $password = mysqli_real_escape_string($koneksi ,md5($_POST['password']));
// $email = $_POST['email'];
// $password = md5($_POST['password']);
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from employees where email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan

$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	// cek jika user login sebagai teknisi
	if($data['role']=="TEKNISI"){
		// buat session login dan username
		$_SESSION['email'] = $email;
		$_SESSION['role'] = "TEKNISI";
		header("location:login.php?pesan=berhasil");
	}else{
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
	}
?>