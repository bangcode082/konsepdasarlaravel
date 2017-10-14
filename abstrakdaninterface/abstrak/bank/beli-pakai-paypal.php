<?php 
	require_once "Paypal.php";
	require_once "Pembeli.php";

	try {
		$paymentMethod = new Paypal("wahyu@gmail.com","123456");
		$paymentMethod->deposit(12000000);
		$pembeli= new Pembeli("wahyu", $paymentMethod);
		$pembeli->beli("Blazer pria", 300000);
		echo "Saldo Terakhir Rp.".number_format($paymentMethod->cekSaldo())."\n";
		echo $paymentMethod->cekNamaPembayaran();

	} catch (Exception $e) {
		echo $e->getMessage()."\n";
	}
 ?>