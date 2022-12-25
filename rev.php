<?php 

$str="Hello World";

$len=strlen($str);
for($i=($len-1);$i>=0;$i--){
    echo $str[$i];
}


$num=565989;
$revsum=0;
while($num>1){
$rem=$num%10;
$revsum=($revsum*10)+$rem;
$num=($num/10);
}
echo "<br>Reverse number of 565989 is: $revsum";  
?>