<?php

//interface is contract is legal between binding developer are createring class and customer user class
//https://www.youtube.com/watch?v=S6v9CJ8IGYM&list=PLT51dtioU1pOCka0jIwYYaIGhPct3El_i&index=13
// interfaces can be useful in improving code fexibllity and resability
// payment processing,API integrations database connection,
//authentication eg email/peasword,gmail,facebook,linkedin ,
//file storage :stored file local disk,dropbox,S3
//interface cannot create objects,
//interface do not define property and body of the logic in mehtod
//inteerface only define public methods
//multple interface impplements , , 

//interface class aslo implements other interface class
//in interface class in define in const prorperty
// but can't not overider on derrivd class

//To change Interface what's the best practice ?
//=> interface cand extend other interface class and used 
//=> interface is a ontract by having contract we have better control on impact analysis,change management and breaking changes
//=> muliple inheritance helps to add new methods with out affecting the ld intefaces


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


/**************************************************************************** */
/***
 * Abstract class  vs interface class
 * 
 *  Abstract class comes under partial abstraction.
    Abstract classes can maintain abstract methods and non abstract methods.
    In abstract classes, we can create the variables.
    In abstract classes, we can use any access specifier.
    By using 'extends' keyword we can access the abstract class features from derived class.
    Multiple inheritance is not possible.
 * 
 * 
 *  Interface comes under fully abstraction.
    Interfaces can maintain only abstract methods.
    In interfaces, we can't create the variables.
    In interface, we can use only public access specifier.
    By using 'implement' keyword we can get interface from derived class.
    By using interfaces multiple inheritance is possible.
 * */ 

