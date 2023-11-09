<?php
/***
 * https://www.youtube.com/watch?v=sBwsyzBRSAQ
 * 1 => Union types
 *      => union type is type declation multple type of data pass  
 *      
 *      =>Instead of PHPDoc annotations for a combination of    types, you can use native union type declarations that are validated at runtime.
 *
 */
class calculate {
    public function add(int|string $a,int|string $b):int|string
    {
        if(is_integer($a) && is_integer($b))
        return $a+$b;

        if(is_string($a) && is_string($b))
        return $a.$b;
    }
}

/***
 * 2 Match Expression : 
 *          :similar type switch control 
 *          : on this single line expression used
 *      : this check stick type data check
 *      : if not default not use in match return error
 *  The new match is similar to switch and has the following features:
 * Match is an expression, meaning its result can be stored in a    variable or returned.
    
 Match branches only support single-line expressions and do not need a break; statement.
    
    Match does strict comparisons.
 * 
 * 
 */
return match($statusCode)
{
    200,201 => 'success',
       404 => 'not found',
       505 => 'internal server error',
    default => 'unknown status code',
};

/***
 * 3 Named arguments: pass name of arguments not need to order of arguments
 *  Specify only required parameters, skipping optional ones.
    Arguments are order-independent and self-documented.
 * 
 */
class person{
    public string $name;
    public string $gender;
    public int $age;
    public function setPerson(string $name,string $gender,int $age){
        $this->name=$name;
        $this->gender=$gender;
        $this->age=$age;
    }
}
$person=new person();
$person->setPerson(gender:'male',name:'rahul',age:35);
/***
 * 4 Constructor property promotion: 
 * 
 * Less boilerplate code to define and initialize properties.
 * 
 */

 class Point {
    public function __construct(
      public float $x = 0.0,
      public float $y = 0.0,
      public float $z = 0.0,
    ) {}
  }

  /***
   * 5 Nullsafe operator : some time get error null property is null
   *        if access the property of objects is exiting available not 
   * =>Instead of null check conditions, you can now use a chain of calls with the new nullsafe operator. When the evaluation of one element in the chain fails, the execution of the entire chain aborts and the entire chain evaluates to null.
   */
  $county=$session?->user?->getaddres?->country;


  str_contains()

  str_starts_with() and str_ends_with() function



  str_starts_with('haystack', 'hay'); // true
str_ends_with('haystack', 'stack'); // true