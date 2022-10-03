<?php

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = "0";

           public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
             $this->judul = $judul;
             $this->penulis = $penulis;
             $this->penerbit = $penerbit;
             $this->harga = $harga;
           }
           
           public function getLabel(){
            return"$this->penulis, $this->penerbit";
           }
        }
        

// $produk1 = new produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "uncharted";
// $produk2->tambahPrpperty = "hahaha";
// var_dump($produk2);

$produk1 = new Produk("naruto", "Masashi Kishimoto", "Shonen Jump", "30000");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", "250000");
$produk3 = new Produk("Dragon Ball");
var_dump($produk3);

echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
?>