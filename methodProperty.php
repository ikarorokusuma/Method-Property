<?php 

class Buku{

	public $judul = "Ensiklopedia";
	public $harga = "Rp. 100.000";
	public $jenis = "Pengetahuan";
	public $pengarang = "Dr. Boenjamin Setiawan";

public function say(){
		return "$this->judul, $this->harga, $this->jenis, $this->pengarang";
	}	
}

	$buku1 = new Buku();
	$buku1 -> judul = "Edensor";
	$buku1 -> harga = "Rp. 70.000 ";
	$buku1 -> jenis = "Novel";
	$buku1 -> pengarang = "Andrea Hirata";
	echo "Jenis Buku : ". $buku1->say();

	echo "<br>";

	$buku2 = new Buku();
	$buku2 -> judul = "Si Juki";
	$buku2 -> harga = "Rp. 50.000 ";
	$buku2 -> jenis = "Komik";
	$buku2 -> pengarang = "Faza Ibnu Ubaidillah";
	echo "Jenis Buku: ". $buku2->say();
	
 ?>