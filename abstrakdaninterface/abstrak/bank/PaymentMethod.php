<?php 

	/**
	* 
	*/
	abstract class PaymentMethod 
	{

		public function cekNamaPembayaran(){
			return "Anda melakukan pembayaran dengan ".get_class($this)."\n";
		}

		abstract public function kredit($jumlah);
		abstract public function deposit($jumlah);
		abstract public function cekSaldo();

		// private $saldo;
		
		// public function __construct($pin)
		// {
		// 	// cek pin ke database
		// 	if($pin == '123456'){
		// 		echo "Berhasil mengaktifkan Bank BNI \n";
		// 	}else{
		// 		$pesan="Pin yang anda masukan salah \n";
		// 		throw new Exception($pesan);
				
		// 	}
		// }

		// private function catatTransaksi($jenis, $jumlah){
		// 	echo "Mencatat transaksi $jenis sejumlah $jumlah ke Buku Tabungan \n";
		// }

		// public function kredit($jumlah){
		// 	$this->catatTransaksi('Transfer Keluar',$jumlah);
		// 	$this->saldo -= $jumlah;
		// }

		// public function deposit($jumlah){
		// 	$this->catatTransaksi('deposit dana', $jumlah);
		// 	$this->saldo += $jumlah;
		// }

		// public function cekSaldo(){
		// 	return $this->saldo;
		// }
	}

 ?>