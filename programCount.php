<?php
function countFreq($str, $p)
{
   
    $N = strlen($str);
    $M = strlen($p);
    $res = 0;
    for($i=0;$i<=$N-$M;$i++){
      for($j=0;$j<$M;$j++){
        if($str[$i+$j]!=$p[$j]){
          break;
        }
      }
      if($j==$M){
        $res++;
        $j=0;
      }
    }
    return $res;
}
// Driver Code
$str = "nita lpanchal datppanchal";
$p = "panchal";
echo countFreq($str, $p); //2

//------------------------------------------

$str="000112121111011";
$strleng=strlen($str);
$cnt=0;
$outarr=[];
for($i=0;$i<$strleng;$i++){
for($j=0;$j<$strleng;$j++){
if($str[$i]==$str[$j]){
$cnt++;
}
}
$out[$str[$i]]=$cnt;
$cnt=0;
}

echo "<pre>";
print_r($out);


foreach($out as $key=>$val){
 
  for($i=0;$i<$val;$i++){
     echo $key;
  }
}

