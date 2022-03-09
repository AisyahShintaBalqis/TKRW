 <?php

include("koneksi.php");

if(isset($_GET['id']) ){
	$id = $_GET['id'];

	$sql = "DELETE FROM matakuliah WHERE id = '$id' ";
	$query = mysqli_query($conn, $sql);

	if ($query) {
		header('Location: tampilmk.php');
	}
	else{
		echo "gagal Menghapus...";
	}

} else{
	echo "Akses Di larang";
}
?>