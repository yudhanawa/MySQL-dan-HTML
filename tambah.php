<!DOCTYPE html>
<html>
<head>
	<title>Tambah DATA SISWA</title>
</head>
<body>
	<h2>Tambah Data Siswa</h2>
	<p><a href="index.php">Home</a></p>

	<form action="tambah-proses.php" method="post">
		<table cellpadding="5" cellspacing="0">
			<tr>
				<td>ID Siswa</td>
				<td>:</td>
				<td><input type="text" name="id_siswa" required></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td>:</td>
				<td><input type="text" name="nama" size="50" required></td>
			</tr>
			<tr>
				<td>JENIS KELAMIN</td>
				<td>:</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="L" required> Laki-Laki<br>
					<input type="radio" name="jenis_kelamin" value="P"> Perempuan
				</td>
			</tr>
			<tr>
				<td>TANGGAL LAHIR</td>
				<td>:</td>
				<td><input type="date" name="tanggal_lahir" size="50" required></td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td>:</td>
				<td>
					<textarea name="alamat" cols="30" rows="4" required></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td>
					<input type="submit" value="TAMBAH" name="tambah">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>