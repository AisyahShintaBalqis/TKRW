<?php
include("koneksi.php");

if(!isset($_GET['id']) ){
	header('Location: tampilmk.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM matakuliah WHERE id = '$id'";
$query = mysqli_query($conn, $sql);

if(mysqli_num_rows($query) == 1){
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
			<div class="card-header bg-primary text-white">Form Input Data Matakuliah</div>
			<div class="card-body">				

				<form action="proses-editmk.php" method="POST">	

					<div class="mb-3">
						<label for="id" class="form-label">Id</label>
						<input type="text" class="form-control" name="id" id="id"  value="<?php echo ($data['id']); ?>" >
					</div>

					<div class="mb-3">
						<label for="nama" class="form-label">Nama</label>
						<input type="text" class="form-control" name="nama" id="nama"  value="<?php echo ($data['nama']); ?>" >
					</div>
					<div class="mb-3">
						<label for="jumlah_sks" class="form-label">Jumlah Sks</label>
						<input type="text" class="form-control" name="sks" id="sks" value="<?php echo ($data['sks']); ?>"
					</div>				

				
				<div class="mb-3">
					<label for="semester" class="form-label">Semester</label>
					<input type="number" class="form-control" name="semester" id="semester" value="<?php echo ($data['semester']); ?>">
				</div>


				
				<button type="submit" name="Update"  class="btn btn-primary">Update</button>




			</form>
		</div>
	</div>
</div>


</body>
</html>