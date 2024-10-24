<?PHP
/**
* Class EMoney
* @Author: Teguhs
**/
class EMoney{
	private $kode;
	private $saldo;
	private $log;
	public function getSaldo(){
		return "\nSaldo: " . $this->saldo;
	}
	//construct
	public function __construct($kode){
		$this->kode = $kode;
		$this->saldo = 50000;
		$this->updateLog("Kartu Baru");
	}
	//topUp
	//pay
	private function updateLog($pesan){
		$this->log = $this->log . "\n" .date("y/m/d h:i:sa") .":". $pesan;
	}
	public function getLog(){
		return $this->log;
	}
	public function pay($jumlah){
		$this->saldo -= $jumlah;
		$this->updateLog("Bayar $jumlah");
	}
	public function topUp(){
		$this->saldo +=50000;
		$this->updateLog("topUp Rp. 50000");
	}
	public function topUps($jumlah){
		$this->saldo +=$jumlah;
		$this->updateLog("topUp Rp. $jumlah");
	}
}
$etoll = new EMoney("M001");
echo $etoll->getSaldo();
echo $etoll->getLog();
$etoll->pay(25000);
echo $etoll->getSaldo();
echo $etoll->getLog();
$etoll->pay(20000);
echo $etoll->getSaldo();
echo $etoll->getLog();
$etoll->topUp();
echo $etoll->getSaldo();
echo $etoll->getLog();
$etoll->topUps(100000);
echo $etoll->getSaldo();
echo $etoll->getLog();
//print_r(getdate());
//echo date("y/m/d h:i:sa");
?>