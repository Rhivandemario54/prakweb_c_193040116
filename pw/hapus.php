<?php

require 'functions.php';

$Id_buku = $_GET["Id_buku"];

if (hapus($Id_buku) > 0 ){
	echo "<script>alert('data berhasil ditambahkan!');document.location.href = 'index.php';
		</script>
		";
	} else {
		echo "<script>alert('data gagal ditambahkan!');document.location.href = 'index.php';
		</script>
		";
	}