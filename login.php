<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'dbconnect.php';
date_default_timezone_set("Asia/Bangkok");
$timenow = date("j-F-Y-h:i:s A");

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from tb_pengguna where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);
	
	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		$_SESSION['status'] = "login";
		// alihkan ke halaman dashboard admin
		header("location:admin/index.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="client"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "client";
		$_SESSION['status'] = "login";
		$_SESSION['password'] = $password;

		// alihkan ke halaman dashboard client
		header("location:client/index.php");

	}else{
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>