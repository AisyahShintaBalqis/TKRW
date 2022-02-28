<?php

$Nim = $_POST['Nim'];
$Nama = $_POST['Nama'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Angkatan = $_POST['Angkatan'];

include ('koneksi.php');
$koneksi = mysqli_connect('localhost', 'root', '', 'kampus');

$sql="INSERT INTO mahasiswa (Nim, Nama, Jenis_Kelamin, Angkatan) VALUES ('$Nim ', '$Nama', '$Jenis_Kelamin', '$Angkatan')";

if (mysqli_query($koneksi, $sql)) {
	echo "Data Berhasil Di Simpan";
	
}
else{
	echo "Data gagal di simpan" . $sql . "<br>" . mysqli_error($koneksi) ;
}

?>
