<?php 
//closures function or anayomus and 

//array_map :: callback function (called for each every element on array)
/*
<pre>Array
(
    [0] => 1
    [1] => 27
    [2] => 8
)
PS 
*/

function cube($n){

    return ($n*$n*$n);
}

$b=array_map('cube',[1,3,2]);

echo "<pre>";
print_r($b);

//array_column — Return the values from a single column in the input array
/*
Array
(
    [0] => John
    [1] => Sally
    [2] => Jane
    [3] => Peter
)
*/

$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 5629,
        'first_name' => 'Peters',
        'last_name' => 'Does',
    )
);

 
$first_names = array_column($records, 'first_name'); // single column value set on 
$first_names_id = array_column($records, 'first_name','id'); // first_name as set in value and id as set key
print_r($first_names);
print_r($first_names_id);

//array_chunk — Split an array into chunks
print_r(array_chunk($first_names_id,2));

/**
 * Closure Function:
*/
/* 
Closure functiion means used out of variable (gobale veriable use on Anonymous function )*
*/

$g="Hello";
$fun=function($w) use ($g){
    return $g ." ".$w;
}
echo $fun('world'); // hello world

//eg.2

function hello($h){
    return function ($w) use($h){
        return $g ." ".$w;
    }
}
$b=hello('Hello');
echo $b('world');//Hello world

/*A closure is a function in programming that has access to variables from its containing (enclosing) function's scope, even after that containing function has finished executing.
Closures are often used to create private data and encapsulation in languages like JavaScript. They allow you to maintain state between function calls without exposing it globally.
Here's a simple JavaScript example:
Copy
function outerFunction() {
    let outerVariable = 10;

    function closureFunction() {
        console.log(outerVariable); // Accessing outerVariable from the enclosing scope
    }

    return closureFunction;
}

const closure = outerFunction();
closure(); // Outputs: 10
*/
/* Anonymous Function:
An anonymous function is a function that does not have a name. It is also sometimes referred to as a lambda function or a function literal.
Anonymous functions are often used for short, one-time tasks, or as arguments to higher-order functions.
In JavaScript, you can create anonymous functions using the function keyword without specifying a name.
Copy
const anonymousFunction = function() {
    console.log("This is an anonymous function.");
};
anonymousFunction(); // Outputs: This is an anonymous function.
Anonymous functions are commonly used in functional programming and event handling.
In summary, a closure function is a function that "closes over" its containing scope, allowing it to access variables from that scope even after the containing function has completed. An anonymous function is a function without a name, often used for short tasks or as arguments to other functions. They are two distinct concepts, but you can use anonymous functions as closures in some cases to capture and encapsulate state
 */


?>