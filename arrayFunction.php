<?php 
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


?>