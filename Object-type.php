
<?php 

class Produk{
	public $namaProduk;
	public $kategory;

	public function __construct($namaProduk="nama Produk", $kategory = "kategory") {
		$this->namaProduk = $namaProduk;
		$this->kategory = $kategory;
	}

	public function setNamaproduk($namaProduk) {
		$this->namaProduk = $namaProduk;
	}

	public function getNamaProduk() {
		return $this->namaProduk;
	}

	public function setKategory($kategory) {
		$this->kategory = $kategory;
	}

	public function getkategory($kategory) {
		return $this->kategory;
	}

	public function getInfoProduk() {
		$str = "{$this->getNamaProduk()} | {$this->getkategory()}";
		return $str;
	}
}

class Cetak{

	public function cetakInfo( Produk $produk ) {
		$str = "{$produk->namaProduk} | {$produk->kategory} <br>";
		return $str;
	}
}

$produk1 = new Produk("Naruto", "Komik");
$produk2 = new produk("Attack on Titan", "Komik");
$produk3 = new Produk("Zombie land", "Game");

$cetak = new Cetak();
print($cetak->cetakInfo($produk1));
print($cetak->cetakInfo($produk2));
print($cetak->cetakInfo($produk3));

















