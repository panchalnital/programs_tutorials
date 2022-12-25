<?php 

for($i=1;$i<=5;$i++){
    for($j=1;$j<=5;$j++){
        if($i==1 || $i==5){
            echo "#";
        }else{
            if($j==1 || $j==5){
                echo "#";
            }else{
                echo "&nbsp;";
            }
        }
    }
    echo "<br>";
}



$arr=[1,5,2,9,3,5,2,5,1,9];
$out=[];
$cnt=0;
for($i=0;$i<count($arr);$i++){
  for($j=0;$j<count($arr);$j++){
      if($arr[$i]==$arr[$j]){
        $cnt++;
      }
  }
  $out[$arr[$i]]=$cnt;
  $cnt=0;
}

echo "<pre>";
print_r($out);


$str="abcdba";
$strlen=strlen($str);
$strout=[];
$cnt1=0;
for($i=0;$i<$strlen;$i++){
  for($j=0;$j<$strlen;$j++){
    if($str[$i]==$str[$j]){
        $cnt1++;
      }
  }
   $strout[$str[$i]]=$cnt1;
   $cnt1=0;
}

echo "<pre>";
print_r($strout);


$strarr=['a','b','c','a','c'];
$strlenarr=count($strarr);
$stroutarr=[];
$cnt1=0;
for($i=0;$i<$strlenarr;$i++){
  for($j=0;$j<$strlenarr;$j++){
    if($strarr[$i]==$strarr[$j]){
        $cnt1++;
      }
  }
   $stroutarr[$strarr[$i]]=$cnt1;
   $cnt1=0;
}

echo "<pre>";
print_r($stroutarr);

?>