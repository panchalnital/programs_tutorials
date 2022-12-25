<?php
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
$obj=singleton::showInstance();
$obj1=singleton::showInstance();

class singleton2{
    private static $inst=null;
    private function __construct()
    {
        echo "</br>Connect database2";

    }
    public static function connectdb(){
        if(self::$inst==null){
            self::$inst=new static();
        }else{
            echo "</br>Already connected db";
        }
        return self::$inst;
    }
}
$obj2=singleton2::connectdb();
$obj3=singleton2::connectdb();

?>