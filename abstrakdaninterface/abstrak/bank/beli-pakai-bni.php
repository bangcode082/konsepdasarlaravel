<?php 
	require_once "Pembeli-DI.php";

	// melakukan pembelian dengan BNI
	try {
		$bniKu= new BNI('123456');
		$bniKu->deposit(2000000);
		$wahyu = new Pembeli("Wahyu ",$bniKu);
		$wahyu->beli("Sepatu Roda", 750000);
		echo "Saldo Terakhir RP.".$bniKu->cekSaldo()."\n";
	} catch (Exception $e) {
		echo $e->getMessage()."\n";
	}
 ?>