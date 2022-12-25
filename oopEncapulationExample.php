<?php
class bankAcoount{
    private $accno;
    private $accname;
    private $balance;

    public function __construct($acno,$acname,$acbal){
      $this->accno=$acno;
      $this->accname=$acname;
      $this->balance=$acbal;
    }
    public function deposit($amt){ //set amount
       if($amt<5000){
         echo "Amount less than 5000";
       }else{
         $this->balance=$amt;
       }
    }
  
    public function getBalance(){
      return $this->balance;
    }

    public function withdraw(){
        echo "Withdraw method";
    }
}

$obj=new bankAcoount(123,"yes bank",75000);
//$obj->deposit(20000);
echo $obj->getBalance();


//$obj->accname="HDFC Bank";


echo "<pre>";
var_dump($obj);


?>