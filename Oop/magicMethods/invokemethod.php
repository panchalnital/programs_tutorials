<?php
/*
//The __invoke() method is called when a script tries to call an object as a function.


*/

class CallableClass
{
    public function __invoke($x)
    {
        var_dump($x);
    }
}
$obj = new CallableClass;
$obj(5); // user call by object function that means __invoke function automatically