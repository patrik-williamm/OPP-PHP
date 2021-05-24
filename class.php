<?php
class car{
	public $model;
	public $price;
	public $color;

	//function 
	public function kecepatan() {
		return 360;
	}

	//function parameter
	public function bahanBakar($jenis, $price) {
		return $jenis . " / " . $price;
	}
}

//obj(instance)
$car = new car();
var_dump($car);

echo $car->model="toyata";
echo "<br>";
echo $car->price=30000000;
echo "<br>";
echo $car->color="White";
echo "<br>";
echo $car->kecepatan();
echo "<br>";

$car2 = new car();
var_dump($car2);
echo "<br>";
echo $car2->bahanBakar("bahan bakar fosil", 20000);



