<?php
// function changing the 

class test{
    public function f1(){
      echo "this is f1 function";
      return $this; // this is use then will callable the f2 function on objects
    }
    public function f2(){
      echo "this is f2 function";
      return $this;
    }
    public function f3(){
      echo "this is f3 function";
    }
  }
  
  $obj=new test();
  $obj->f1()->f2()->f3(); // call mutiiple function useing error in 
//----------------------------------------------------