<?php
//write a program is Fibonacci Series and (revet order)
//0 1 1 2 3 5 8 13 21......
$cnt=0;
$n1=0;$n2=1;

$out=$n1." ".$n2;
while($cnt<10){
    
    $n3=$n2+$n1;
    $out.=" ".$n3;
    $n1=$n2;
    $n2=$n3;
    $cnt++;
}
//echo $out;
//Fibonacci Series and (revet order)
$arr=explode(' ',$out);
//print_r($arr);
for($i=count($arr)-1;$i>=0;$i--){
  echo $arr[$i]." ";
}



/********************find the multdimaton search value ************** */

$multiArray=array(
  array("name"=>"nital","age"=>32),
  array("name"=>"rahul","age"=>30),
  array("name"=>"mehul","age"=>33),
  );

  $searchCriteria = array("name" => "nital");
  //$searchCriteria = array("name" => "nital", "city" => "New York");
  
$result = array_filter($multiArray, function ($item) use ($searchCriteria) {
      foreach ($searchCriteria as $key => $value) {
          if ($item[$key] != $value) {
              return false;
          }
      }
      return true;
});
  
  print_r($result);

 // ===========================================================
$multidimensionalArray = array(
    array('name' => 'Alice', 'age' => 30),
    array('name' => 'Bob', 'age' => 20),
    array('name' => 'Bhai', 'age' => 30),
    array('name' => 'Charlie', 'age' => 35)
);

// Selection sort
$n = count($multidimensionalArray);
for ($i = 0; $i < $n - 1; $i++) {
    $maxIndex = $i;

    for ($j = $i + 1; $j < $n; $j++) {
        // Compare ages in descending order
        if ($multidimensionalArray[$j]['age'] > $multidimensionalArray[$maxIndex]['age']) {
            $maxIndex = $j;
        } elseif ($multidimensionalArray[$j]['age'] == $multidimensionalArray[$maxIndex]['age']) {
            // If ages are equal, compare names in descending order
            if ($multidimensionalArray[$j]['name'] > $multidimensionalArray[$maxIndex]['name']) {
                $maxIndex = $j;
            }
        }
    }

    // Swap elements
    $temp = $multidimensionalArray[$i];
    $multidimensionalArray[$i] = $multidimensionalArray[$maxIndex];
    $multidimensionalArray[$maxIndex] = $temp;
}

// Display the sorted array
print_r($multidimensionalArray);


/******************************************** */
// find the maximum number in array
function findMaxValue($array) {
    $maxValue = PHP_INT_MIN;

    foreach ($array as $row) {
        $maxInRow = max($row);
        if ($maxInRow > $maxValue) {
            $maxValue = $maxInRow;
        }
    }

    return $maxValue;
}

// Example usage:
$twoDArray = array(
    array(3, 7, 2),
    array(9, 12, 5),
    array(6, 1, 8)
);

echo "Maximum value: " . findMaxValue($twoDArray);

//==============
//program string manipulation frequency count in php code


$string="this is data";
$string=strtolower($string);
$str_split=str_split($string);
$count=array_count_values($str_split);
print_r($count);

foreach($count as $keys=>$value){
  echo "charater  ".$keys." countr ".$value. "\n ";
}


// find max number repearted count charater find in the string 
$str="welcome the india in world is";
$strchar=str_split(str_replace(" ","",$str));
$countArr=array_count_values($strchar);
$max=max($countArr);
$char=array_search($max,$countArr);
echo $char."=".$max;

// matrix output 1 5 9;

$a = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

$cout=count($a);

for($i=0;$i<$cout;$i++){
  //echo $a[$i][$i].",";
echo $a[$i].",";
}

$output="1,5,9"; 

//==================================
// excel index in function 
function getIndex($letter){
    $cnt=1;
    $letterArray=[];
  	for($i=ord('A');$i<=ord('Z');$i++){
  	    $letterchar1=chr($i);
  	    $letterArray[$letterchar1]=$cnt;
  	    $cnt++;
  	}

	$secondarr=[];
	$cnt=27;
	$letterchar=range('A','Z');
	for($i=ord('A');$i<=ord('Z');$i++){
		for($j=ord('A');$j<=ord('Z');$j++){
		  $chr=chr($i).chr($j);
			$secondarr[$chr]=$cnt;
			$cnt++;
		}
	}
	$merge=array_merge($letterArray,$secondarr);
	foreach($merge as $key=>$value){
  	if(strtolower($key)==strtolower($letter)){
  		return $value;
  	}
	}
}
echo getIndex('AD');

//============================== shuffle
function shuffle_cust(&$array){
  
    for($i=count($array)-1;$i>0;$i--){
      $j=random_int(0,$i);
      if($j!=$i){
        $temp=$array[$i];
        $array[$i]=$array[$j];
        $array[$j]=$temp;
      }
    }
  }
  $array = [1, 2, 3, 4, 5];
  shuffle_cust($array);
  print_r($array);