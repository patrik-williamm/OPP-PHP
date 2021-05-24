

<?php
class Produk{
	public $model = "model";
	private $price = "price";
	protected $color = "color";
	
	//construct
	public function __construct($model, $price, $color) {
		$this->model = $model;
		$this->price = $price;
		$this->color = $color;
	}

	//function tanpa parameter
	public function kecepatan() {
		return 360;
	}

	//function parameter
	public function getView() {
		return "{$this->model} | {$this->price} | {$this->color} | {$this->kecepatan()}";
	}
}

//inheritance
class car extends Produk {

	public $bahanBakar="bahan bakar";

	public function __construct($model, $price, $color, $bahanBakar){
		parent::__construct($model, $price, $color);
		$this->bahanBakar=$bahanBakar;
	}

	public function getView() {
		return parent::getView()." | {$this->bahanBakar} <br>";
	}
}

class SmartPhone extends Produk{
	public $spekSmartPhone;

	public function __construct($model, $price, $color, $spekSmartPhone) {
		parent::__construct($model, $price, $color);
		$this->spekSmartPhone = $spekSmartPhone;
	}

	public function getView(){
		return parent::getView(). "| RAM dan Kapasitas Baterai : {$this->spekSmartPhone} <br>";
	}
}

$car1 = new car("Toyata", "200000000", "Black", "besin");
print($car1->getView());

$car2 = new car("Honda", "300000000", "White", "Besin");
print($car2->getView());

$SmartPhone = new SmartPhone("Iphone", "7000000", "Blue", "8 GB / 5000maH");
print($SmartPhone->getView());

/**
 * 
 */
class Visibilty extends Produk{
	private $test = "testing";

	public function __construct($model, $price, $color, $test) {
		parent::__construct($model, $price, $color);
		$this->test = $test;
	}

	public function getView() {
		return parent::getView(). "| {$this->test}";
	
	}
}

$Visibilty1 = new Visibilty("ferari", "100000000000", "red", "testing");
print($Visibilty1->getView());




