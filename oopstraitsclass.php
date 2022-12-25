<?php
class xyz{
    static $cn=0;
    public $ncnt=0;
    public function __construct(){
      self::$cn++;
      $this->ncnt++;
    }
  }
  
  
  echo "<pre>";
  $obj=new xyz();
  $obj1=new xyz();
  $obj2=new xyz();
  
  echo xyz::$cn;
  echo "\n".$obj2->ncnt;

?>