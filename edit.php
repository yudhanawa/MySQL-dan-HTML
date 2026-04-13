<!DOCTYPE html>
<html>
<head>
	<title>Edit DATA Siswa</title>
</head>
<body>
	<h2>Edit Data Siswa</h2>
	<p><a href="index.php">Home</a></p>
	<?php 
	include("koneksi.php");
	$id = $_GET['id'];
	$show = mysqli_query($db,"SELECT * FROM siswa1 WHERE id_siswa = '$id'");
	if(mysqli_num_rows($show) == 0){
		echo "<script>window.history.back()</script>";
	}
	else {
		$data = mysqli_fetch_assoc($show);
	}
	?>
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<table cellpadding="5" cellspacing="0">
			<tr>
				<td>ID SISWA</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['id_siswa']; ?>" name="id_siswa" required></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $data['nama']; ?>" name="nama" size="50" required></td>
			</tr>
			<tr>
				<td>JENIS KELAMIN</td>
				<td>:</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="L" required <?php if($data['jenis_kelamin'] == 'L'){ echo 'checked';}?>> Laki-Laki<br>
					<input type="radio" name="jenis_kelamin" value="P" <?php if($data['jenis_kelamin'] == 'P'){ echo 'checked';}?>> Perempuan
				</td>
			</tr>
			<tr>
				<td>TANGGAL LAHIR</td>
				<td>:</td>
				<td><input type="date" value="<?php echo $data['tanggal_lahir'];
				?>" name="tanggal_lahir" size="50" required></td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td>:</td>
				<td>
					<textarea name="alamat" cols="30" rows="4" required><?php echo $data['alamat']; ?></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td>
					<input type="submit" value="Simpan" name="simpan">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>