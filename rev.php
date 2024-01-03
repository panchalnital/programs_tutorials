<?php 

$str="Hello World";

$len=strlen($str);
for($i=($len-1);$i>=0;$i--){
    echo $str[$i];
}

//or


$str = "nital";
$characters = str_split($str);
$reversedStr = "";

foreach (array_reverse($characters) as $char) {
    $reversedStr .= $char;
}

echo $reversedStr;




/************************** */

$num=565989;
$revsum=0;
while($num>1){
$rem=$num%10;
$revsum=($revsum*10)+$rem;
$num=($num/10);
}
echo "<br>Reverse number of 565989 is: $revsum";  
echo "test";

//----------------------- postive and nagtive revest number----------//
$num=abs(-63563);
$revsum=0;
while($num>1){
  $rem=$num%10;
  $revsum=($revsum*10)+$rem;
  $num=($num/10);
}

echo $revsum*-1;
//----------------------- postive and nagtive revest number----------//

$data = "Nittal Pravinbhai Panchal";
$arr=explode(' ',$data);
$out=[];
for($i=0;$i<count($arr);$i++){
  $larger=1;
  $strrr=count_chars($arr[$i],3);
  $leng=strlen($strrr);
  if($leng>$larger){
    $larger=$leng;
     $out[$arr[$i]]=$larger;
  }

  
  
}




echo "<pre>";
print_r($out);

$len=3;
$characters='ABC';
$strleng=strlen($characters );
$randomstr='';
for($i=0;$i<$len;$i++){
  $randomstr.=$characters[random_int(0,$strleng-1)];
}
echo $randomstr;
?>