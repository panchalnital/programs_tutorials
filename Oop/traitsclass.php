<?php
// Traits are a way to resue code across classes without inheeritance
//a Trait is a group of methods that you can include within another class its's a way to exract common functionality from classes that share simlilar behavior and avoid duplicating code 
// whem you use a trait you can acess its methods just as if they were defined within the classes itselt
//multiple inheritan over come functionaity
//Traits cannot create objects,
//in Trait can you define static and abastract method 
//in trait can be implements mutiple trait calss use

trait hello{
    public function sayhello(){
        echo "Hello";
    }
}

trait everyOne{
    public function sayeveryOne(){
        echo "every One";
    }
}
class helloWorld{
    use hello,everyOne;
    public function sayhelloWorld(){
        echo "World";
    }
}

$w=new helloWorld;
$w->sayhello();


// traits method overriding 
trait hello{
    public function sayhello(){
        echo "hello function\n";
    }
}
trait hi{
    public function sayhello(){
        echo "hi function\n";
    }
}
class base{
    use hello,hi{
        hello::sayhello insteadof hi;//means hello class sayhello method call kar not hi class method
        hi::sayhello as newhi; //change hi class method sayhello method then we call both method 
    }
}

$test=new base();
$test->sayhello();
$test->newhi();
