<?php 

/***
 * Inheritance => is property of oop 
 *  : ingeritanc defines a parent child relationship of two classess
 *  : base class and drived class 
 *  : resublity , is a relationship, extends 
 *  : you can access to all property anc methods on child class
 *  : help us to define some logic in the parent class which can be ovrriden in th child class
 *  
 *  
 * Method overload: method overloading means same method names with differnt sigature in the class
 *                 : magic method __call using achived Method overload 
 * method overriding: method name same but class are diffenece this class
 * 
 * 
 */

 class employee{
    public $name;
    public $salary;

    public function __construct($name,$salary){
        $this->name=$name;
        $this->salary=$salary;
    } 
    public function info(){
        echo "Employee name ".$this->name;
    }
    //Method overload
    public function __call($name,$salary){
        echo "Calling object method '$name' "
             . implode(', ', $salary). "\n";
    }
 }
 class manager extends employee{
    public $phone=500;
    public $tolalsal;

    public function info(){
        echo "Manger salary ".$this->phone + $this->tolalsal;
    }
    //method overriding
    public function invokemanger(){
    	parent::info();
    }

 }
$man=new manager("name",25);
$man->info();
$man->invokemanger(); //method overriding

//Method overload
// $man=new employee("raj",25); // Method overload
// //$man->invokemanger();
// $man->info();
// $man->info1(510);

