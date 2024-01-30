<?php

//interface is contract is legal binding between developer are createring class and customer user class
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
//=> interface is a contract by having contract we have better control on impact analysis,change management and breaking changes
//=> muliple inheritance helps to add new methods with out affecting the ld intefaces

//=>An abstract class allows you to create functionality that subclasses can implement or override. An interface only allows you to define functionality, not implement it


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
 The main purpose of an interface class is to define a contract for the behavior of a class. Interfaces are used to achieve abstraction, support multiple inheritances, and improve code readability. They also help in capturing similarities among unrelated classes without forcing a class relationship, thus promoting loose coupling.
 * 
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


 ===========================================================

 Advantages :

- Interfaces are mainly used to provide polymorphic behavior.
- Interfaces function to break up the complex designs and clear the dependencies between objects.

Disadvantages :

- Java interfaces are slower and more limited than other ones.
- Interface should be used multiple number of times else there is hardly any use of having them.


==========================================================

In object-oriented programming, an interface class defines a contract for the behavior that a class must implement. Here are the main advantages and disadvantages of using interface classes:

    Advantages:
    
    =>Abstraction and Encapsulation: Interfaces allow for the abstraction of functionality from the implementation. This helps in encapsulating the details of how a particular functionality is achieved.
    
    =>Multiple Inheritance: Unlike classes, which cannot inherit from multiple classes in some programming languages, a class can implement multiple interfaces. This facilitates a form of multiple inheritance, allowing a class to provide the implementation for multiple unrelated types.
    
    =>Code Reusability: Interfaces promote code reusability by providing a standardized way for classes to implement common behaviors without inheriting a full class hierarchy.
    
    =>Polymorphism: Interfaces support polymorphism, enabling objects of different classes that implement the same interface to be treated uniformly through a common interface type.
    
    Disadvantages:
    
    =>Limited Implementation Details: Interfaces only declare the methods and properties that must be implemented, but they do not provide any implementation details. This lack of implementation can sometimes make it harder to understand the actual functionality.
    
    =>Rigidity: Once an interface is defined, it can be challenging to change it without affecting all the classes that implement it. This can lead to a rigid design, especially in cases where changes are frequent.
    
    =>Increased Complexity: In some cases, the use of interfaces can lead to increased complexity, especially when dealing with a large number of interfaces and their implementations. This can make the code harder to maintain.
    
    =>Learning Curve: For developers new to object-oriented programming or certain programming languages, understanding and implementing interfaces may pose a learning curve.
    
    In summary, interfaces provide a powerful mechanism for defining contracts and promoting code reuse, but they also come with certain limitations and complexities that need to be carefully considered in the design and maintenance of a software system.


Here are some advantages and disadvantages of using interface classes: 
Advantages
    Multiple inheritance
    Loose coupling
    Contract-based programming
    Space efficiency
    Compiler optimization
    Efficient multiple inheritance
    Object creation efficiency
    Forces a clean separation of interface and implementation
    Not type intrusive
    Objects can implement the same interface in different ways
    Avoidance of heap allocations
Disadvantages
    Implementation overhead
    Limited functionality
    Complexity
    Slower and more limited than other interfaces
    Interfaces should be used multiple times
    Interfaces do not provide any implementation code
    Can lead to redundant code in classes that implement multiple interfaces
    Some overhead associated with the creation and casting of objects
    More code is required to first specify the interface and then code the class that implements the interface
Interfaces can be used to achieve 100% abstraction. They can also break up complex designs and clear the dependencies between objects
