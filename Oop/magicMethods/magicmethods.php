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

==========================================================
In PHP, "magic methods" are special methods with double underscores (__) at the beginning of their names. These methods are also known as overloading methods because they are automatically called by the PHP interpreter when certain actions occur.

Advantages of Magic Methods in PHP:

=Flexibility and Dynamism: Magic methods provide a way to intercept and handle various language constructs, adding a level of flexibility and dynamism to your code.

=Customization of Behavior: You can customize the behavior of your classes by implementing magic methods, allowing you to define how objects of your class should behave in certain situations.

=Automated Actions: Magic methods like __construct and __destruct allow you to automate certain actions during object creation and destruction.

=Property Overloading: Methods like __get and __set enable you to implement overloading for reading or writing data to inaccessible properties.


Disadvantages of Magic Methods in PHP:

=Hidden Behavior: Magic methods may introduce hidden behavior that is not immediately evident by reading the class code. This can make the code less transparent and harder to understand.

=Performance Impact: Some magic methods, especially those related to overloading, can have a performance impact. For example, using __call and __callStatic for method overloading can be slower compared to direct method calls.

=Potential for Misuse: Magic methods can be misused, leading to code that is difficult to maintain and debug. Overuse of magic methods may make the codebase less predictable.

=Limited Documentation: Magic methods may not be as well-documented as regular methods, leading to challenges in understanding their usage and behavior.

=In summary, while magic methods in PHP can provide flexibility and convenience, they should be used judiciously. It's important to weigh the advantages against the potential drawbacks and consider whether there are alternative, more explicit approaches to achieving the same goals in your code.

    */
