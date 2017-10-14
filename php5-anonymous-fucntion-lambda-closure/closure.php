<?php 

	// penerapan biasa
	// $title="Mas";
	// $nama = "Wahyu";

	// function namaAnda($title, $nama){
	// 	return $title." ".$nama;
	// }

	// function bisa($nama){
	// 	echo "Anda pasti bisa closure, $nama\n";
	// }

	// bisa(namaAnda($title,$nama));



	// penerapan closure
	$title="Mas";
	$nama="Wahyu";

	function bisa($nama){
		echo "Anda pasti bisa closure $nama\n";
	}

	$nama=function() use ($title, $nama){
		return $title.' '.$nama;
	};

	bisa($nama());
	
 ?>