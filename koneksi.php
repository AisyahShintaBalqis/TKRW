<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kampus";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
	die("Connection failed: " . mysqli_connect_error());
}
else{
	echo "Koneksi berhasil";
}

?>