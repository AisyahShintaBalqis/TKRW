<!DOCTYPE html>
<html>
<head>
	<title>Pepustakaan</title>
</head>
<body>

	<h1>Data Buku</h1>

	<table border="1">
		<tr>
			<th>Judul</th>
			<th>Nama Penulis</th>
			<th>Nama Penerbit</th>
			<th>Jumlah</th>
			<th>Aksi</th>
		</tr>

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
						<a class="btn btn-succes" href="edit.php?id= <?php echo $data["id"] ?>">Edit</a>
						<a class="btn btn-danger" href="hapus.php?id= <?php echo $data["id"] ?>">Hapus</a>				
					</td>
				</tr>
			<?php }
		} else ?>
		

	</table>
</body>

</html>