<?php 
$array = array(1 => "a", "1" => "b", 1.5 => "c", true => "d");  // true = 1 

echo $array[1]; // d // overwrites previous values

//---------------------------
$x = true and false;
var_dump($x); //true


//---------------------------
echo "nital"+9; //php 8 error typer caser
                // 7.3 is warraning error output 9
//------------------------------------------
$array = array(1, 2, 3, 4, 5);
$array = array_map(function($value) {
    return $value * 2;
}, $array);

echo implode(", ", $array); // 2,4,6,8,10
//--------------------------------------
$number = 3;
echo $number;     //3
echo "</br>";
echo $number++ + $number++; // 3+ 4 =7
echo "</br>";
echo $number; //5
echo "</br>";
echo $number-- - $number--; //4-3 =1 
echo "</br>";
echo $number; //3
//-----------------------------------
$array = [1, 2, 3, 4, 5];
unset($array[2]);
$result = array_values($array);

echo implode(", ", $result); // 1,2,4,5

//----------------------------------------
$person = 'John ';
$person[10] = 'Smith';
echo $person; // John      S

//-----------------------------------------
$array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry'];
unset($array['b']);
$result = array_keys($array);

echo implode(", ", $result); //a,c

//-------------------------------------
$array = [1, 2, 3, 4, 5];
foreach ($array as &$value) {
    $value *= 2;
}
unset($value);
//print_r($array);exit; 2,4,6,8,10 
$result = array_map(function($v) { return $v - 1; }, $array);
echo implode(", ", $result); //1,3,5,7,9
