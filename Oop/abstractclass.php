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

================================================
Response
Abstract methods are a concept in programming languages, often associated with object-oriented programming (OOP). Here are the advantages and disadvantages of using abstract methods:
=============================
Advantages:

dvantages 
Using abstract methods in Java has several advantages. Some of them are:

=>Abstraction: Using the abstract method in Java helps in achieving abstraction by hiding the implementation details.
=>Flexibility: Abstract methods provide flexibility to the subclasses to provide their own implementation of the method
=>Code Reusability: Abstract methods allow you to reuse the code in the superclass by providing a common interface for a group of subclasses.
=>Encapsulation: Abstract methods help to encapsulate the behavior of an object by defining a common interface for a group of subclasses.
=>Polymorphism: Abstract methods support polymorphism, which allows you to write code that works with objects of different subclasses.

Limitations of Abstract Methods

Using abstract methods in Java also has some limitations. Some of them are:

=>Limited Functionality: Abstract methods only provide a method signature without any implementation. This limits the functionality of the method and makes it less powerful than a regular method.
=>Complexity: Abstract methods can make the code more complex because they require the creation of subclasses to provide an implementation for the method.
=>Inefficiency: Abstract methods can be less efficient than regular methods because they require the use of dynamic binding to call the method at runtime.
Conclusion


Here are some differences between abstract classes and interfaces in PHP: 
    Properties: Abstract classes can have properties, but interfaces cannot.
    Methods: All methods in an interface must be public, while abstract class methods can be public or protected. All methods in an interface are abstract, so they cannot be implemented in code.
    Implementation: Abstract classes can contain default implementation, but interfaces cannot.
    Inheritance: Interfaces support multiple inheritances, but abstract classes do not.
    Constructors: Abstract classes can have a constructor, but interfaces cannot.
    Overriding: Abstract classes can override Object class methods, but interfaces cannot.
    Variables: Abstract classes can declare instance variables, but interfaces can only have public, static, and final variables.
    Interfaces are pure templates, while abstract classes let you provide some degree of implementation. Interfaces are completely empty shells that expect child classes to implement everything for them. 
    Interfaces allow developers to create objects of different classes that may be used interchangeably because they implement the same interface or interfaces