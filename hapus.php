<?php 
	if(isset($_GET['id'])){
		include("koneksi.php");

		$id_siswa = $_GET['id'];

		$cek = mysqli_query($db,"SELECT id_siswa FROM siswa1 
		WHERE id_siswa = '$id_siswa'") 
		or die(mysqli_error($db));

		if(mysqli_num_rows($cek) == 0){
			echo "<script>window.history.back()</script>";
		}
		else{
			$del = mysqli_query($db,"DELETE FROM siswa1 
			WHERE id_siswa = '$id_siswa'");

			if($del){
				echo "BERHASIL MENGHAPUS DATA <br>";
				echo "<a href='index.php'>Back</a>";
			}
			else{
				echo "GAGAL MENGHAPUS DATA <br>";
				echo "<a href='index.php'>Back</a>";
			}
		}
	}
?>