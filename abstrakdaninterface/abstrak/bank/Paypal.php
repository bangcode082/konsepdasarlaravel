<?php 

	require_once 'PaymentMethod.php';

	/**
	* 
	*/
	class paypal extends PaymentMethod
	{
		private $balance;
		private $email;

		function __construct($email, $password)
		{
			# code...
			if($email == "wahyu@gmail.com" & $password=='123456'){
				$this->email = $email;
				echo "Berhasil Login ke Paypal !\n";
			}else{
				$pesan = 'Tidak ada user dengan username dan password tersebut :(';
				throw new Exception($pesan);
				
			}
		}

		private function kirimNotifikasi($pesan = "Informasi penting"){
			echo "Mengirim email Notifikasi $pesan ke $this->email \n";
		}

		public function kredit($jumlah){
			$this->kirimNotifikasi('Pengeluaran Dana');
			$this->balance -= $jumlah;
		}

		public function deposit($jumlah){
			$this->kirimNotifikasi('Penerimaan Dana');
			$this->balance += $jumlah;
		}

		public function cekSaldo(){
			return $this->balance;
		}


	}

 ?>