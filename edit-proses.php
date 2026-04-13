<?php
	if(isset($_POST['id_siswa']) && isset($_POST['nama']) && isset($_POST['jenis_kelamin']) && isset($_POST['tanggal_lahir']) && isset($_POST['alamat']) && isset($_POST['simpan']))
	{
		include('koneksi.php');

		$id_siswa = $_POST['id_siswa'];
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$alamat = $_POST['alamat'];

		$input = mysqli_query($db,"UPDATE siswa1 SET 
		nama = '$nama',
		jenis_kelamin = '$jenis_kelamin',
		tanggal_lahir = '$tanggal_lahir',
		alamat = '$alamat'
		WHERE id_siswa = '$id_siswa'")
		or die(mysqli_error($db));

		if($input){
			echo "DATA BERHASIL DI UPDATE <br>";
			echo "<a href='index.php'>Back</a>";
		}
		else{
			echo "GAGAL MENGUPDATE DATA <br>";
			echo "<a href='index.php'>Back</a>";
		}
	}
	else
	{
		echo "Isikan Semua Data <br>";
		echo "<a href='index.php'>Back</a>";
	}
?>