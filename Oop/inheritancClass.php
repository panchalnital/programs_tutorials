<?php 

/***
 *  parent child reltionship , parent are something common child wil be inheritan property 
 * Inheritance => is property of oop 
 *  : inheritance is creating a parent-child realationship,
 *      - wetween two classes where child class will automatically get the properties and method of the parent
 * Why ?
 *  : inheritance is good for *Resability* and *abstracttion of code*
 *  
 * 
 *  : Inheritance defines a parent child relationship of two classess
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


/**
 * why php not support multiple inheritance
 * 
 * PHP does not support classical multiple inheritance. 
 * This is because multiple inheritance can cause complexity and conflicts.
 *  It can make code harder to understand, maintain, and debug. 

 *why php does not support overloading
 * Dynamic Typing: PHP is a dynamically typed language, meaning that variable types are determined at runtime. Unlike statically typed languages where method overloading might involve different parameter types, PHP allows variables to change types during runtime. This dynamic typing makes it challenging to implement traditional method overloading based on parameter types.

*Backward Compatibility: PHP has a strong commitment to backward compatibility. Introducing method overloading in a way that aligns with the conventions of statically typed languages could break existing code. Since PHP has historically been a loosely typed language, adding method overloading would require a significant shift in how methods are resolved and called.

// single inheritance
// not support in php muitple inheritance
//multilevel inheritance
//hierachial inheritance


// single inheritance
class employee{
    public $salary;
    public function calulateSalary($salary) {
        echo 30*$salary;
    }
}
class paramentEmployee extends employee{
    
}
$obj=new paramentEmployee();
$obj->calulateSalary(10000);

// not support in php muitple inheritance
//multilevel inheritance

//hierachial inheritance
class contratEmployee extends employee{
    
}
$obj=new contratEmployee();
$obj->calulateSalary(20000);



 */




 /*
  * 
    -> This design choice was made to avoid *complexities and conflicts* that can arise with multiple inheritance, such as the **Diamond Problem**. 
    -> Multiple inheritance allows a class to inherit from more than one base class. For example, if two parent classes have data members or methods of the same name, it can cause problems
    ->parent classes inherit from the same base class, forming a "diamond" pattern in the inheritance hierarchy.

    **
        PHP gets around the Diamond Problem through Interfaces and Traits, which let you get all the benefits of multiple inheritance (composition, DRY) without having to suffer the Diamond Problem

        DRY:  is an acronym for *"Don't Repeat Yourself"*. It's a principle that aims to reduce duplicate code and patterns, and instead favor modular and referenceable code. DRY can involve replacing information that is likely to change with abstractions that are less likely to change, or using data normalization to avoid redundancy
            ->DRY to prevent redundancies in processes, which are actions required to achieve a result
    **

    **
        Diamond pattern problems can occur in PHP when a class inherits another class, such as a Hybrid class that inherits both the Electric and Gasoline class. For example, a hybrid car that is both electric and gasoline. 

    
        What is a diamond problem in Object-Oriented Programming?
        Now, there is a special case if there is another class – a Hybrid class, for example – that inherits both the Electric and Gasoline class. We can see in the diagram that it will form a diamond. The hybrid car is both an *electric* car and a *gasoline* car. These kinds of special cases will result in a diamond problem.

        Here are some ways to resolve diamond pattern problems in PHP:
            ->Dependency injection: Instantiate other classes, then inject those instances into the main class. This avoids inheritance issues.
            ->Include_Once: This will include the file only once.
            ->Traits: This is a mechanism for code reuse in single inheritance languages like PHP, which can be used for multiple inheritance

    **

  */