<!DOCTYPE html>
<html>
<head>
	<title>DATA SISWA</title>
</head>
<body>
	<h2>Data Siswa</h2>
	<p><a href="tambah.php">Tambah Data</a></p>
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#ccc">
			<th>No</th>
			<th>ID Siswa</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<?php
		include("koneksi.php");

		$query = mysqli_query($db,"SELECT * FROM siswa1 ORDER BY id_siswa ASC");

		if(mysqli_num_rows($query) == 0){ ?>
			<tr><td colspan="7">Tidak ada data</td></tr>
		<?php }
		else{ 
			$no = 1;
			while($data = mysqli_fetch_assoc($query)){
			?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $data['id_siswa'] ?></td>
				<td><?php echo $data['nama'] ?></td>
				<td><?php echo $data['jenis_kelamin'] ?></td>
				<td><?php echo $data['tanggal_lahir'] ?></td>
				<td><?php echo $data['alamat'] ?></td>
				<td>
				<a href="edit.php?id=<?php echo $data['id_siswa'] ?>">Edit</a> 
				<a href="hapus.php?id=<?php echo $data['id_siswa'] ?>" 
				onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini?')">
				Hapus</a>
				</td>
			</tr>
		<?php 
		$no++;
			} 
		}
		?>
	</table>
</body>
</html>