<?php 

require 'functions.php';

if ( isset($_POST["submit"]) ){
	

	if (tambah($_POST) > 0) {
		echo "<script>alert('data berhasil ditambahkan!');document.location.href = 'index.php';
		</script>
		";
	} else {
		echo "<script>alert('data gagal ditambahkan!');document.location.href = 'index.php';
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
	<title>Tambah Data Buku</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="Judul_Buku">Judul_Buku
				<input type="text" name="Judul_Buku" id="Judul_Buku" required>
			</li>
			<li>
				<label for="Halaman">Halaman
				<input type="text" name="Halaman" id="Halaman" required>
			</li>
			<li>
				<label for="Gambar">Gambar
				<input type="text" name="Gambar" id="Gambar" required> 
			</li>
			<li>
				<label for="Tanggal_Terbit">Tanggal_Terbit
				<input type="Tanggal_Terbit" name="Tanggal_Terbit" id="Tanggal_Terbit" required>
			</li>
			<li>
				<label for="Penerbit">Penerbit
				<input type="text" name="Penerbit" id="Penerbit" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button required>
			
			</li>
		</ul>

</body>
</html>