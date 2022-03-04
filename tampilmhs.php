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
			

			<a class="btn btn-primary" href="index.php"> Beranda </a>

			<a class="btn btn-primary" href="forminput.php"> Tambah Data </a>

			
			<br>
			<br>

			<div class="card-body">
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

						while ($data = mysqli_fetch_array($query)){
							echo "<tr>";

							echo "<td>".$data['Nim']."</td>";
							echo "<td>".$data['Nama']."</td>";
							echo "<td>".$data['Jenis_Kelamin']."</td>";
							echo "<td>".$data['Angkatan']."</td>";

							echo "<td>";
							echo "<a href='editmhs.php?Nim=".$data['Nim']."'>Edit</a> | ";
							echo "<a href='hapus.php?Nim=".$data['Nim']."'>Hapus</a>";
							echo "</td>";

							echo "</tr>";
						}
						?>

					</tbody>
				</table>
			</div>

			<p>Total: <?php echo mysqli_num_rows($query) ?> </p>

		</div>
	</div>

</body>
</html>