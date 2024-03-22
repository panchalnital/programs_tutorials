<?php
/*echo and print are largely the same in PHP. Both are used to output data to the screen.

The only differences are as follows:

echo does not return a value whereas print does return a value of 1 (this enables print to be used in expressions).
echo can accept multiple parameters (although such usage is rare) while print can only take a single argument.*/

//1)==>

$x = true and false;
var_dump($x); // o/p bool(true)

//2)
$x = 5;
echo $x;  //5
echo "\n";
echo $x++ + $x++; //5 + 6 ==11
echo "\n";
echo $x;  //7
echo "\n";
echo $x-- - $x--; // 6 - 5=1
echo "\n";
echo $x; //5

//3)
$a = '1';
$b = &$a;
$b = "2$b";  
//o/p 21

//4)
var_dump(0123 == 123);  //false
var_dump('0123' == 123); // true
var_dump('0123' === 123); //false

//5
$referenceTable = array();
$referenceTable['val1'] = array(1, 2);
$referenceTable['val2'] = 3;
$referenceTable['val3'] = array(4, 5);

$testArray = array();

$testArray = array_merge($testArray, $referenceTable['val1']);
var_dump($testArray);/**
*array(2) {
* [0]=>
* int(1)
*  [1]=>
*  int(2)
*} */
$testArray = array_merge($testArray, $referenceTable['val2']);
var_dump($testArray); // null
$testArray = array_merge($testArray, $referenceTable['val3']);
var_dump($testArray);//null

echo $x = 3 + "15%" + "$25"; //3 +15% ==18 // $25 as veriable 

$text = 'John ';
echo $text[10] = 'Doe';//D


$str1 = 'yabadabadoo';
$str2 = 'yaba';
if (strpos($str1,$str2)) { //not macth
    echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
    echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}

//"yabadabadoo" does not contain "yaba"

//sloved
$pos=strpos($str1,$str2);
if ($pos !== false) {
    echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
    echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}

//write a function sumation of value in php
$data=sum(1,2,3,4,5)

function sum(...$values) {
    return array_sum($values);
}

$data = sum(1, 2, 3, 4, 5);
echo array_sum($data);
echo $data; // Output: 15


$x=10;
$x+++$x++;
echo $x;    //12
$x---$x--;
echo $x;   //10