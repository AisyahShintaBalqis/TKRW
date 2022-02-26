<!DOCTYPE html>
<html>
<head>
	<title>Form Input Mahasiswa</title>
</head>
<body>

	<h1>Form Input Mahasiswa</h1>

	<form action="{{route('store-lecturer')}}" method="POST">


		<label>NIM</label>
		<br>                 
		<input type="text" name="nIM"  placeholder="NIM">
		<br><br>

		<label>NAMA</label> 
		<br>                
		<input type="text" name="nama"  placeholder="NAMA">
		<br><br>

		<label >Jenis Kelamin</label>
		<br>                 
		<input type="text" name="jk"  placeholder="Jenis Kelamin">
		<br><br>

		<label for="exampleInputNidn" class="form-label">Angkatan</label> 
		<br>                 
		<input type="number" name="anhkatan"  placeholder="Angkatan">
		<br><br><br>                 

<button type="submit">Simpan</button>
	</form>

</body>
</html>