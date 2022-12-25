<?php 
// constructor is by default call in object of class create
// in class __construct and class function call in when default constructer first call
// Varibale define on constructor assign memory on call objet new keyword use


//{$this} means reference of class object

//{New} is operator of PHP
//new class object memory allocattion then member copy property for and initialization on object
// Second this check for in class any initializatin any __constructer to call
// new unqiue id create and assigne to object
//ZVAL contrainer creater and stored in object id



// {const} keyword initilization thoght to function (not class object to access to not change value)


class abc{
    
    public function __construct(){
      echo " defult conctruct call";
    }
    
    public function abc(){
      echo "abc function call";
    }
    
//    public 
  
}
$obj=new abc();
echo "<pre>";
print_r($obj);

?>