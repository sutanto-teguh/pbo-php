<?PHP
require "BankAccount.php";
class SavingAccount extends BankAccount{
		private $interestRate;
		public function setInterestRate($ir){
			$this->interestRate = $ir;
		}
		public function getInterestRate(){
			return $this->interestRate;
		}
		public function addInterest(){
			$interest = $this->interestRate * $this->balance;
			$this->deposit($interest);
		}
}
?>