<?php 
	

	/**
	* 
	*/
	class Pembeli 
	{
		private $nama;
		private $payment;

		public function __construct($nama = "Hamba Allah", PaymentMethod $payment)
		{
			$this->payment=$payment;
			$this->nama=$nama;
		}

		public function beli($nama="Barang",$harga =0){
			if ($this->payment->cekSaldo() < $harga) {
				# code...
				echo "Uang Tidak cukup !\n";
			}else{
				$this->payment->kredit($harga);
				echo "Terimakasih $this->nama \n";
				echo "Berhasil melakukan pembelian $nama seharga Rp.".number_format($harga).".\n";
			}
		}
	}
 ?>