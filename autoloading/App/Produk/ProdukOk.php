<?php

abstract class ProdukOk{
	private $nameproduk;
	private $kategory;
	private $price;

	public function __construct($nameproduk="name", $kategory="kategory", $price=0) {
		$this->nameproduk = $nameproduk;
		$this->kategory = $kategory;
		$this->price = $price;
	}

	abstract public function setNameproduk($nameproduk);
	abstract public function setKategory($kategory);
	abstract public function setPrice($price);

	public function getInfo() {
		return "{$this->nameproduk} | {$this->kategory} | {$this->price}";
	}
}