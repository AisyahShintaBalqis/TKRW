<?php

$id = $_POST['id'];
$nama = $_POST['nama'];
$sks = $_POST['sks'];
$semester = $_POST['semester'];

include ('koneksi.php');


$simpan="INSERT INTO matakuliah (id, nama, sks, semester) VALUES ('$id','$nama', '$sks', '$semester')";

if (mysqli_query($conn, $simpan)) {
	header('Location: tampilmk.php');
	
	
}
else{
	echo "Data gagal di simpan" . $simpan . "<br>" . mysqli_error($koneksi) ;
}

?>
