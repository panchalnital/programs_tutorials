<?php 
//show ony what is necessary
//show what method the neccersy 
//  [
//      abtracttion means showing only required things and hide the *Background* deatils
//  ]
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

    abstract public function calculateDiscount($productAmount);
}

class GoldCustomer extends customer{
    public function calculateDiscount($productAmount){
        return $productAmount-10;
    }
}

class SilverCustomer extends customer{
    public function calculateDiscount($productAmount){
        return $productAmount-5;
    }
}

$obj=new GoldCustomer();
$obj->calculateDiscount(100);

$obj=new SilverCustomer();
$obj->calculateDiscount(100);

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
/*======================================
main user : An abstract class's main purpose is to provide a common definition for a base class that multiple derived classes can share

Here are some other purposes of abstract classes:
    Provide a blueprint : Abstract classes provide a blueprint for derived classes and set some rules that the derived classes must implement when they inherit an abstract class.
    
    Define behaviors :Abstract classes let you define some behaviors; they force your subclasses to provide others.
    
    Provide default services : For example, if you have an application framework, an abstract class may provide default services such as event and message handling
*/
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

    Methods: All methods in an interface must be public, while abstract class methods can be public or 
    protected. All methods in an interface are abstract, so they cannot be implemented in code.

    Implementation: Abstract classes can contain default implementation, but interfaces cannot.
    
    Inheritance: Interfaces support multiple inheritances, but abstract classes do not.
    
    Constructors: Abstract classes can have a constructor, but interfaces cannot.
    
    Overriding: Abstract classes can override Object class methods, but interfaces cannot.
    
    Variables: Abstract classes can declare instance variables, but interfaces can only have public, static, and final variables.
    
    Interfaces are pure templates, while abstract classes let you provide some degree of implementation. Interfaces are completely empty shells that expect child classes to implement everything for them. 
    Interfaces allow developers to create objects of different classes that may be used interchangeably because they implement the same interface or interfaces

/*

Abstraction       : is a thought process that hides details and shows only essential information. 
An abstract class : is a type of class that contains abstract or non-abstract methods

Here are some more details about abstraction and abstract classes:

Abstraction
    A thought process that shows only necessary things
    A mechanism of data hiding
    The process of formulating general concepts by abstracting common properties of instances
    A general concept formed by extracting common features from specific examples
    A concept or idea not associated with any specific instance
The act of withdrawing or removing something

Abstract class
    A type of class that contains abstract or non-abstract methods
    Abstract classes implement abstraction to hide complexity
    Abstract classes/methods are created so that it can be implemented in its subclasses
    Abstract classes define behavior that is found in every object but it is used by the different every object in different -different manner
    Abstract classes cannot be instantiated
    Abstract classes can have abstract methods, which don't have a body
    The body is provided by the subclass 



*/