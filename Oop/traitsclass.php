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
