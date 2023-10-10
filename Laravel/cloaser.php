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



