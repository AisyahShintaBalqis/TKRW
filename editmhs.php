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

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>

	<div class="col-md-6 mx-auto mt-5 container"> 
		<div class="card">
			<div class="card-header bg-primary text-white">Form Input Data Mahasiswa</div>
			<div class="card-body">				

				<form action="proses-edit.php" method="POST">	

					<div class="mb-3">
						<label for="exampleFormControlNim" class="form-label">NIM</label>
						<input type="text" class="form-control" name="Nim" id="exampleFormControlInput1"  value="<?php echo ($data['Nim']); ?>" >
					</div>
					<div class="mb-3">
						<label for="exampleFormControlNama" class="form-label">NAMA</label>
						<input type="text" class="form-control" name="Nama" id="exampleFormControlNama" value="<?php echo ($data['Nama']); ?>"
					</div>


					

					
					

				<label for="Jenis_Kelamin">Jenis Kelamin: </label>
				<br>
				<?php $Jenis_Kelamin = $data['Jenis_Kelamin']; ?>

				<div class="form-check">
					<label><input type="radio" name="Jenis_Kelamin" value="Laki-Laki" <?php if($data['Jenis_Kelamin']=='L') echo 'checked'?>>Laki-laki</label>
					<br>
					<label><input type="radio" name="Jenis_Kelamin" value="Perempuan" <?php if($data['Jenis_Kelamin']=='P') echo 'checked'?>>Perempuan</label>
				</div>

				<div class="mb-3">
					<label for="exampleFormControlangkatan" class="form-label">Angkatan</label>
					<input type="number" class="form-control" name="Angkatan" id="exampleFormControlankatan" value="<?php echo ($data['Angkatan']); ?>">
				</div>


				
				<button type="submit" name="Simpan"  class="btn btn-primary">Update</button>




			</form>
		</div>
	</div>
</div>


</body>
</html>