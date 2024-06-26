<?php
/** duplicate value remove in array and ascending order in php without php function  */

$input="1,2,3,1,4,3,6,5,4,100";
$array=explode(',',$input);
$out=[];
//option 1
foreach($array as $num){
    if(!in_array($num,$out)){
        $out[]=$num;
    }
}

print_r($out);
//or
//option 2
$uniqueme = array();
foreach ($array as $key => $value) {
   $uniqueme[$value] = $key;
}
$final = array();
foreach ($uniqueme as $key => $value) {
   $final[] = $key;
}
//print_r($uniqueme);
print_r($final);

/** find the duplicate values */
$Array1 = [123,124,125,127,128];
$Array2 = [126,129,130,131,132];
$Array3 = [125,128,129,130,140];

$merge=array_merge($Array1,$Array2,$Array3); // merge the array 
$count=array_count_values($merge);//find the duplicate the values of count
$duplicate=array_filter($count,function($key){
    return $key>1;
});

echo implode(",",array_keys($duplicate));//array to covert string




//===================================================


/* max value find in array */
$array1=[5,1,9,8,2,6];
$larger=$array1[0];
for($i=1;$i<count($array1);$i++){
    if($array1[$i]>$larger){
        $larger=$array1[$i];
    }
}

echo "max larger value =".$larger;

/* min value find in array */

$array2=[5,1,9,8,2,6];
$smaller=$array2[0];
for($i=1;$i<count($array2);$i++){
    if($array2[$i]<$smaller){
        $smaller=$array2[$i];
    }
}

echo "<br> Smaller value =".$smaller;


/* descind order value find in array */

$array3=[5,1,9,8,2,6,14,12,11,19];
//$array3=(array)array('2','4','8','5','1','7','6','9','10','3');
for($i=0; $i< count((array)$array3); $i++){
    for($j=0; $j< count((array)$array3)-1; $j++){
        if($array3[$j]<$array3[$j+1]){
            $temp=$array3[$j+1];
            $array3[$j+1]=$array3[$j];
            $array3[$j]=$temp;
        }
    }
}

echo "<br> sorting";
echo "<pre>";
print_r($array3);

/* ascrding order value find in array */

//$array3=[5,1,9,8,2,6,14,12,11,19];
$array3=[15,'abc',2,20,11,5];
//$array3=(array)array('2','4','8','5','1','7','6','9','10','3');
for($i=0; $i< count((array)$array3); $i++){
    for($j=0; $j< count((array)$array3)-1; $j++){
        if($array3[$j]>$array3[$j+1]){
            $temp=$array3[$j+1];
            $array3[$j+1]=$array3[$j];
            $array3[$j]=$temp;
        }
    }
}

echo "<br> sorting";
echo "<pre>";
print_r($array3);



//---------------------------------
function ascdesc($arr){
    sort($arr);
   echo $f=reset($arr);
   echo $l=end($arr);
   $mis=[];
   for($i=$f;$i<=$l;$i++){
     if(in_array($i,$arr[$i])){
       $mis[$i]=$arr[$i];
     }else{
        $mis[$i]=$i;
     }
   }
   
   print_r($mis);
   exit;
 } 
 
 $out=ascdesc([1,10,9,5,15,13]);
 print_r($out);


//find largest and second largest element in array
$arr=[1,10,9,5,15,13];
$max=$smax=0;
for($i=0;$i<count($arr);$i++){
    if($arr[$i]>$max){
        $smax=$max;
        $max=$arr[$i];
    }else if($arr[$i]>$smax && $arr[$i]!=$max){
        $smax=$arr[$i];
    }
}

//Smallest sum of two elements Time complexity O(n)

$array3=[5,9,8,6,14,12,11,19];
$max=$smax=2147483647;
for($i=0;$i<count($array3);$i++){
  if($array3[$i]<$max){
    $smax=$max;
    $max=$array3[$i];
  }else if($array3[$i]<$smax && $array3[$i]!=$max){
    $smax=$array3[$i];
  }
}
echo $max." ".$smax;

class dbconnection{
    private static $instace=null;
    private function __construct(){
        echo "connection";
    }
    public static function dbconn(){
        if(self::$instace==null){
            self::$instace=new dbconnection();
        }
        return self::$instace;
    }
}



$multidimensionalArray = array(
    array('name' => 'Alice', 'age' => 30),
    array('name' => 'Bob', 'age' => 20),
    array('name' => 'Charlie', 'age' => 35)
);

$length = count($multidimensionalArray);

// Bubble sort  // sorting age or name;
for ($i = 0; $i < $length - 1; $i++) {
    for ($j = 0; $j < $length - $i - 1; $j++) {
        if ($multidimensionalArray[$j]['age'] > $multidimensionalArray[$j + 1]['age']) {
            // Swap the elements
            $temp = $multidimensionalArray[$j];
            $multidimensionalArray[$j] = $multidimensionalArray[$j + 1];
            $multidimensionalArray[$j + 1] = $temp;
        }
    }
}

// Display the sorted array
foreach ($multidimensionalArray as $person) {
    echo "Name: " . $person['name'] . ", Age: " . $person['age'] . "<br>";
}

//PHP random string generator     
$length=3;
$characters = 'ABC';
//$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength = strlen($characters);
$randomString = '';
for ($i = 0; $i < $length; $i++) {
  echo "\n";
    $randomString .= $characters[random_int(0, $charactersLength - 1)];
}
echo $randomString, "\n";
?>