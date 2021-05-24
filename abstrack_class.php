
<?php 
abstract class Produk{

 	private $namaProduk;
 	private $ketegory;
 	private $model;

 	public function __construct($namaProduk="nama produk", $ketegory="ketegory", $model="model") {
 		$this->namaProduk=$namaProduk;
 		$this->ketegory=$ketegory;
 		$this->model=$model;
 	}

 	abstract public function setNamaProduk($namaProduk);
 	public function getNameProduk() {
 		return $this->namaProduk;
 	}
 	abstract public function setKetegory($ketegory):string;
 	public function getKetegory() {
 		return $this->ketegory;
 	}
 	abstract public function setModel($model): string;
 	public function getModel() {
 		return $this->model;
 	}

 	public function getInfoProduk(){
 		return "{$this->namaProduk} / {$this->ketegory} / {$this->model} <br>";
 	}
 }

class Car extends Produk{

	public $namaProduk;
	public $ketegory;
	public $model;

	public function setNamaProduk($namaProduk) {
		$this->namaProduk = $namaProduk;
	}

	public function setKetegory($ketegory): string {
		$this->ketegory = $ketegory;
	}

	public function setModel($model) : string {
		$this->model=$model;
	}
}

class Cetak{
	public $infoProduk = [];

	public function info(Produk $produk) {
		return $this->infoProduk[] = $produk;
	}
}

$car1 = new Car("Avanza", "technology", "ZQ09I");
$car2 = new Car("Xenia", "technology", "ZKI78");
$car3 = new Car("Ferrari", "technology", "8888tg");
print($car1->getInfoProduk());
print($car2->getInfoProduk());
print($car3->getInfoProduk());


















