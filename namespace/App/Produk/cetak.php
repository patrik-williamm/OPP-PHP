<?php namespace App\Produk;

class Cetak{

	public $produk = [];

	public function CetakInfo($produk) {
		$this->produk[] = $produk;
	}

	public function getCetak() {
		$str = "DAFTAR PRODUK : <br>";

		foreach($this->produk as $p) {
			$str .= "- {$p->getInfo()} <br>";
		}
		return $str;
	}
}