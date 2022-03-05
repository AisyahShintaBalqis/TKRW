<?php 
include ('koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
</head>
<body>

	<div class="col-md-6 mx-auto mt-5 container">
		<div class="card">
			<div class="card-header bg-primary text-white">Daftar Mahasiswa</div>		

			<div class="card-body">
				<div class="col-md-12 text-right">
					<a class="btn btn-primary btn-sm" href="index.php"> Beranda </a>
					<a class="btn btn-primary  btn-sm" href="forminput.php"> Tambah Data </a>
				</div>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Nim</th>
							<th>Nama</th>
							<th>Jenis Kelamin</th>
							<th>Angkatan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>


						<?php

						$sql = "SELECT * FROM mahasiswa";
						$query = mysqli_query($conn, $sql);
						if (mysqli_num_rows($query) > 0) {
							while ($data = mysqli_fetch_assoc($query)) { ?>
								<tr>
									<td><?php echo $data['Nim'] ?></td>
									<td><?php echo $data['Nama'] ?></td>
									<td><?php echo $data['Jenis_Kelamin'] ?></td>
									<td><?php echo $data['Angkatan'] ?></td>
									<td>
										<a class="btn btn-success" href="editmhs.php?Nim=<?php echo $data["Nim"] ?>">Edit</a>
										<a class="btn btn-danger" href="hapus.php?Nim=<?php echo $data["Nim"] ?> ">Hapus</a>
									</td>
								</tr>
							<?php }
						} else ?>
						
					</tbody>
				</table>
				<p>Total Data: <?php echo mysqli_num_rows($query) ?> </p>
			</div>

			

		</div>
	</div>

</body>
</html>