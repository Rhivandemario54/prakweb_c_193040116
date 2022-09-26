<?php

$conn = mysqli_connect("localhost", "root", "", "prakweb_c_193040116_pw");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}

function tambah($data){
	global $conn;
	$Judul_Buku =htmlspecialchars($data["Judul_Buku"]);
	$Halaman =htmlspecialchars($data["Halaman"]);
	$Gambar =htmlspecialchars($data["Gambar"]);
	$Tanggal_Terbit =htmlspecialchars($data["Tanggal_Terbit"]);
	$Penerbit =htmlspecialchars($data["Penerbit"]);


	$query = "INSERT INTO buku VALUES('', '$Judul_Buku;','$Halaman;', '$Gambar;', '$Tanggal_Terbit;', '$Penerbit;')
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function hapus ($Id_buku){
	global $conn;
	mysqli_query($conn, "DELETE FROM buku WHERE Id_buku = $Id_buku");
    return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
	$Judul_Buku =$htmlspecialchars["Judul_Buku"];
	$Halaman = $htmlspecialchars["Halaman"];
	$Gambar = $htmlspecialchars["Gambar"];
	$Tanggal_Terbit = $htmlspecialchars["Tanggal_Terbit"];
	$Penerbit = $htmlspecialchars["Penerbit"];


	$query = "UPDATE buku SET
	         Judul_Buku = '$Judul_Buku',
	         Halaman = '$Halaman';,
	         Gambar = '$Gambar',
	         Tanggal_Terbit = '$Tanggal_Terbit',
	         Penerbit= '$Penerbit'
	         WHERE Id_buku = $Id_buku
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

  }


?>