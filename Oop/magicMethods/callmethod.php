<?php
/**
 * _call : This method executes when a method is called which is not defined yet.
 *         : this method call if declare private in class 
 *          :triggered when invoking inaccessible methods in an object context
 * 
 */

 class student{
    private $fname;
    private $lname;
    private function setname($fname,$lname){
        $this->fname=$fname;
        $this->lname=$lname;
    }
    public function __call($method,$args){
        if(method_exisys($this,$method)){
            call_user_func_array([$this,$method],$argc);
        }else{
        echo "this is private or not exitising method : $method";
        //print_r($argc);
        }
    }

 }
 $std=new student();
 $std->setname('wlecome','_call');
// $std->personal()//

/**
 * _callStatic : This method executes when a method is called which is not defined yet.
 *         : this method call if declare private static method in class 
 *          :is triggered when invoking inaccessible methods in a static context.
 * 
 */
class student{
    private static function hello($name){
         echo "this is private static or not exitising method : $name ";
    }
    public static function __callstatic($method,$args){
        if(method_exisys(__CLASS__,$method)){
            call_user_func_array([__CLASS__,$method],$argc);
        }else{
        echo "this is private or not exitising method : $method";
        //print_r($argc);
        }
    }

 }
 student::hello('welcome');
