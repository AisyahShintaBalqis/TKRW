<?php

include ('koneksi.php');



$id = $_POST['id'];
$judul = $_POST['judul'];
$nama_penulis = $_POST['nama_penulis'];
$nama_penerbit = $_POST['nama_penerbit'];
$jumlah = $_POST['jumlah'];


$edit = "UPDATE buku SET judul = '$judul', nama_penulis= '$nama_penulis', nama_penerbit = '$nama_penerbit', jumlah = '$jumlah' WHERE id = '$id' ";


if (mysqli_query($conn, $edit)) {

	echo "Update berhasil";

	/*header('Location: tampilmk.php');*/
} else {
	echo "Gagal menyimpan perubahan ...";
}


?>