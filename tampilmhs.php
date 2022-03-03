<?php 
include ('koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	
</head>
<body>
	<h1 style="text-align: center">Daftar Mahasiswa</h1>

	<a href="index.php" > Beranda </a>
	<br>
	<a href="forminput.php" > Tambah Data </a>
	<br>
	<br>

	<table border="1">
		<tr>
			<th>Nim</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Angkatan</th>
			<th>Aksi</th>
		</tr>	

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
		 	

	</table>

	<p>Total: <?php echo mysqli_num_rows($query) ?> </p>
</body>
</html>