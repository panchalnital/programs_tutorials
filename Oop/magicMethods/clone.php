<?php
/*
// if you use clone method in type hinting time if chnage the property value of 2nd class the also override on both objects value 
//that time you used magic mathods __clone 
//Once the cloning is complete, if a __clone() method is defined, then the newly created object's __clone() method will be called, to allow any necessary properties that need to be changed.
//Creating a copy of an object with fully replicated properties is not always the wanted behavior. A good example of the need for copy constructors
call by value 
    e.g 
        $a=5;
        $b=$a //copy by value  5
        $b=10; // 10
        echo $a= //5
call by reference

 e.g 
        $a=5;
        $b=&$a //copy the memory address of $a // call by referance
        $b=10; // 
        echo $a= //10

clone : means copy by reference object 
*/
class student{
    public $name;
    public $course;
    public function __construct($n){
        $this->name=$n;
    }
    public function setCours(course $cn){
        $this->course=$cn;
    }
    public function __clone(){
        $this->course=clone $this->$course;
    }
}

class course{
    public $cname;
    public function __construct($cn){
        $this->cname=$cn;
    }
}

// $student1=new student('Class Student');
// $student2=$student1; //call by refernce
// $student2->name="clone call";

//2nd example // this create the difference object value difference
// $student1=new student('2nd example');
// $student2=clone $student1; //call by value
// $student2->name="2nd example 2";

//3rd example
 $student1=new student('3nd example');
 $course=new course('PHP');
 $student1->setCours($course);//type hintting
 $student2=clone $student1; //call by value
 $student2->name="2nd example 2";
