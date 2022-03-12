
<?php

include 'koneksi.php';

if (!isset($_GET['id'])) {
	header('location : index.php');
}
$id = $_GET['id'];
$sql = "SELECT * FROM buku WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	$data = mysqli_fetch_array($result);
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>

	<div class="col-md-6 mx-auto mt-5 container"> 
		<div class="card">
			<div class="card-header bg-primary text-white">Form Edit Buku</div>
			<div class="card-body">				

				<form action="prosesedit.php" method="POST">					

					<div class="mb-3">
						<label for="judul" class="form-label">Judul</label>
						<input type="text" class="form-control" name="judul" id="judul"  value="<?php echo ($data['judul']); ?>" >
					</div>
					<div class="mb-3">
						<label for="nama_penulis" class="form-label">Nama Penulis</label>
						<input type="text" class="form-control" name="nama_penulis" id="nama_penulis" value="<?php echo ($data['nama_penulis']); ?>"
					</div>				


					<div class="mb-3">
						<label for="nama_penerbit" class="form-label">Nama Penerbit</label>
						<input type="text" class="form-control" name="nama_penerbit" id="nama_penerbit" value="<?php echo ($data['nama_penerbit']); ?>">
					</div>

					<div class="mb-3">
						<label for="jumlah" class="form-label">Jumlah</label>
						<input type="text" class="form-control" name="jumlah" id="jumlah" value="<?php echo ($data['jumlah']); ?>">
					</div>



					<td><input type="hidden" name="id" value="<?php echo $data['id'] ?>"></td>
					<button type="submit" class="btn btn-primary">Update</button>
					
				</form>
			</div>
		</div>
	</div>


</body>
</html>