<?php

class Games extends ProdukOk implements MyProduk{
	protected $nameproduk;
	protected $kategory;
	protected $price;
	protected $timePlay;

	public function __construct($nameproduk="name", $kategory="kategory", $price=0, $timePlay=0) {
		parent::__construct($nameproduk,$kategory,$price);
		$this->timePlay = $timePlay;
	}

	public function setNameproduk($nameproduk) {
		$this->nameproduk = $nameproduk;
	}
	public function setKategory($kategory){
		$this->kategory =  $kategory;
	}
	public function setPrice($price){
		$this->price = $price;
	}

	public function setTimePlay($timePlay) {
		$this->timePlay = $timePlay;
	}

	public function getNameProduk(){
		return $this->nameproduk;
	}
	public function getKategory(){
		return $this->kategory;
	}
	public function getPrice() {
		return $this->price;
	}

	public function getTimePlay() {
		return $this->timePlay;
	}
	public function getInfo(){
		return parent::getInfo(). " | {$this->timePlay} jam";
	}

}


















