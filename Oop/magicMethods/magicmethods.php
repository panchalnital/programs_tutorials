<?php 
//https://www.geeksforgeeks.org/what-are-magic-methods-and-how-to-use-them-in-php/
//magic method automatically call in class creater on objects collator_get_error_code
//magic method __ sign 
//list of magic methods
/*
    __construct()
    __destruct() :magic method is called automatically when an object is no longer referenced or when the 
                    script finishes execution. It is used to perform cleanup tasks or release resources held by the object
    __get()   This magic method is invoked when accessing inaccessible or non-existent properties of an object. It allows you to define custom logic for retrieving the value of a property.
    __set()   magic method is triggered when assigning a value to an inaccessible or non-existent property of an object. It allows you to define custom logic for setting the value of a property.
    __isset()  his magic method is called when using the isset() function to check if an inaccessible or non-existent property of an object is set. It allows you to define custom logic for checking the existence of a property
    __unset()  The __unset() magic method is invoked when using the unset() function to unset an inaccessible or non-existent property of an object. It allows you to define custom logic for removing a property.
    __autoload()
    __clone()
    __sleep()
    __wakeup()
    __call()  This magic method is triggered when invoking inaccessible or non-existent methods of an object. It allows you to define custom logic for handling method calls.
    __callStatic()
    __toString()
    __invoke()
    __toString(): The __toString() magic method is called when an object is treated as a string, such as when using the echo or print functions. It allows you to define a string representation of the object.
    


    =>magic method not need objects create that mean automatically call by any condition 
    =>magic method starting prefix(__) function
    */
