<?php 
//show what he neccersy 
//cannot create the instand(objects)
//if you create abstract method then define on signatuetr
//abstract class also the define property and methods 
//then child class or derived class extends abstract class must be implment abstract methods 
//abstract class define public,private and veriables on class

//abstract method if you declare protected derived class must decler as public 


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