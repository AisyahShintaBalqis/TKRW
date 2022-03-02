<?php

$Nim = $_POST['Nim'];
$Nama = $_POST['Nama'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Angkatan = $_POST['Angkatan'];

include ('koneksi.php');


$sql="INSERT INTO mahasiswa (Nim, Nama, Jenis_Kelamin, Angkatan) VALUES ('$Nim ', '$Nama', '$Jenis_Kelamin', '$Angkatan')";

if (mysqli_query($conn, $sql)) {
	header('Location: tampilmhs.php');
	
}
else{
	echo "Data gagal di simpan" . $sql . "<br>" . mysqli_error($koneksi) ;
}

?>
