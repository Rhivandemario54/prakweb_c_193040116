<?php

require 'functions.php';

$buku = query("SELECT * FROM buku");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Daftar Buku Novel</h1>

<a href="tambah.php">Tambah Data Buku</a>

<br></br>
<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>Id_buku</th>
		<th>Aksi</th>
		<th>Judul_Buku</th>
		<th>Halaman</th>
		<th>Gambar</th>
		<th>Tanggal_Terbit</th>
		<th>Penerbit</th>
	</tr>

    <?php $i = 1; ?>
    <?php foreach( $buku as $row) : ?>

	<tr>
		<td><?= $i; ?> </td>
		<td><a href="ubah.php?Id_buku=<?=  $row["Id_buku"]; ?>">ubah</a>
		    <a href="hapus.php?Id_buku=<?= $row["Id_buku"]; ?>">hapus</a></td>
		<td><?= $row["Judul_Buku"]; ?> </td>
		<td><?= $row["Halaman"]; ?></td>
		<td><img src="img/<?= $row["Gambar"]; ?>" width="50"></td>
		<td><?= $row["Tanggal_Terbit"]; ?></td>
		<td><?= $row["Penerbit"]; ?></td>
	</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</body>