<?php

interface MyProduk{
	public function getInfoProduk();
}

abstract class Produk{
	protected $nameProduk;
	protected $ketegory;
	protected $modelProduk;

	public function __construct($nameProduk="name Produk", $ketegory="ketegory", $modelProduk="model Produk") {
		$this->nameProduk = $nameProduk;
		$this->ketegory = $ketegory;
		$this->modelProduk = $modelProduk;
	}

	abstract public function setNameProduk($nameProduk);
	abstract public function setKetegory($ketegory);
	abstract public function setModelProduk($modelProduk);

	public function getInfo() {
		$str = "{$this->nameProduk} - {$this->ketegory} - {$this->modelProduk} <br>";
		return $str;
	}
} 

class Produk1 extends Produk implements MyProduk{
	protected $nameProduk;
	protected $ketegory;
	protected $modelProduk;

	public function setNameProduk($nameProduk) {
		$this->nameProduk = $nameProduk;
	}

	public function setKetegory($ketegory) {
		$this->ketegory = $ketegory;
	}

	public function setModelProduk($modelProduk) {
		$this->modelProduk = $modelProduk;
	}

	public function getInfoProduk() {
		return $this->getInfo();
	}
}

class CetakInfo{
	public $produkInfo = [];

	public function cetakInfo( Produk $produk ) {
		$this->produkInfo[] = $produk;
	}

	public function cetak(){
		$str = "DAFTAR PRODUK: <br>";

		foreach ($this->produkInfo as $p) {
			$str .= $p->getInfo();
		}

		return $str;
	}
}


$produk1 = new Produk1();
$produk2 = new Produk1();
$produk3 = new Produk1();
$produk4 = new Produk1();

$cetakP = new CetakInfo();
$cetakP->cetakInfo($produk1);
$cetakP->cetakInfo($produk2);
$cetakP->cetakInfo($produk3);
$cetakP->cetakInfo($produk4);

print($cetakP->cetak());










