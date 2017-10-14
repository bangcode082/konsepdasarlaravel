<?php 

	// fungsi biasa
	// function namaAnda(){
	// 	return "wahyu firmansyah";

	// }

	// function bisa($nama){
	// 	echo "Anda pasti bisa laravel, $nama!\n";
	// }

	// bisa(namaAnda());

	// fungsi anonymous
	// mempassing fungsi ke sebuah variabel
	$nama=function(){
		return "M Wahyu firmansyah";
	};

	function bisa($nama){
		echo "anda pasti bisa laravel, $nama\n";
	}

	bisa($nama());
 ?>