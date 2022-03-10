<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpustakaan";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
	
}
else{
	echo "Koneksi Gagal";
}

?>