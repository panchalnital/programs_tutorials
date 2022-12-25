<?php
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



?>