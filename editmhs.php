<?php
include("koneksi.php");

if(!isset($_GET['Nim']) ){
	header('Location: tampilmhs.php');
}

$Nim = $_GET['Nim'];

$sql = "SELECT * FROM mahasiswa WHERE Nim = '$Nim'";
$query = mysqli_query($conn, $sql);

if(mysqli_num_rows($query) > 0){
	$data = mysqli_fetch_array($query);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Edit</title>
</head>
<body>

	<header>Form Edit Data Mahasiswa</header>

	<form action="proses-edit.php" method="POST">		
			
				<input type="text" name="Nim" value="<?php echo ($data['Nim']); ?>" hidden="True" />
				<label>Nama</label>
				<br>			
				<input type="text" name="Nama" value="<?php echo ($data['Nama']); ?>" />
				<br><br>
			
				<label for="Jenis_Kelamin">Jenis Kelamin: </label>
				<br>
            <?php $Jenis_Kelamin = $data['Jenis_Kelamin']; ?>
            <label><input type="radio" name="Jenis_Kelamin" value="laki-laki" <?php echo ($Jenis_Kelamin == 'laki-laki') ? "checked": "" ;?> > Laki-laki</label>
            <br>
            <label><input type="radio" name="Jenis_Kelamin" value="perempuan" <?php echo ($Jenis_Kelamin == 'perempuan') ? "checked": "" ;?> > Perempuan</label>
            <br><br>

            <label>Angkatan</label>
            <br>
			<input type="nummber" name="Angkatan" value="<?php echo ($data['Angkatan']); ?>" />
			<br><br>
				<input type="submit" value="Simpan" name="Simpan" />
			

			
		
	</form>

</body>
</html>