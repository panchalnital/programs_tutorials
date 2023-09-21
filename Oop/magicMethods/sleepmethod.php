<?php
/**
 * checks if the class has a function with the magic name __sleep(). If so, that function is executed
 *  prior to any serialization. It can clean up the object and is supposed to return an array with the names of all variables of that object that should be serialized. 
 * If the method doesn't return anything then null is serialized and E_NOTICE is issued.
 * 
 * 
 * // object data can't be store in session ,databse,file 
 * //serialize () function used convert array from data
 */

class Connection
{
    protected $link;
    private $dsn, $username, $password;
    
    public function __construct($dsn, $username, $password,$tablename)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->tablename = $tablename;
        $this->connect();
    }
    
    private function connect()
    {
        $this->link = new PDO($this->dsn, $this->username, $this->password);
    }
    

    // clean the array value 2 : only display the dsn and username and password value
    // this call that time if create the object or call function serialization function 
    public function __sleep() 
    {
        return array('dsn', 'username', 'password');
    }
    
    public function __wakeup()
    {
        $this->connect();
    }
}
$dsn='dsn';
$username='localhost';
$password='password';
$tablename='student';
$conn=new Connection($dsn, $username, $password,$tablename);
$sel->serialize($conn);// that function before call sleep function clear the objects of value

?>