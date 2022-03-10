<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="col-md-5 mx-auto mt-5 container">
		<div class="card">
			<div class="card-header bg-primary white-text">Form Input Data Buku</div>
			<div class="card-body">
				
				<form action="prosessimpan.php" method="POST">


					<div class="mb-3">
						<label class="form-label">Judul</label>
						<br>
						<input type="text" class="form-control" name="judul">

					</div>

					<div class="mb-3">
						<label class="form-label">Nama Penulis</label>
						<br>
						<input type="text" class="form-control" name="nama_penulis">

					</div>

					<div class="mb-3">
						<label class="form-label">Nam Penerbit</label>
						<br>
						<input type="text" class="form-control" name="nama_penerbit">

					</div>	
					<div class="mb-3">
						<label class="form-label">Jumlah</label>
						<br>
						<input type="text" class="form-control" name="jumlah">

					</div>		
					

					<input type="submit" class="btn btn-primary btn-sm" value="simpan">

				</form>
			</div>
			</div>	
		</div>
</body>
</html>