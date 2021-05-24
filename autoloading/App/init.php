<?php

/*require_once 'Produk/cetak.php';
require_once 'Produk/MyProduk.php';
require_once 'Produk/ProdukOk.php';
require_once 'Produk/Komik.php';
require_once 'Produk/Games.php';*/

spl_autoload_register(function($class) {
	require_once __DIR__ .'/produk/'.$class.".php" ;
});

