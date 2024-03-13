<?php
$a = 10;
echo "a=".$a;
echo "a=",$a;

//o/p a=10a=10
$a = 10;
echo "a=".$a++;
echo "a=".++$a;
//o/p a=10a=12

$a = 11;
echo "a=".$a--;
echo "a=".--$a;
//o/p a=11a=9

//write a function sumation of value in php
$data=sum(1,2,3,4,5);

function sum(...$values) {
    return array_sum($values);
}

$data = sum(1, 2, 3, 4, 5);
echo array_sum($data);
echo $data; // Output: 15

/*You are given 10 chocolates initially. After returning back 3 wrappers, you can get back 1 more chocolate. Calculate how many maximum number of chocolates you can get through this process including initial 10 chocolates ? 
Write a php function “calc_chocolates(n, k)” that accepts 2 parameters n and k and calculates total number chocolates get through exchange including initial ‘n’ chocolates.
n = No. of chocolates given initially, k = exchange value

10 -3 +1 =10
8  -3 +1 =6
6  -3 +1 =4
4  -3 +1 =2 
*/

function calc_chocolates($n,$k){
  $cnt=0;
  $t=$n;
  for($i=0;$i<$n;$i++){
      //if($n==$k){//10
        $n=$n-$k;//10-3
        $n=$n+1;//7+1
        $cnt++;
      //}
  }
  echo $cnt+$t;
}	
$n=10;$k=3;
calc_chocolates($n,$k);