<?php

$judul = $_POST['judul'];
$nama_penulis = $_POST['nama_penulis'];
$nama_penerbit = $_POST['nama_penerbit'];
$jumlah = $_POST['jumlah'];

include 'koneksi.php';

$sql = "INSERT INTO buku(judul, nama_penulis, nama_penerbit, jumlah) VALUES ('$judul', '$nama_penulis', '$nama_penerbit', '$jumlah')";

if (mysqli_query($conn, $sql)) {
	echo "Simpan Data Berhasil";
}
else{
	echo "Error";
}

?>