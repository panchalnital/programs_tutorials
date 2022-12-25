<?php 
// static variable this bind thoght the class 
// not object thoght bind static variable
// goble skip value of variable 


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
  
  echo xyz::$cn; //4
  echo "\n".$obj2->ncnt; //1

//-----------------------------------
class singleton{
    private static $instance=null;
    private function __construct(){
        echo "Connect";
    }
    public static function showInstance(){
        if(self::$instance==null){
            self::$instance=new static();
        }else{
            echo "Alreay connected";
        }
        return self::$instance;
    }

}
$obj=singleton::showInstance();1



?>