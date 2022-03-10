 <?php

include 'koneksi.php';

if(isset($_GET['id']) ){
	$id = $_GET['id'];

	$sql = "DELETE FROM buku WHERE id = '$id' ";
	$query = mysqli_query($conn, $sql);

	if ($query) {
		echo "berhasil di hapus";
	}
	else{
		echo "gagal Menghapus...";
	}

} else{
	echo "Akses Di larang";
}
?>