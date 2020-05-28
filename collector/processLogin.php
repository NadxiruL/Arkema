<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'database/db_conection.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($dbcon,"select * from collector where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_fetch_assoc($login); //array untuk data text

//num_rows untuk nombor

$status=$cek['status'];
// cek apakah username dan password di temukan pada database

		if ($status == 1 ) {
			
				$_SESSION['username'] = $username;
				echo "<script type='text/javascript'>alert('Welcome to eWasteSys...');document.location='home.php'</script>";
				//header("location:home.php");
			
		}
		
		else {
			
			echo "<script type='text/javascript'>alert('Your account is awaiting approval from admin...');document.location='index.php'</script>";
			//header("location:index.php");
			
		}



/*if($cek > 0 ){

	$data = mysqli_fetch_assoc($login);


	// cek jika user login sebagai superadmin
	if($data['userrole']=="collector"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['userrole'] = "collector";
		// alihkan ke halaman dashboard superadmin
		header("location:home.php");

	
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
		header("location:index.php?pesan=gagal");
	}

	
}else{
	header("location:index.php?pesan=gagal");
} */



?>