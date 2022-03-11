

<?php

$judul = $_POST['judul'];
$nama_penulis = $_POST['nama_penulis'];
$nama_penerbit = $_POST['nama_penerbit'];
$jumlah = $_POST['jumlah'];
$id = $_POST['id'];

include 'koneksi.php';

$sql = "UPDATE  buku SET judul = '$judul', nama_penulis= '$nama_penulis', nama_penerbit = '$nama_penerbit', jumlah = '$jumlah' WHERE id='$id' ";

if (mysqli_query($conn, $sql)) {
	echo "Update berhasil";
    /*header('location:index.php');*/
} else {
    echo "Gagal Edit Data";
}

