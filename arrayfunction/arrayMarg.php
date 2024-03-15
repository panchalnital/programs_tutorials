<?php
/**
 * array_merge() :index or associative array
 *                : muiple array marge in array
 *                : asscociate array with index array both marge 
 *                 : same index key array1 and and array2 they will replace on array2 
 * array_merge_recursive() multidimensional associative array
 * array_combine() index array
 *
 *  
 */


 $arr1=['dsfsdf','a'=>'dsfds','er1'];
 $arr2=['a'=>'aa','dd','cc'];
 $arr3=[1,2,3];
 array_merge($arr1,$arr2,$arr3);
 $arr=$arr1+$arr2+$arr3; // plus sing used the array1 and array2 in same key but if you want to array1 key value that time used in + sing
//  Array
//  (
//      [0] => dsfsdf
//      [a] => aa
//      [1] => er1
//      [2] => dd
//      [3] => cc
//      [4] => 1
//      [5] => 2
//      [6] => 3
//  )

// marge array1  and array2 same key then create the associate array 
 $arr11=['a'=>'ram','b'=>'sita','c'=>'er1'];
 $arr21=['a'=>'aa','b'=>'dd'];
 
 array_merge_recursive($arr1,$arr2,$arr3);
 Array
// (
//     [a] => Array
//         (
//             [0] => ram
//             [1] => aa
//         )

//     [b] => Array
//         (
//             [0] => sita
//             [1] => dd
//         )

//     [c] => er1
// )
 // [b]=>array(
//      [0]=>sita
//      [1]=>aa
 //)

 /**
  * call back function
  * closer function
  * 
  */
  // variable function

  function sum(int|float ...$numbers): int|float{
    return array_sum($numbers);
  }
  $x='sum';
  if(is_callable($x)){
    echo $x(1,2,3);//10
  }else{

  }

  // anonymous function 

// if anonymous function not define name function 
// close the function with ;
// this type of anayouns function out of scrop variable use in called closuser function
// use keyword and pass variable value 
// gobla avriable use on clouser function that will be change but outof scorp not change value 
$x=1;
$sum=function (int|float ...$numbers) use ($x): int|float{
    echo $x;
    return array_sum($numbers);
  }

echo $sum(1,2,3);

// dependency injection


// dependency injection means one class inject another class
//injecter class to inject construct, seter and geter, thogth class
//proected property cant not be injecter 
//
class f1{
  public $var1="f1 class";
  public function getvalue(){
    return $this->$var1;
  }
}

class f2{
  public $var2="f2 class";
  public function __construct(f1 $class){
    return $this->$var2=$class->var1;
  }
}

$obj=new f2(new f1);

//
 /**
* callback function id a function of the type calliable
* closer function
* callback save time and code line 
* anonymous function
* standard php function 
* non-static classes
* objects/class methods:

*/
class myclass{

    static function mycallbackfunction(){
      echo 'daily tuttial ';
    }

}

call_user_fun('myclass','mycallbackfunction');
call_user_fun('myclass::mycallbackfunction');
class myclass1{
  public $property="hellow world";
  public function mycallbackfunction1(){
    call_user_fun(array($this,'mycallbackmethod'));
  }

  public function mycallbackmethod(){
    echo $this->property;
  }


}