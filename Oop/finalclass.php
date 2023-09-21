<?php
//final methoods can't be overrrid derived class if geting error 
//final class class if deacler can't be extend another class
//

class abc{
    public function __contract(){
        echo "call abc class";
    }
    final function noofwheel(){
        echo 4;
    }
}
final class BMW{ // class BMW may not inherit from final class 
    final function noofwheel(){
        echo 4;
    }
}
$BMW=new BMW;
$BMW->noofwheel();
class tesla extends abc{
    public function noofwheel(){
        echo 5;
    }
}
$t=new tesla;
$t->noofwheel();// geting error can't override final method fetal error