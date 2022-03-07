<!DOCTYPE html>
<html>
<head>
	<title>Form Input Mahasiswa</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

	

	<div class="col-md-6 mx-auto mt-5 container"> 
		<div class="card">
			<div class="card-header bg-primary text-white">Form Input Data Matakuliah</div>
			<div class="card-body">

				<form action="simpanmk.php" method="POST">


					<div class="mb-3">
						<label for="exampleFormControlNim" class="form-label">Nama</label>
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Mata Kuliah">
					</div>

					<div class="mb-3">
						<label for="exampleFormControlNama" class="form-label">Jumlah Sks</label>
						<input type="number" class="form-control" name="sks" id="sks" placeholder="Jumlah Sks">
					</div>					

					<div class="mb-3">
						<label for="exampleFormControlangkatan" class="form-label">Semester</label>
						<input type="number" class="form-control" name="semester" id="semester" placeholder="Semester">
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>




					
				</form>
			</div>
		</div>
	</div>


</body>
</html>