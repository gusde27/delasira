<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$_SESSION['USERNAME'] = $_POST['username'];
$user = $_SESSION['USERNAME'];
$password = $_POST['pass'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM user WHERE USERNAME='$user' AND PASSWORD='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['LEVEL']== "1"){
 
		// buat session login dan username
		$_SESSION['USERNAME'] = $user;
		$_SESSION['LEVEL'] = "1";
		// alihkan ke halaman dashboard admin
		header("location:admin.php");
 
	}else if($data['LEVEL']== "0"){
		
		$_SESSION['USERNAME'] = $user;
		$_SESSION['LEVEL'] = "0";
		
		header("location:pegawai.php");
 
	}else if($data['LEVEL']== "2"){
		
		$_SESSION['USERNAME'] = $user;
		$_SESSION['LEVEL'] = "2";
		
		header("location:manager.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	
	header("location:login.php?pesan=gagal");
}
 
?>