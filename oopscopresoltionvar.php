<?php
// {const} keyword initilization thoght to function (not class object to access to not change value)
// const and static varaible access thoght the class 
// access to user Scope resolution 

// self :: means the class in binding 
// parent:: means has relation thoght binding 
class abc{
  
    const MAX=10;
    public static $var=1;
    
    public function __construct(){
      echo self::$var++;
    }
    
  }
  
  //echo abc::MAX;
  //echo abc::$var;
  echo "<pre>";
  $obj=new abc();
  $obj1=new abc();
  var_dump($obj);
  var_dump($obj1);

//-----------------------------------------------
class abc{
    public $a;
    public function __construct(){
      $this->a=10;
    }
    public function xyz()
    {
      echo "call the abc method ".$this->a;
    }  
  }
  
  class qpr extends abc{
    public $b;
    public function __construct(){
      $this->b=20;
      parent::__construct();
    }
    public function xyz()
    {
      parent::xyz();
      echo "\n call the pqr method ".$this->b;
    }  
  }
  echo "<pre>";
  $obj=new qpr();
  $obj->xyz();

?>