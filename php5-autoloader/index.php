<?php 

	// cara include lama penerapan include

	// include 'Printer.php';
	// $printer = new Printer();
	// $buku=$printer->cetakBuku('Menyelami Framework Laravel');

	// include 'Kurir.php';
	// $kurir = new Kurir();
	// $kurir->kirim($buku,'Bandung');



	// penerapan autoloader

	spl_autoload_register(function ($class){
		include $class.'.php';
	});

	$printer = new Printer();
	$buku=$printer->cetakBuku('Menyelami Framework Laravel');
	$kurir= new Kurir();
	$kurir->kirim($buku,'Bandung');

 ?>