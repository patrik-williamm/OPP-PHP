<?php

require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Komik", 45000, 734);
$produk2 = new Games("Downhill", "Game", 34000, 24);

// print($produk1->getInfoProduk());
// echo("<br>");
// print($produk2->getInfoProduk());

$cetak = new Cetak();
$cetak->CetakInfo($produk1);
$cetak->CetakInfo($produk2);
print($cetak->getCetak());