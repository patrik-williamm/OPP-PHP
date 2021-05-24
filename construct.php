<?php
class car{
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
		return $this->model ."<br>". $this->price ."<br>". $this->color."<br>".$this->kecepatan()."<br>";
	}
	public function bahanBakar($jenis, $price) {
		return $jenis . " / " . $price;
	}
}

//obj(instance)
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