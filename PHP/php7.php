<?php
https://php.watch/versions
/*
1   Improved performance =>  Having PHPNG code merged in PHP7, it is twice as fast as PHP 5.
2   Lower Memory Consumption => Optimized PHP 7 utilizes lesser resource.
3   * Scalar type declarations => Now parameter and return types can be enforced.
4   Consistent 64-bit support => Consistent support for 64-bit architecture machines.
5   Improved Exception hierarchy => Exception hierarchy is improved.
6   Many fatal errors converted to Exceptions => Range of exceptions is increased covering many fatal error converted as exceptions.
7   Secure random number generator => Addition of new secure random number generator API.
8   Deprecated SAPIs and extensions removed => Various old and unsupported SAPIs and extensions are removed from the latest version.
9   * The null coalescing operator (??) => New null coalescing operator added.
10  * Return and Scalar Type Declarations => Support for return type and parameter type added.
11  * Anonymous Classes => Support for anonymous added.
12  Zero cost asserts =>Support for zero cost assert added.
*/
// 1 null coalescing operator => replace the ? operator to ?? on php 
 //   =>The null coalescing operator (??) has been added as syntactic sugar for the common case of needing to use a ternary in conjunction with isset(). It returns its first operand if it exists and is not null; otherwise it returns its second operand.

 // Fetches the value of $_GET['user'] and returns 'nobody'
// if it does not exist.
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
$username = $_GET['user'] ?? 'nobody';

//2 Scalar type declarations => Now parameter and return types can be enforced.
