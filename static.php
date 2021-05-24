<?php
	class Produk {
		public static $name;
		public static $jenisProduk;
		public static $price;

		//setter and getter
		public static function setName($name) {
			if (!is_string($name)) {
				throw new Exception("Error Processing Request", 1);
			}
			self::$name = $name;
		}

		public static function getName() {
			return self::$name;
		}

		public static function setJenisProduk($jenisProduk) {
			self::$jenisProduk = $jenisProduk;
		}

		public static function getJenisProduk() {
			return Self::$jenisProduk;
		}

		public static function setPrice($price) {
			self::$price = $price;
		}

		public static function getPrice() {
			return self::$price;
		}
	}

Produk::setName("RiceCooker");
echo (Produk::getName());

echo "<br>";

Produk::setJenisProduk("Peralatan Rumah Tangga");
print(Produk::getJenisProduk());

echo "<br>";

Produk::setPrice(320000);
print(Produk::getPrice());

Produk::setName("RiceCooker");
echo (Produk::getName());

echo "<br>";

Produk::setJenisProduk("Peralatan Rumah Tangga");
print(Produk::getJenisProduk());

echo "<br>";

Produk::setPrice(320000);
print(Produk::getPrice());

Produk::setName("RiceCooker");
echo (Produk::getName());

echo "<br>";

Produk::setJenisProduk("Peralatan Rumah Tangga");
print(Produk::getJenisProduk());

echo "<br>";

Produk::setPrice(320000);
print(Produk::getPrice());





