<?php 
	require_once "PaymentMethod.php";
	/**
	* 
	*/
	class DebitBNI extends PaymentMethod
	{	
		private $saldo;
		
		public function __construct($pin)
		{
			if($pin=='123456'){
				echo "Berhasil Mengaktifkan kartu debit ! \n";
			}else{
				$pesan="PIN yang Anda masukkan salah";
				throw new Exception($pesan);
				
			}
		}

		private function catatTransaksi($jenis, $jumlah){
			echo "Mecatat Transaksi $jenis sejumlah $jumlah ke buku tabungan . \n";
		}

		public function kredit($jumlah){
			$this->catatTransaksi('transfer keluar',$jumlah);
			$this->saldo -= $jumlah;
		}

		public function deposit($jumlah){
			$this->catatTransaksi('deposit dana ',$jumlah);
			$this->saldo += $jumlah;
		}

		public function cekSaldo(){
			return $this->saldo;
		}

	}
 ?>