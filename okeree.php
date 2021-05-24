<?php 

class MataUang {
	private $namaMataUang;

	public function __construct($namaMataUang) {
		$this->namaMataUang = $namaMataUang;
	}

	public function getView() {
		return "{$this->namaMataUang} <br>";
	}
}

class Country extends MataUang {
	private $countryAsal;

	public function __construct($namaMataUang, $countryAsal) {
		parent::__construct($namaMataUang);
		$this->countryAsal = $countryAsal;
	}

	public function getView() {
		return parent::getView(). "->{$this->countryAsal}";
	}
}

$MataUang = new MataUang("rupiah");
print($MataUang->getView());

$country = new Country("rupiah", "Indonesia");
echo($country->getView());