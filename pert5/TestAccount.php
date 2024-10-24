<?PHP
require "SavingAccount.php";
$sa=new SavingAccount();
$sa->deposit(50000);
echo "Saldo 1:";
echo $sa->getBalance() . "\n";
$sa->setInterestRate(0.05);
$sa->addInterest();
echo "IR: " . $sa->getInterestRate() ."\n";
echo "Saldo 2:" . $sa->getBalance();
?>