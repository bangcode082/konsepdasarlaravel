<?php 

	include "Sayap.php";

	class HelloKitty implements Sayap{
		public function terbang(){
			echo "Hello Kitty terbang dengan sayap berwarna pink :) \n";
		}
	}

	$helloKitty = new HelloKitty();
	$helloKitty->terbang();

 ?>