<?php 
	include 'Tombol.php';

	class Tombolnuklir extends Tombol{
		public function tekan(){
			echo "Bom nuklir akan di luncurkan ! \n";
			sleep(5);
			echo "Boooooommmmmm !!! \n";
		}
	}
 ?>