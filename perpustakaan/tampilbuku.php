<!DOCTYPE html>
<html>
<head>
	<title>Pepustakaan</title>



	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

	<div class="col-md-6 mx-auto mt-5 container">
		<div class="card">
			<div class="card-header bg-primary text-white">Data Buku</div>		

			<div class="card-body">
				<div class="col-md-12 text-right">
					<a class="btn btn-primary btn-sm" href="index.php"> Beranda </a>
					<a class="btn btn-primary  btn-sm" href="forminput.php"> Tambah Data </a>
				</div>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Judul</th>
							<th>Nama Penulis</th>
							<th>Nama Penerbit</th>
							<th>Jumlah</th>							
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>

						<?php

						include 'koneksi.php';

						$sql = "SELECT * FROM buku";
						$hasil = mysqli_query($conn, $sql);

						if(mysqli_num_rows($hasil) > 0){
							while ($data = mysqli_fetch_assoc($hasil)) {?>
								<tr>
									<td><?php echo $data ["judul"]; ?></td>
									<td><?php echo $data ["nama_penulis"]; ?></td>
									<td><?php echo $data ["nama_penerbit"]; ?></td>
									<td><?php echo $data ["jumlah"]; ?></td>
									<td>
										<a class="btn btn-success" href="edit.php?id= <?php echo $data["id"] ?>">Edit</a>
										<a class="btn btn-danger" href="hapus.php?id= <?php echo $data["id"] ?>">Hapus</a>				
									</td>
								</tr>
							<?php }
						} else ?>
						
					</tbody>




				</table>
			</body>

			</html>