<?php 
//show ony what is necessary
//show what method the neccersy 
//cannot create the instand(objects)
//if you create abstract method then define on signatuetr
//abstract class also the define property and methods 
//then child class or derived class extends abstract class must be implment abstract methods 
//abstract class define public,private and veriables on class

//abstract method if you declare protected derived class must decler as public 

// abstract class is a half defined parent class or a partially defined parent class
// abstract method also this override on abstract class

// abstraction heppen durin design phase 
//what has to be show public 
//during excution phase 
//user encapulation to impleemnts of abstraction
//encapulation implenent abstracton
// we can't define pur half calss in 
abstract class customer{
    public $name;
    public $address;
    public $productname;
    public $productAmount;

    abstract public function CalclateDiscount();
}

class GoldCustomer{
    public function CalclateDiscount(){
        return $productAmount-10;
    }
}

class SilverCustomer{
    public function CalclateDiscount(){
        return $productAmount-5;
    }
}


abstract class car{
    // private
    // protected
    public function noOfwheels(){
        echo 'Wheel :4';    
    }
    //abstract methods 
    abstract public function price($price);
}
class BMW extends car{
    public function price($price){
        echo 'price :'.$price;
    }
}

$bmw=new BMW();
$bmw->noOfwheels();
$bmw->price('12LAKH');