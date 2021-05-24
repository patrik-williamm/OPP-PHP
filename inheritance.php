<?php
class Produk{
	public $model = "model";
	public $price = "price";
	public $color = "color";

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
	public function bahanBakar($jenis, $price) {
		return $jenis . " / " . $price;
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


/************
obj(instance)
$car = new car("Honda", "32000000", "black");
echo $car->getView();

echo $car->model="toyata";
echo "<br>";
echo $car->price=30000000;
echo "<br>";
echo $car->color="White";
echo "<br>";
echo $car->kecepatan();
echo "<br>";

$arr = ['patrik wiliam', 'yui tanaka', 'naruto', 'eren', 'luffy'];
$arr2 = array(
	'namakarakter'=>['eren', 'naruto', 'luffy'],
	'anime'=>['attck on titan', 'naruto', 'one piece']
	);			

print($arr2['namakarakter'][0]);

************/