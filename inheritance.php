<?php 
class abc{
    public function ab(){
        echo "abc------- <br>";
    }
}

class pqr extends abc{
    public function __construct(){
        echo "abc------- <br>";
    }
}

class rst extends pqr{
    public function __construct(){
        echo "rst------- <br>";
    }
}

$ob=new rst();
print_r($ob);
?>