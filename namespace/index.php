<?php

require_once 'App/init.php';

use App\Produk\Komik as ProdukKomik;
use App\Produk\Games as ProdukGames;
use App\Produk\Cetak as ProdukCetak;

$produk1 = new ProdukKomik("Naruto", "Komik", 45000, 734);
$produk2 = new ProdukGames("Downhill", "Game", 34000, 24);

/***********
print($produk1->getInfo());
echo("<br>");
print($produk2->getInfo());
***********/

$cetak = new ProdukCetak();
$cetak->CetakInfo($produk1);
$cetak->CetakInfo($produk2);
print($cetak->getCetak());

print("<hr>");

use App\asset\User as AssetUser;
use App\Produk\User as ProdukUser;

new AssetUser();
echo "<br>";
new ProdukUser();