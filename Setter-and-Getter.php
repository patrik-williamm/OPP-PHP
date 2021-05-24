
<?php 

class Produk {
	private $name;
	private $jenisProduk;
	private $price;

	public function __construct($name="name produk", $jenisProduk="jenis produk", $price=0) {
		$this->name = $name;
		$this->jenisProduk = $jenisProduk;
		$this->price = $price;
	}

	//setter and getter
	public function setName($name) {
		if (!is_string($name)) {
			throw new Exception("Error Processing Request", 1);
		}
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

	public function setJenisProduk($jenisProduk) {
		$this->jenisProduk = $jenisProduk;
	}

	public function getJenisProduk() {
		return $this->jenisProduk;
	}

	public function setPrice($price) {
		$this->price = $price;
	}

	public function getPrice() {
		return $this->price;
	}
}

$produk1 = new Produk;

$produk1->setName("RiceCooker");
print($produk1->getName());

echo "<br>";

$produk1->setJenisProduk("Peralatan Rumah Tangga");
print($produk1->getJenisProduk());

echo "<br>";

$produk1->setPrice(320000);
print($produk1->getPrice());

