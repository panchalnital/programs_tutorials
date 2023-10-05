<?php

// same name of file,class can not include derived class
//
//Namespaces are similar directory structures in file system.
//Directories store relaeated files,while namespaces group related classes,
//directory prvent having wo files with same name and namespaces fllow the same principle.
//namespaces allow you to group classes and avoid name collisions.
//namespaces can also group other identifiers like functions, constants,variables,etc

//composer.json
//=> autoload : thsis key specifies the autoloafing configuration for composer
//=>psr-4 : this reders to PSR-4 autoloading standard ,which is a widdely adopted standaed for autoloading classes in php.
//=>'App\\' namespace prefix that you define in this case 
//'app/': the directory ath relative to the composer.json file where classes with th sepcified namespace prfix are located 
// compser dump-autoload
require_once('vendor/autoload.php');
use App\Test;
class post{
    public function __construct(){
        echo "connected namespace";
    }
}

namespace per1;
class person{

}

namespace per2;
class person{

}