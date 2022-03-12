
<?php

$id = $_POST['id'];
$judul = $_POST['judul'];
$nama_penulis = $_POST['nama_penulis'];
$nama_penerbit = $_POST['nama_penerbit'];
$jumlah = $_POST['jumlah'];


include ('koneksi.php');




$simpan = "INSERT INTO buku VALUES('$id', '$judul', '$nama_penulis', '$nama_penerbit', '$jumlah')";

if (mysqli_query($conn, $simpan)) {
	
	header('Location: tampilbuku.php');
	
	
}
else{
	echo "Data gagal di simpan" . $simpan . "<br>" . mysqli_error($conn) ;
}

?>
