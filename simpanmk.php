<?php

$id = $_POST['id']
$nama = $_POST['nama'];
$sks = $_POST['sks'];
$semester = $_POST['semester'];

include ('koneksi.php');


$simpan="INSERT INTO matakuliah (nama, sks, semester) VALUES ('$nama', '$sks', '$semester')";

if (mysqli_query($conn, $simpan)) {
	header('Location: tampilmatakuliah.php');
	
	
}
else{
	echo "Data gagal di simpan" . $simpan . "<br>" . mysqli_error($koneksi) ;
}

?>
