<?php

include ('koneksi.php');



$id = $_POST['id'];
$nama = $_POST['nama'];
$sks = $_POST['sks'];
$semester = $_POST['semester'];


$edit = "UPDATE matakuliah SET nama = '$nama', sks = '$sks', semester = '$semester' WHERE id = '$id' ";


if (mysqli_query($conn, $edit)) {

	header('Location: tampilmk.php');
} else {
	echo "Gagal menyimpan perubahan ...";
}


?>