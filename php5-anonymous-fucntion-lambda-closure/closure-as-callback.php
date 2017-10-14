<?php 

	$minimal=75;
	$dataNilai=[
		["nama"=>"Wahyu","nilai"=>90],
		["nama"=>"Dian","nilai"=>80],
		["nama"=>"Dicky","nilai"=>40],
		["nama"=>"Morgan","nilai"=>75],
	];

	array_walk($dataNilai, function($siswa) use ($minimal){
		echo "Siswa : ".$siswa['nama']."\n";
		echo "Nilai : ".$siswa['nilai']."\n";
		echo "Status : ";
		if($siswa['nilai'] >=$minimal){
			echo "Lulus \n\n";
		}else{
			echo "Tidak Lulus\n\n";
		}
	});

 ?>