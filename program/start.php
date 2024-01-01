<?php
/*
Output:

    * 
   * * 
  * * * 
 * * * * 
* * * * * 
 * * * * 
  * * * 
   * * 
    * 
*/

for($i=1;$i<=5;$i++){
    for($j=5;$j>$i;$j--){
      echo " ";
    }
    for($k=1;$k<=$i;$k++){
      echo "* ";
    }
    echo "\n";
  }
  for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
      echo " ";
    }
    for($k=5;$k>$i;$k--){
      echo "* ";
    }
    echo "\n";
  }