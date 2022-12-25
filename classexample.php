<?php

class bankAcoount{
    public $accno;
    public $accname;
    public $balance;

    public function __construct($acno,$acname,$acbal){
      $this->accno=$acno;
      $this->accname=$acname;
      $this->balance=$acbal;
    }
    public function deposit(){
        echo "Deposit Method";
    }

    public function withdraw(){
        echo "Withdraw method";
    }
}

$obj=new bankAcoount(123,"yes bank",75000);
$obj->accname="HDFC Bank";

echo "<pre>";
var_dump($obj);


?>