<?php
/* Output:1 
2 3 
4 5 6 
7 8 9 10 */
$k=1;
for($i=0;$i<4;$i++){
  for($j=0;$j<=$i;$j++){
    echo $k. " ";
    $k++;
  }
  echo "\n";
}


/*Output:
0 
0 1 
0 1 0 
0 1 0 1 
0 1 0 1 0*/
for($i=1;$i<6;$i++){
    for($j=1;$j<=$i;$j++){
      if($j%2!=0){
        echo "0 ";
      }else{
        echo "1 ";
      }
    }
    echo "\n";
  }
  
/*Output:
1 
1 2 
1 2 3 
1 2 3 4 
1 2 3 4 5 */
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
      echo $j." ";
    }
    echo "\n";
  }

/* Output:
FEDCBA
FEDCB
FEDC
FED
FE
F*/

$char=range('A','Z');
for($i=0;$i<=5;$i++){
  for($j=5;$j>=$i;$j--){
    echo $char[$j];
  }
  echo "\n";
}

/* factorial number */

$num=4;
$fact=1;
for($i=$num;$i>=1;$i--){
    $fact=$fact*$i;
}
echo $fact;