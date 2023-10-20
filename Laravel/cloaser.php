<?php

/*

https://www.youtube.com/watch?v=Cdpam3VRN_o&list=PLseCDt7XKtl5VR9Nu9dp1_RIQ1ew_ky9g&index=5


a closure is anonymous function ,closures are often used as callback 
method and can be used as a parameter in a function

functon handle(closure $closure){
    $closure();
}
handle(function(){
    echo "hello";
});
//route used 
route::get('/test',function(){
    return view('test');
})
route::with('comments',function($builder){
    return $builder->whereCollapsed(truen);
})

// Aggregates Methods:

DB::table('product')->count();
DB::table('product')->max('price');
DB::table('product')->min('price');
DB::table('product')->avg('price');
DB::table('product')->sum('price');

//Autoloading class:

autoloader php allows the last chance to load the lass or interface  before it it fails with an error

the spl_autoload_register() function in php can register any number of autoloaders, enable classes and  interfaces to autoloader even if they are underfined

spl_autoload_register(function($classname){
    include $classname.'php';
});

$object-new class1();

// rate limiting or throttle

route::group([prefix => 'api','middleware' => 'throttle:20,1'],function(){

});

public function __construct(){
    $this->middleware(['auth','throttle:50']);
}


=========================================================================
// Lambada/anonymous function

// function expression
$fun= function(){
    return 'hello world';
}

$fun();
-------------------------------------------
//=> callback function
//=> as parameter pass in function 
functin hello($fun){
    $fun();
}
echo hello( function(){
    return 'Hello world';
});

jquery:

$('#btn').click(function(){

});
-------------------------------------------------------------------
// closures 

-> gobla variable not be direct use in function
-> goble avriable value are in press (store in memeory ) closure call use 

$h="hello";
function hello(){
    echo $h; // this scop of out function canot not use direct
                // in function scope is local used 
}
//resloved goble variable in function 

$h="wellcome";
$fun=function($w) use ($h){
    return $h ." ". $w;
}

echo $fun('india');



function hello($h){
        return function ($w) use ($h){
            return $h." ".$w;
        };
}

$b=hello('hello');
echo $b('world');// clouser


// use keyword used in and closure function



// as paramater pass to function
// as variable pass to function Lambada
// as return function 


===========================
PHP closures, also known as anonymous functions, are a powerful feature introduced in PHP 5.3. They allow you to create and use functions without giving them a specific name. Closures are particularly useful when you need to pass functions as arguments to other functions, create callbacks, or work with variables in a local scope. Here's a brief overview of PHP closures:

Basic Syntax:
Closures are defined using the function keyword, followed by a list of parameters (if any), and the function's body enclosed in curly braces. For example:

Copy
$closure = function($param) {
    // Function logic here
};
Usage:
Closures are commonly used for tasks like array filtering, sorting, and mapping. They can also be assigned to variables, passed as arguments to functions, or returned from functions.

Scope:
Closures can capture variables from the surrounding scope. This means they can "remember" and use variables from the context in which they were defined.

Copy
$x = 10;
$closure = function($y) use ($x) {
    return $x + $y;
};
echo $closure(5); // Outputs 15
Arrow Functions (PHP 7.4+):
PHP 7.4 introduced arrow functions as a more concise way to write simple closures that implicitly capture variables from the outer scope. For example:

Copy
$x = 10;
$arrowFunction = fn($y) => $x + $y;
echo $arrowFunction(5); // Outputs 15
Use Cases:

Callbacks for array functions like array_filter, array_map, and usort.
Event handling and listeners in web applications.
Implementing custom sorting algorithms.
Lazy loading of resources.


