<?php 

require 'functions.php';

$Id_buku = $_GET['Id_buku'];


$bku = query("SELECT * FROM buku WHERE Id_buku = $Id_buku ")[0];

if ( isset($_POST["submit"]) ){
	

	if (tambah($_POST) > 0) {
		echo "<script>alert('data berhasil diubah!');document.location.href = 'index.php';
		</script>
		";
	} else {
		echo "<script>alert('data gagal diubah!');document.location.href = 'index.php';
		</script>
		";
	}
	$Judul_Buku = $_POST["Judul_Buku"];
	$Halaman = $_POST["Halaman"];
	$Gambar = $_POST["Gambar"];
	$Tanggal_Terbit = $_POST["Tanggal_Terbit"];
	$Penerbit = $_POST["Penerbit"];


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Buku</title>
</head>
<body>
	<h1>Ubah Data Mahasiswa</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="Id_buku">Id_Buku:
				<input type="text" name="Id_buku" id="Id_buku" required value="<?= $bku["Id_buku"]; ?>">
			</li>
			<li>
				<label for="Judul_Buku">Judul_Buku:
				<input type="text" name="Judul_Buku" id="Judul_Buku" required value="<?= $bku["Judul_Buku"]; ?>">
			</li>
			<li>
				<label for="Halaman">Halaman
				<input type="text" name="Halaman" id="Halaman" required value="<?= $bku["Halaman"]; ?>">
			</li>
			<li>
				<label for="Gambar">Gambar
				<input type="text" name="Gambar" id="Gambar" required
				value="<?= $bku["Gambar"]; ?>"> 
			</li>
			<li>
				<label for="Tanggal_Terbit">Tanggal_Terbit
				<input type="Tanggal_Terbit" name="Tanggal_Terbit" id="Tanggal_Terbit" required value="<?= $bku["Tanggal_Terbit"]; ?>">
			</li>
			<li>
				<label for="Penerbit">Penerbit
				<input type="text" name="Penerbit" id="Penerbit" required value="<?= $bku["Penerbit"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button required value="<?= $bku["Judul_Buku"]; ?>">
			
			</li>
		</ul>

</body>
</html>