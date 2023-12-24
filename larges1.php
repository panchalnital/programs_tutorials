<?php
//write a program is Fibonacci Series and (revet order)
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
