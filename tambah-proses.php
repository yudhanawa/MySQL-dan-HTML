<?php
	if(isset($_POST['id_siswa']) && isset($_POST['nama']) && isset($_POST['jenis_kelamin']) && isset($_POST['tanggal_lahir']) && isset($_POST['alamat']) && isset($_POST['tambah']))
	{
		include('koneksi.php');

		$id_siswa = $_POST['id_siswa'];
		$nama = $_POST['nama'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$alamat = $_POST['alamat'];

		$input = mysqli_query($db,"INSERT INTO siswa1 VALUES('$id_siswa', '$nama', '$jenis_kelamin', '$tanggal_lahir', '$alamat')") 
		or die(mysqli_error($db));

		if($input){
			echo "DATA BERHASIL DITAMBAHKAN<br>";
			echo "<a href='tambah.php'>Back</a>";
		}
		else{
			echo "GAGAL MENAMBAHKAN DATA<br>";
			echo "<a href='tambah.php'>Back</a>";
		}
	}
	else
	{
		echo "Isikan Semua Data<br>";
		echo "<a href='tambah.php'>Back</a>";
	}
?>