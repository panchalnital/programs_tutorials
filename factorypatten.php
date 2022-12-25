<?php 
class employee{
    private $empname;
    private $deptment;
    public function __construct($empname,$deptment){
        $this->empname=$empname;
        $this->deptment=$deptment;
    }
    public function showemploye(){
        return $this->empname ."  ".$this->deptment;
    }
}

class factory{
    public static function createEmp($empname,$deptment){
        return new employee($empname,$deptment);
    }
}

$obj=factory::createEmp('Nital','IT');
echo "<pre>";
print_r($obj);