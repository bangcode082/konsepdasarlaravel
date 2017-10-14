<?php 
	require_once "DebitBNI.php";
	require_once "Pembeli.php";

	try{
		$paymentMethod = new DebitBNI('123456');
		$paymentMethod->deposit(2000000);
		$wahyu= new Pembeli("Wahyu", $paymentMethod);
		$wahyu->beli("Sepatu Gym", 250000);
		echo "Saldo Terakhir Rp.".number_format($paymentMethod->cekSaldo())."\n";
		echo $paymentMethod->cekNamaPembayaran();
	}catch(Exception $e){
		echo $e->getMessage()."\n";
	}
 ?>