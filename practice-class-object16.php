<?php
class BankAccount{
    public function __construct(
        public string $accountHolder,
        private string $accountNumber,
        private float $balance=0.0
    )
    {
        
    }
    public function getAccountNumber(){
        return $this->accountNumber;
    }
    public function getBalance(){
        return $this->balance;
    }
    public function deposit(float $amount){
        if($amount>0){
            $this->balance+=$amount;
        }else{
            echo "Invalid deposit";
        }
    }
    public function withdraw(float $amount){
      if($amount>$this->balance){
        echo "Insufficient balance!";
      }
      else{
        $this->balance-=$amount;
      }
    }
}
$acc=new BankAccount("Zihan","ACC101",1000.0);
$acc->deposit(500);
$acc->withdraw(2000);
$acc->withdraw(800);
echo $acc->accountHolder;
echo $acc->getBalance();


?>