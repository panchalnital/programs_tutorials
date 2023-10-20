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

