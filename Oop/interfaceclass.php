<?php
//https://www.youtube.com/watch?v=S6v9CJ8IGYM&list=PLT51dtioU1pOCka0jIwYYaIGhPct3El_i&index=13
// interfaces can be useful in improving code fexibllity and resability
// payment processing,API integrations database connection,
//authentication eg email/peasword,gmail,facebook,linkedin ,
//file storage :stored file local disk,dropbox,S3
//interface cannot create objects,
//interface do not define property and body of the logic in mehtod
//inteerface only define public methods
//multple interface impplements , , 

interface PayemntProcessInterface{
    public function processPayment($amount);
}

class RazoryPaymentPrcess implements PayemntProcessInterface{

    public function processPayment($amount){
        echo "\n RazoryPaymentPrcess";
    }

}

class PayuPaymentPrcess implements PayemntProcessInterface{

    public function processPayment($amount){
        echo "\n PayuPaymentPrcess";
    }

}

class Order{

    private $paymentprocess;

    public function __contruct(PayemntProcessInterface $PayemntProcess){
        $this->paymentprocess=$PayemntProcess;
    }
    public function checkout($amount){
        $this->paymentprocess=processPayment($amount);
    }

}

$myorder =new Order(new RazoryPaymentPrcess());
$myorder->checkout(100);

$myorderpayu=new Order(new PayuPaymentPrcess());
$myorderpayu->checkout(100);