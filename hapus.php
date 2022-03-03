<?php

include("koneksi.php");

if(isset($_GET['Nim']) ){
	$Nim = $_GET['Nim'];

	$sql = "DELETE FROM mahasiswa WHERE Nim = '$Nim' ";
	$query = mysqli_query($conn, $sql);

	if ($query) {
		header('Location: tampilmhs.php');
	}
	else{
		echo "gagal Menghapus...";
	}

} else{
	echo "Akses Di larang";
}
?>