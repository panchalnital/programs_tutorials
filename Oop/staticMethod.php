<?php
/***
 * static method and static can not access to objects 
 * static method access to calss
 * same calss to access useing self::$name
 * derived class access to using parent::show()
 * if you create all class and methods are static means class are static class
 * 
 * 
 * 
 */
class base{
    public static $name="static property";
    public static function show(){
        echo self::$name;
    }
}

class derived extends base{
    public static function show(){
        echo parent::$name;
    }
}
echo base::$name;
base::show();

/***
 *  Late Static Binding: if you want to derived class property call that time use static keyword 
 * base class
 * 
 * 
 */
class base{
    public static $name="static property";
    public static function show(){
        echo static::$name;
    }
}

class derived extends base{
    public static $name="Late Static Binding";
}
$der=new derived();
$der->show();//Late Static Binding


/*

 **storing data that needs to persist between function calls, such as caches or counters
 **Here are some uses of static variables in PHP: Implement a singleton, Share data between objects, and Local cache

Static properties and methods in PHP are useful for storing values or performing actions that are associated with the class as a whole, rather than individual instances. They can be accessed without creating an instance of the class. 

Here are some advantages of using static properties and methods in PHP:

Static properties
Shared by all instances of a class, static properties can be useful for storing values, such as counters that save the last value assigned to them.

Static methods
Useful for general operations that don't depend on the state or behavior of any particular object of the class, static methods can implement a utility function, a mathematical formula, a constant value, or a singleton pattern.


Static methods and properties are defined using the reserved keyword static. Static properties are accessed using the Scope Resolution Operator ( ::) and cannot be accessed through the object operator ( ->). Calling non-static methods statically throws an error. 










*/
