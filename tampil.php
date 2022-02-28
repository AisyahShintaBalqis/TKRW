<!DOCTYPE html>
<html>
<head>
	<title></title>

	
</head>
<body>
	<h1 style="text-align: center">Daftar Mahasiswa</h1>

	<a href="index.php" > Beranda </a>
	<a href="forminput.php" > Tambah Data </a>
	<br>
	<br>

	<table boreder="1">
		<tr>
			<th>Nim</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Angkatan</th>
			<th>Aksi</th>
		</tr>	

		<?php
		include ('koneksi.php');
		$koneksi = mysqli_connect('localhost', 'root', '', 'kampus');


		$query = "SELECT * FROM mahasiswa";
		$result = mysqli_query($koneksi, $query);

		if(mysqli_num_rows($result) > 0){
			while ($data = mysqli_fetch_assoc($result)) {?>

				<tr>
					<td><?php echo $data["Nim"] ?></td>
					<td><?php echo $data["Nama"] ?></td>
					<td><?php echo $data["Jenis_Kelamin"] ?></td>
					<td><?php echo $data["Angkatan"] ?></td>
					<td>
						<button>Hapus</button>
						<button>Edit</button>
					</td>
				</tr>
			<?php}
			}else {?>
			<tr>
				<td>Tidak ada data</td>
			</tr>
		} ;

	</table>
</body>
</html>