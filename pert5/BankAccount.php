<?PHP
class BankAccount{
	protected $balance;
	public function getBalance(){
		return $this->balance;
	}
	public function deposit($jumlah){
		if($this->balance>=0){
			$this->balance +=$jumlah;
		}
		return $this;
	}
}
/**
$akun1 = new BankAccount();
$akun1->deposit(50000);
echo $akun1->getBalance();
*/
?>