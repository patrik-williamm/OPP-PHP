<?php namespace App\Produk;

class Komik extends Produkok implements MyProduk{
	protected $nameproduk;
	protected $kategory;
	protected $price;
	protected $totalPage;

	public function __construct($nameproduk="name", $kategory="kategory", $price=0, $totalPage=0){
		parent::__construct($nameproduk,$kategory,$price);
		$this->totalPage = $totalPage;
	}

	public function setNameproduk($nameproduk)
	 {
		$this->nameproduk = $nameproduk;
	}

	public function setKategory($kategory) {
		$this->kategory = $kategory;
	}

	public function setPrice($price) {
		$this->price = $price;
	}

	public function getNameProduk(){
		return $this->nameproduk;
	}
	public function getKategory(){
		return $this->kategory;
	}
	public function getPrice(){
		return $this->price;
	}
	public function getInfo(){
		$str = parent::getInfo(). " | {$this->totalPage} Page";
		return $str;
	}






}