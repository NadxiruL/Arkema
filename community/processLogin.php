<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'database/db_conection.php';

// menangkap data yang dikirim dari form login
$costumer_contact = $_POST['costumer_contact'];
$costumer_ic = $_POST['costumer_ic'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($dbcon,"select * from costumer where costumer_contact='$costumer_contact' and costumer_ic='$costumer_ic'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['costumer_type']=="Individual"){

		// buat session login dan username
		$_SESSION['costumer_contact'] = $costumer_contact;
		$_SESSION['costumer_type'] = "Individual";
		// alihkan ke halaman dashboard admin
		header("location:home.php");

	
	}
	// cek jika user login sebagai pegawai
	else if($data['costumer_type']=="Industry"){
		// buat session login dan username
		$_SESSION['costumer_contact'] = $costumer_contact;
		$_SESSION['costumer_type'] = "Industry";
		// alihkan ke halaman dashboard pegawai
		header("location:home.php");
	}

	

	else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
		
	}
	


}



?>