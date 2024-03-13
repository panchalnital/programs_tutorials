<?php
// 	$str = "hello world world";
// //$output = preg_replace("/world/", "php", $str, 1);
// $output = str_replace("world", "php", $str);
// echo $output;

echo "hello".false; // hello
echo "hello".true; // hello1

function custom_shuffle(&$array) {
    $count = count($array);
    for ($i = $count - 1; $i > 0; $i--) {
        $j = mt_rand(0, $i);
        if ($j != $i) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}

// Example usage:
$array = [1, 2, 3, 4, 5];
custom_shuffle($array);
print_r($array);

$my_array = array("red","green","blue","yellow","purple");

shuffle($my_array);
print_r($my_array);

//1  abstruct class and interface class difference
//2  const and define differeace
//3  sigleton desine patten 
//4 Puzzle – Degrees between Hand of Clocks on 3:15
    // answer : 7.5°
    //     At 3:15 in the clock, H = 3 and M = 15.
    // Angle made by minute hand = M×6° = 15×6° = 90°
    // Angle made by hour hand = (H×30 + M×0.5)° = (3×30 + 15×0.5) ° = 97.5°
    // Angle between hour hand and minute hand = 97.5° – 90° = 7.5°

class signleton{
    private static $instace=null;
    private function __construct(){
        echo "connection ....";
    }
    public static function dbconn(){
        if(self::$instace==null){
            self::$instace=new signleton();
        }
        return self::$instace;
    }
    
}

signleton::dbconn();
signleton::dbconn();