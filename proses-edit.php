<?php

include ('koneksi.php');



	$Nim = $_POST['Nim'];
	$Nama = $_POST['Nama'];
	$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
	$Angkatan = $_POST['Angkatan'];

	$sql = "UPDATE mahasiswa SET Nama = '$Nama', Jenis_Kelamin = '$Jenis_Kelamin', Angkatan = '$Angkatan' WHERE Nim = '$Nim' ";
	

	if (mysqli_query($conn, $sql)) {
		
		header('Location: tampilmhs.php');
	} else {
		echo "Gagal menyimpan perubahan ...";
	}
 

?>