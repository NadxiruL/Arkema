<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'database/db_conection.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($dbcon,"select * from users where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);


// cek apakah username dan password di temukan pada database
if($cek > 0 ){

	$data = mysqli_fetch_assoc($login);


	// cek jika user login sebagai superadmin
	if($data['userrole']=="collector"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['userrole'] = "collector";
		// alihkan ke halaman dashboard superadmin
		header("location:home.php");

	//23 10:30pm
	}
	// cek jika user login sebagai pegawai
	else if($data['userrole']=="admin"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['userrole'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:home.php");

	}
	
	
	else{

		// alihkan ke halaman login kembali
		//header("location:index.php?pesan=gagal");
		echo "<script type='text/javascript'>alert('Wrong password or username...');document.location='index.php'</script>";
	}

	
}else{
	//header("location:index.php?pesan=gagal");
	echo "<script type='text/javascript'>alert('Wrong password or username...');document.location='index.php'</script>";
}



?>